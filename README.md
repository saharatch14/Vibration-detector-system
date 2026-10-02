# Vibration-detector-system
I worked on this project during university with a partner and didn't update it after finishing the section

## Overview
When the SW-420 sensor detects vibration, it transmits the vibration data to the Arduino Wemos D1 (acting as a Wi-Fi client). Arduino Wemos D1 then sends this data via Wi-Fi to trigger a LINE Notify alert and transmits it to a web server for storage in a database; the stored data can subsequently be displayed via a web browser on a laptop.

## How it works


Visit the idea build kernel and credit: https://github.com/ivandavidov/minimal
![vibration detector system structure](https://github.com/saharatch14/Vibration-detector-system/blob/1eda9d54b4b46a8e511df3cfcf909c8e2b37df68/Structure-concept.jpg)
