# Biographies-du-Fontenay

## Project Status
Alpha Version - Many/All parts are non-functional.

## Description
"Biographies du Fontenay" is a project developed by "Atelier du Fontenay" (http://www.atelierdufontenay.com/) in order to provide a IT tool to carry out Bibliographic Therapy. This project maps life events of a person into a spiral life-line. The goal of this non-linear representation of time is to help the patient think about the links between different events in his life, and have a better understanding of the big picture. The technique itself is over 100 years old, we are only adapting it for the 21st century.

If you are interested in Bibliographic Therapy for yourself or others you are strongly encouraged to contact your local practitioner. If you are interested in training, please see http://www.atelierdufontenay.com/.

This project has been open-sourced in the hope that it will be useful in the public domain, feel free to copy/modify/use it for your own purposes in accordance with the license. All contributions are welcome.


## Tech
XAMPP + CakePHP + SVG + JS


## Installation

On a Windows Machine:

1. Clone this git repository onto a USB key.
2. Run `\xampp\setup_xampp.bat`.
2. Run `\xampp\xampp_start.exe`.
3. Open a browser and access `http://localhost/fontenay/pages/landing`.
4. Create a new biography or access one of the examples.


## Working on the project
* Project root is here `\xampp\htdocs\fontenay\`
* Business Logic `\xampp\htdocs\fontenay\src\Controller\`
* SVG `\xampp\htdocs\fontenay\webroot\img\`
* JS `\xampp\htdocs\fontenay\webroot\js\`

You are encouraged to develop using your own data. If you want to protect your privacy never commit anything under `\xampp\mysql\data\` .


## Committing to the project

1. Commit atomically, commit often.
2. Use your personal email address when committing.
3. Send a pull request.