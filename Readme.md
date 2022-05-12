# GOOGLE FORM WITH MAPS COORDINATE
## Source
This apps is built based on below youtube tutorial. Credit to owner.
* [Part 1](https://www.youtube.com/watch?v=3xu6VM8GyYg)
* [Part 2](https://www.youtube.com/watch?v=1G9FJeTYk1A)

## Steps:
* Create your google form, share and copy the embedded URL
* Change the parameter based on list below
* Host the folder "Heroku" to your preferred cloud hosting that supports PHP, such as Heroku, Netlify, etc.
* Host the folder "GoogleAppScript" to [GoogleAppsScript](https://script.google.com/)

## Needs to be changed
### File credentials.json:
* title: Application Name (ex. Absensi Social Media Marketing Division)
* gform_src: link embedded google form
* gscript_src: link google apps script

### File GoogleAppsScript/Index.html
* Line 41, href: link to hosting URL (ex. https://absensismm.herokuapp.com)