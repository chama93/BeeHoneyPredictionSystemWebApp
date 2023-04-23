import os
os.environ['TF_CPP_MIN_LOG_LEVEL'] = '3' 

from tensorflow import keras
from keras.models import load_model

import keras.utils as image
from keras.applications.vgg19 import preprocess_input
import numpy as np
import sys

model=load_model("vgg-bee-dicease-modal-final.h5")

path="uploads"

imageName = sys.argv[1]

img=image.load_img(path+"/"+imageName,target_size=(224,224))


x=image.img_to_array(img)
x=np.expand_dims(x,axis=0)
images=np.vstack([x])
pred=model.predict(images,batch_size=1) 
if pred[0][0]>0.5:
    category="BeeViruses"
elif pred[0][1]>0.5:
    category="EuropeanFoulbrood"
elif pred[0][2]>0.5:
    category="NoDisease"
elif pred[0][3]>0.5:
    category="Nosema"
elif pred[0][4]>0.5:
    category="VarroaMites"

print(category)   