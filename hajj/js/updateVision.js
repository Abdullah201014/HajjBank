var x = document.getElementById("visionId");
x.addEventListener("click", visionFuncion);

function visionFuncion(){
var a = document.getElementById("visionId").innerHTML;
var newElement =document.createElement("form");
document.getElementById('visionDiv').appendChild(newElement);
var textareatext = document.createTextNode(a);
var textElement =document.createElement("textarea");
textElement.appendChild(textareatext);
newElement.appendChild(textElement);
textElement.setAttribute("name","message");
textElement.setAttribute("rows","20");
textElement.setAttribute("cols","45");
textElement.setAttribute("id","newVision");
var breakElement =document.createElement("br");
newElement.appendChild(breakElement);
var inputElement =document.createElement("input");
inputElement.setAttribute("type","submit");
inputElement.setAttribute("class","btn btn-defualt");
inputElement.setAttribute("onclick","visionFuncion2()");
inputElement.setAttribute("style","background-color:green; color:white;");


newElement.appendChild(inputElement);
var b = document.getElementById("visionId");
b.remove();
}


function visionFuncion2() {
xhttp = new XMLHttpRequest();
var newVision = document.getElementById("newVision").value;
//alert(newVision);
xhttp.open("POST", "../include/updateVision.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("newVision=" + newVision);
}
