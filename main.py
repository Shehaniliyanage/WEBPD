# importing the necessary dependencies

from flask import Flask, render_template, request, jsonify
from flask_cors import CORS, cross_origin
import pickle

app = Flask(__name__) # initializing a flask app


@app.route('/', methods=['GET'])  # route to display the home page
@cross_origin()
def homepage():
    return render_template("prediction.php")


@app.route('/predict', methods=['POST', 'GET'])  # route to show the predictions in a web UI
@cross_origin()
def index():
    if request.method == 'POST':
        try:
            #  reading the inputs given by the user
            positive_story_of_parkinson_disease_in_family = bool(request.form['Positive_story_of_Parkinson_disease_in_family'])
            speech_changes = bool(request.form['Speech_Changes'])
            facial_expressions_changes = bool(request.form['Facial_Expressions_changes'])
            tremor_at_rest_head = bool(request.form['Tremor_at_Rest_head'])
            tremor_at_rest_rue = bool(request.form['Tremor_at_Rest_RUE'])
            tremor_at_rest_lue = bool(request.form['Tremor_at_Rest_LUE'])
            tremor_at_rest_rle = bool(request.form['Tremor_at_ Rest _RLE'])
            tremor_at_rest_lle = bool(request.form['Tremor_at_ Rest _LLE'])
            action_or_postural_tremor_rue = bool(request.form['Action_or_Postural_Tremor_RUE'])
            action_or_postural_tremor_lue = bool(request.form['Action_or_Postural_Tremor _LUE'])
            rigidity_neck = bool(request.form['Rigidity_neck'])
            rigidity_rue = bool(request.form['Rigidity_RUE'])
            rigidity_lue = bool(request.form['Rigidity_LUE'])
            rigidity_rle = bool(request.form['Rigidity_RLE'])
            rigidity_lle = bool(request.form['Rigidity_LLE'])
            finger_taps_rue = bool(request.form['Finger_Taps_RUE'])
            finger_taps_lue = bool(request.form['Finger_Taps_LUE'])
            hand_movements_rue = bool(request.form['Hand_Movements_RUE'])
            hand_movements_lue = bool(request.form['Hand_Movements_LUE'])
            rapid_alternating_movements_rue = bool(request.form['Rapid_Alternating_Movements_RUE'])
            rapid_alternating_movements_lue = bool(request.form['Rapid_Alternating_Movements_LUE'])
            leg_agility_rle = bool(request.form['Leg_Agility_RLE'])
            leg_agility_lle = bool(request.form['Leg_Agility_LLE'])
            arising_from_chair = bool(request.form['Arising_from_Chair'])
            posture = bool(request.form['Posture'])
            gait = bool(request.form['Gait'])
            postural_stability = bool(request.form['Postural_Stability'])
            body_bradykinesia_and_hypokinesia  = bool(request.form['Body_Bradykinesia_and_Hypokinesia'])

            filename = 'modelForPrediction.sav'
            loaded_model = pickle.load(open(filename, 'rb'))  # loading the model file from the storage
            # predictions using the loaded model file
            scaler = pickle.load(open('standardScalar.sav', 'rb'))
            prediction = loaded_model.predict(scaler.transform([[positive_story_of_parkinson_disease_in_family, speech_changes, facial_expressions_changes, tremor_at_rest_head, tremor_at_rest_rue, tremor_at_rest_lue, tremor_at_rest_rle, tremor_at_rest_lle, action_or_postural_tremor_rue, action_or_postural_tremor_lue, rigidity_neck, rigidity_rue,rigidity_lue, rigidity_rle, rigidity_lle, finger_taps_rue, finger_taps_lue, hand_movements_rue, hand_movements_lue, rapid_alternating_movements_rue, rapid_alternating_movements_lue, leg_agility_rle, leg_agility_lle, arising_from_chair, posture, gait, postural_stability, body_bradykinesia_and_hypokinesia]]))
            print('prediction is', prediction)
            if prediction == 1:
                pred = "You have Parkinson's Disease. Please consult a specialist."
            else:
                pred = "You are Healthy Person."
            # showing the prediction results in a UI
            return render_template('results.php', prediction=pred)
        except Exception as e:
            print('The Exception message is: ', e)
            return 'something is wrong'
    # return render_template('results.php')
    else:
        return render_template('prediction.php')


if __name__ == "__main__":
    # app.run(host='127.0.0.1', port=8001, debug=True)
    app.run(debug=True)