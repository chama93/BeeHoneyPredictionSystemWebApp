# Bee Honey Production Prediction

### Requirements

- Python3
- Node - v16.19.0
- pip install pandas
- pip install xgboost
- pip install scikit-learn

### How to run

`node server.js`

### Endpoint

```
curl -X POST \
 http://localhost:3000/predict \
 -H 'Content-Type: application/json' \
 -d '{
"Highest_Yeild_Month": "March",
"Location": "Uva Province",
"NumHives": "51-100",
"Flowers": "Vegetables",
"HarvestFreq": "Once a Year",
"Symptoms": "No",
"DeadBees": "No",
"InspectFreq": "Every 2 Weeks",
"ColonyChanges": "Yes",
"TempRange": "32-100"
}'
```
