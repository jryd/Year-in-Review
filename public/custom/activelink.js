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
else if(firstPath == "mystats"){ //if path is my stats, make it active
  var char             = document.getElementsByClassName('mystats')[0];
  char.className      += " " + "active";
}
else if(firstPath == "teamstats"){ //if path is team stats, make it active
  var char             = document.getElementsByClassName('teamstats')[0];
  char.className      += " " + "active";
}
else if(firstPath == "activitylog"){ //if path is activity log, make it active
  var char             = document.getElementsByClassName('activitylog')[0];
  char.className      += " " + "active";
}
else if(secondPath == "activitylog"){ //if path is activity log, make it active
  var char             = document.getElementsByClassName('activitylog')[0];
  char.className      += " " + "active";
}