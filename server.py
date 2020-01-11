from flask import Flask
from flask_cors import CORS, cross_origin
app = Flask(__name__)
cors = CORS(app)
app.config['CORS_HEADERS'] = 'Content-Type'


@app.route('/config')
def get_config():
    with open("config.txt") as fff:
        return str(fff.read())


@app.route('/data')
def get_data():
    with open("data.txt") as fff:
        return str(fff.read())


if __name__ == '__main__':
    app.run('0.0.0.0', debug=True)
