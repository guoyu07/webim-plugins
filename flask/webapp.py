#!/usr/bin/env python
# coding: utf-8

from flask import Flask

from flask_webim import webimview

app = Flask(__name__)

app.register_blueprint(webimview.view, url_prefix='/webim')

@app.route("/")
def index():
    return "home..."

if __name__ == "__main__":
    app.run(host="0.0.0.0")

