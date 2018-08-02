var z = document.getElementById("missionId");
z.addEventListener("click", missionFuncion);

function missionFuncion(){
var a = document.getElementById("missionId").innerHTML;
var newElement =document.createElement("form");
document.getElementById('missionDiv').appendChild(newElement);
var textareatext = document.createTextNode(a);
var textElement =document.createElement("textarea");
textElement.appendChild(textareatext);
newElement.appendChild(textElement);
textElement.setAttribute("name","message");
textElement.setAttribute("rows","20");
textElement.setAttribute("cols","45");
textElement.setAttribute("id","newMission");
var breakElement =document.createElement("br");
newElement.appendChild(breakElement);
var inputElement =document.createElement("input");
inputElement.setAttribute("type","submit");
inputElement.setAttribute("class","btn btn-defualt");
inputElement.setAttribute("onclick","missionFuncion2()");
inputElement.setAttribute("style","background-color:green; color:white;");
newElement.appendChild(inputElement);
var b = document.getElementById("missionId");
b.remove();
}

function missionFuncion2() {
xhttp = new XMLHttpRequest();
var newMission = document.getElementById("newMission").value;
xhttp.open("POST", "../include/updateMission.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("newMission=" + newMission);
}
