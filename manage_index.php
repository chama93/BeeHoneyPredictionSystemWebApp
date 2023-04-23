<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap JavaScript-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>

<body>

  <!-- Button trigger modal -->
  <div class="container my-3">
    <h2 class="text-center"> User Management </h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add New User
    </button>
    <br><br><br>
    <div id="displayDataTable"></div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New User </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <div class="mb-3">
              <label for="completename" class="form-label">User Name</label>
              <input type="text" class="form-control" id="completename" placeholder="Enter Name">
            </div>
            <div class="mb-3">
              <label for="completephone" class="form-label">Phone Number</label>
              <input type="phone" class="form-control" id="completephone" placeholder="Enter Phone Number">
            </div>
            <div class="mb-3">
              <label for="completeusername" class="form-label">Username</label>
              <input type="text" class="form-control" id="completeusername" placeholder="Enter Username">
            </div>
            <div class="mb-3">
              <label for="completepassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="completepassword" placeholder="Enter Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick="adduser()">Submit</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <input type="text" value="1">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!--update modal-->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"> Update User </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="updatename" class="form-label">User Name</label>
            <input type="text" class="form-control" id="updatename" placeholder="Enter Name">
          </div>
          <div class="mb-3">
            <label for="updatephone" class="form-label">Phone Number</label>
            <input type="phone" class="form-control" id="updatephone" placeholder="Enter Phone Number">
          </div>
          <div class="mb-3">
            <label for="updateusername" class="form-label">Username</label>
            <input type="text" class="form-control" id="updateusername" placeholder="Enter Username">
          </div>
          <div class="mb-3">
            <label for="updatepassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="updatepassword" placeholder="Enter Password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" onclick="updateDetails()">Update</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <input type="hidden" id="hiddendata">

        </div>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      displayData()
    });
    //display function
    function displayData() {
      var displayData = "true";
      $.ajax({
        url: "display.php",
        type: 'post',
        data: {
          displaySend: displayData
        },
        success: function(data, status) {
          $('#displayDataTable').html(data);
        }
      });
    }

    function adduser() {
      var nameAdd = $('#completename').val();
      var phoneAdd = $('#completephone').val();
      var usernameAdd = $('#completeusername').val();
      var passwordAdd = $('#completepassword').val();

      $.ajax({
        url: "insert.php",
        type: 'post',
        data: {
          nameSend: nameAdd,
          phoneSend: phoneAdd,
          usernameSend: usernameAdd,
          passwordSend: passwordAdd
        },
        success: function(data, status) {
          // function to display data;
          //console.log(status); 
          $('#exampleModal').modal('hide');
          displayData();
        }
      });
    }
    //Delete Record
    function DeleteUser(deleteid) {
      $.ajax({
        url: "delete.php",
        type: 'post',
        data: {
          deleteSend: deleteid
        },
        success: function(data, status) {
          displayData();
        }
      });
    }

    // Update function 
    function GetDetails(updateid) {
      $('#hiddendata').val(updateid);

      $.post("update.php", {
        updateid: updateid
      }, function(data, status) {
        console.log(data);
        var userid = JSON.parse(data);

        $('#updatename').val(userid.name);
        $('#updatephone').val(userid.phone);
        $('#updateusername').val(userid.username);
        $('#updatepassword').val(userid.password);

      });
      $('#updateModal').modal('show');
    }
    //onclick update event function
    function updateDetails() {
      var updatename = $('#updatename').val();
      var updatephone = $('#updatephone').val();
      var updateusername = $('#updateusername').val();
      var updatepassword = $('#updatepassword').val();
      var hiddendata = $('#hiddendata').val();

      $.post("update.php", {
        updatename: updatename,
        updatephone: updatephone,
        updateusername: updateusername,
        updatepassword: updatepassword,
        hiddendata: hiddendata
      }, function(data, status) {
        $('#updateModal').modal('hide');
        displayData();

      });


    }
  </script>

</body>

</html>