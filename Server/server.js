const express = require("express");
const bodyParser = require("body-parser");
const { PythonShell } = require("python-shell");
const cors = require("cors");
const multer = require("multer");
const fs = require("fs");

const app = express();
const upload = multer({ dest: "uploads/" });
app.use(cors());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.post("/predict", (req, res) => {
  console.log("-----Prediction Begins-------");
  const data = req.body;
  try {
    let options = {
      args: [JSON.stringify(data)],
    };

    PythonShell.run("./predict.py", options)
      .then((messages) => {
        console.log(messages[0]);
        res.json({ prediction: messages[0] });
      })
      .catch((e) => {
        console.log("-----Error----");
        res.json({ e });
      });
  } catch (e) {
    console.log("-----Error----");
    res.json({ e });
  }
});

app.post("/upload", upload.single("file"), (req, res) => {
  try {
    const file = req.file;
    const oldPath = file.path;
    const newPath = `${file.destination}/${file.originalname}`;
    fs.renameSync(oldPath, newPath);
    let options = {
      args: [file.originalname],
    };
    PythonShell.run("./beeDiseasePredict.py", options)
      .then((messages) => {
        console.log(messages[2]);
        res.json({ prediction: messages[2] });
      })
      .catch((e) => {
        console.log("-----Error----", e);
        res.json({ e });
      });
  } catch (e) {
    console.log("-----Error----");
    res.json({ e });
  }
});

app.get("/location-data", (req, res) => {
  try {
    fs.readFile("locations.json", (err, data) => {
      if (err) {
        res.writeHead(500);
        res.end(`Error reading file`);
        return;
      }
      res.writeHead(200, { "Content-Type": "application/json" });
      res.end(data);
    });
  } catch (e) {
    console.log("-----Error----");
    res.json({ e });
  }
});

app.get("/getPdf", (req, res) => {
  try {
    fs.readFile("hony_bee_data.pdf", (err, data) => {
      if (err) {
        res.writeHead(500);
        res.end(`Error reading file`);
        return;
      }
      res.setHeader(
        "Content-disposition",
        "attachment; filename=HoneyBeeData.pdf"
      );
      res.setHeader("Content-type", "application/pdf");
      res.end(data);
    });
  } catch (e) {
    console.log("-----Error----");
    res.json({ e });
  }
});

// Start the server
const PORT = process.env.PORT || 4000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
