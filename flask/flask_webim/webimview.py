#!/usr/bin/env python 
# coding: utf-8

from flask import json

from flask import (Blueprint, request, url_for, redirect, render_template, flash)

view = Blueprint('webim', __name__)

@view.route('/online', methods=['POST'])
def online():
    return "online api"

@view.route('/offline', methods=['POST'])
def offline():
    return "offline api"

@view.route('/members', methods=['GET'])
def members():
    return 'members api'
