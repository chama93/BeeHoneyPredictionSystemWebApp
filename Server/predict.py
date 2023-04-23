import json
import pickle
import sys
import numpy as np

encoder_path = "./label_encoder.pkl"
model_path = "./model.pkl"

data = json.loads(sys.argv[1])

# data = {'Highest_Yeild_Month': 'March', 'Location': 'Uva Province', 'NumHives': '51-100', 'Flowers': 'Vegetables', 'HarvestFreq': 'Once a Year', 'Symptoms': 'No', 'DeadBees': 'No', 'InspectFreq': 'Every 2 Weeks', 'ColonyChanges': 'Yes', 'TempRange': '32-100'}


with open(encoder_path, 'rb') as f:
    encoder = pickle.load(f)


encoded_values = []

for key, value in data.items():
    encoded_value = encoder[key].transform([value])[0]
    encoded_values.append(encoded_value)


# Predicting
x = np.array(encoded_values)
x_reshaped = np.reshape(x, (1, -1))

xgb_model = pickle.load(open('model.pkl', 'rb'))
y_pred = xgb_model.predict(x_reshaped)


decoded_values = encoder['AvgYield'].inverse_transform(y_pred.ravel())
print(decoded_values[0])