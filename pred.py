import numpy as np
from flask import Flask, jsonify, request
import pandas as pd

import warnings

from xgboost import XGBClassifier
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import MinMaxScaler
warnings.filterwarnings('ignore')
pd.set_option('display.max_columns', None)
pd.set_option('display.max_rows', None)

app = Flask(__name__)


@app.route('/hello', methods=['GET'])
def prediction():
    if (request.method == 'GET'):
        df = pd.read_csv('parkinsons2.csv')
        X = df.drop(['Participant code', 'Gender', 'Age'], 1)
        X = X.drop(['Status'], 1)
        y = df['Status']

        X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)

        sc = MinMaxScaler(feature_range=(0, 1))
        X_train = sc.fit_transform(X_train)

        family = request.args.get('family')
        sym1 = request.args.get('sym1')
        sym2 = request.args.get('sym2')
        sym3 = request.args.get('sym3')
        sym4 = request.args.get('sym4')
        sym5 = request.args.get('sym5')
        sym6 = request.args.get('sym6')
        sym7 = request.args.get('sym7')
        sym8 = request.args.get('sym8')
        sym9 = request.args.get('sym9')
        sym10 = request.args.get('sym10')
        sym11 = request.args.get('sym11')
        sym12 = request.args.get('sym12')
        sym13 = request.args.get('sym13')
        sym14 = request.args.get('sym14')
        sym15 = request.args.get('sym15')
        sym16 = request.args.get('sym16')
        sym17 = request.args.get('sym17')
        sym18 = request.args.get('sym18')
        sym19 = request.args.get('sym19')
        sym20 = request.args.get('sym20')
        sym21 = request.args.get('sym21')
        sym22 = request.args.get('sym22')
        sym23 = request.args.get('sym23')
        sym24 = request.args.get('sym24')
        sym25 = request.args.get('sym25')
        sym26 = request.args.get('sym26')
        sym27 = request.args.get('sym27')
        X_test = np.array([family,sym1, sym2, sym3, sym4, sym5, sym6, sym7, sym8 , sym9 , sym10 , sym11 ,sym12,sym13 ,sym14 ,sym15, sym16,
                           sym17, sym18 ,sym19 ,sym20,sym21, sym22, sym23, sym24, sym25, sym26, sym27],dtype=object)
        #X_test=np.reshape(X_test,(-1,2))
        #X_test = sc.fit_transform(X_test)

        print(X_train)
        print(X_test)
        model = XGBClassifier().fit(X_train, y_train)
        #predictions = model.predict(X_test)
        data = {"data": 1}
        return jsonify(data)


if __name__ == '__main__':
    app.run(debug=True)