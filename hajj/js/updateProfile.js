var wq = document.getElementById("saveProfile");
wq.addEventListener("click", updateProfile);

function updateProfile() {
xhttp = new XMLHttpRequest();
var FName = document.getElementById("FName").value;
var LName = document.getElementById("Lname").value;
var BirthDate = document.getElementById("BirthDate").value;
var login_user = document.getElementById("login_user").value;
var password = document.getElementById("password").value;
var Mobile = document.getElementById("Mobile").value;
var OfficePhone = document.getElementById("OfficePhone").value;
var City = document.getElementById("City").value;
var Country = document.getElementById("Country").value;
var Email = document.getElementById("Email").value;
var PersonHomePage = document.getElementById("PersonHomePage").value;
// alert(FName);
// alert(LName);
// alert(BirthDate);
// alert(login_user);
// alert(password);
// alert(Mobile);
// alert(OfficePhone);
// alert(City);
// alert(Country);
// alert(Email);
// alert(PersonHomePage);

xhttp.open("POST", "../include/updateProfile.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("FName=" + FName + "&LName=" + LName + "&BirthDate=" + BirthDate + "&login_user=" + login_user
+ "&password=" + password+ "&Mobile=" + Mobile+ "&OfficePhone=" + OfficePhone + "&City=" + City
+ "&Country=" + Country+ "&Email=" + Email+ "&PersonHomePage=" + PersonHomePage);
}

function SendSearchRequest(){
var keyword = document.getElementById("login_user").value;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
if ((xmlhttp.readyState == 0) || (xmlhttp.readyState == 4)){
var xmlResponse = this.responseXML;
var  message = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;
document.getElementById("search_result").innerHTML = message;
}
}
//console.log(xmlhttp.readyState);
//console.log(xmlhttp.status);
xmlhttp.open("GET", "../include/searchUsers.php?keyword="+keyword, true);
xmlhttp.send();
}