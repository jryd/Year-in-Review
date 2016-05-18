/**
  * File: custom.js
  * Description:
  * This file is to fix the active state of the sidebar links. The sidebar is rendered from a page that is displayed on several pages.
  * Because of this, you can't simply just add and remove "active" on each page as it is rendered in.
  * This script checks the current URL, and if it is equal to what we're looking for, we will add the active state.
*/

var getFirstPath  = document.location.href.split('/'); //split url up in to an array
var firstPath     = getFirstPath[getFirstPath.length - 1]; //pick last path in the url

var getSecondPath = document.location.href.split('/'); //split url up in to an array
var secondPath    = getSecondPath[getSecondPath.length - 2]; //pick second last path in the url

if(firstPath == ""){ //if path is blank (home), make it active
  var dash = document.getElementsByClassName('home')[0];
  dash.className      += " " + "active";
}
else if(firstPath == "character"){ //if path is character, make it active
  var char             = document.getElementsByClassName('char')[0];
  char.className      += " " + "active";
}
else if(secondPath == "application"){ //if second path is application, make it active
  var apps             = document.getElementsByClassName('apps')[0];
  apps.className      += " " + "active";
}
else if(secondPath == "character"){ //if second path is character, make administration active and make characters active too
  var char             = document.getElementsByClassName('admin')[0];
  var adminChar        = document.getElementsByClassName('adminChar')[0];
  char.className      += " " + "active";
  adminChar.className += " " + "active";
}
else if(secondPath == "user"){ //if second path is user, make administration active and make lookup active too
  var user             = document.getElementsByClassName('admin')[0];
  var lookup           = document.getElementsByClassName('lookup')[0];
  user.className      += " " + "active";
  lookup.className    += " " + "active";
}
else if(firstPath == "activitylog"){ //if path is activitylog, make it active
  var log              = document.getElementsByClassName('logs')[0];
  var userLogs         = document.getElementsByClassName('userLogs')[0];
  log.className       += " " + "active";
  userLogs.className  += " " + "active";
}