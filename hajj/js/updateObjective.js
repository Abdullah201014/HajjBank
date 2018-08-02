

              //this function is meant for the ubdate button (updating an exitsting objective)
              function changeObj(str)
              {
                  //getting the text in side the objective
                  var objectiveToBeUpdated = document.getElementById("obj"+str);
                  var objectivetext = objectiveToBeUpdated.innerHTML;
                  // deleting the current test
                   objectiveToBeUpdated.innerHTML =" ";
                  // creating a form
                  var formElement =document.createElement("form");
                  formElement.setAttribute("action","../include/saveUpdate.php");
                  formElement.setAttribute("method","post");
                  //putting the text into textareatext node
                  var textareatext = document.createTextNode(objectivetext);
                  //creating a textarea
                  var textElement =document.createElement("textarea");
                  textElement.setAttribute("rows","2%");
                  textElement.setAttribute("cols","100%");
                  textElement.setAttribute("name","textarea");
                  textElement.setAttribute("id","textidd");
                  textElement.appendChild(textareatext);
                  formElement.appendChild(textElement);

                  var saveButton =document.createElement("input");
                  saveButton.setAttribute("type","submit");
                  saveButton.setAttribute("name","saveSubmit");
                  saveButton.setAttribute("value","save");
                  saveButton.setAttribute("id","newObjToAdd");
                  var  q = "updateObj("+str+")";
                  saveButton.setAttribute("onclick",q);
                  formElement.appendChild(saveButton);
                  // creating a div
                  var divElement =document.createElement("div");
                  divElement.setAttribute("id","newDivId2");
                  divElement.appendChild(formElement);
                  objectiveToBeUpdated.appendChild(divElement);

                  var objectiveButton = document.getElementById("button"+str);
                  //removing the update button
                  objectiveButton.childNodes[0].remove();
                  objectiveButton.childNodes[0].remove();

              }




                  function updateObj (str)
                  {

                    var textareaWords = document.getElementById('textidd');
                    var words = textareaWords.value;
                    // console.log(words);
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("post", '../include/saveUpdate.php', true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.setRequestHeader('X-Requsted-With','XMLHttpRequest');
                    xhttp.onreadystatechange = function()
                    {
                        if (this.readyState == 4 && this.status == 200)
                        {
                          console.log("good!");
                        }
                    };
                    xhttp.send("textarea="+words+"&&id="+str);
                    var theNewTextObj =document.createElement("p").innerHTML= words;
                    textareaWords.parentNode.parentNode.appendChild(theNewTextObj);

                  }



              //this funtion for deleting an objective
              function deleteObj(str)
              {
                  var xhttp = new XMLHttpRequest();
                  xhttp.open("POST", '../include/deleteObj.php?id='+str, true);
                  xhttp.setRequestHeader('X-Requsted-With','XMLHttpRequest');
                  xhttp.onreadystatechange = function()
                  {
                      if (this.readyState == 4 && this.status == 200)
                      {
                        console.log("good!");
                      }
                  };
                  xhttp.send();
                  var n = 'obj'+str;
                  var b = 'button'+str;
                  var rowToDelete = document.getElementById(n);
                  var rowToDelete2 = document.getElementById(b);
                  rowToDelete.parentNode.removeChild(rowToDelete);
                  rowToDelete2.parentNode.removeChild(rowToDelete2);
              }

              //this for add new ojective button
              var x = true;
              function addingNewObjective (str)
              {
                if (x== true)
                {
                  var table = document.getElementById("objectiveTable");
                  var row = table.insertRow(str);
                  var text = "Add your objective here";
                  var textareatext = document.createTextNode(text);
                  var divElement =document.createElement("div");
                  divElement.setAttribute("id","newDivId");
                  var formElement =document.createElement("form");
                  formElement.setAttribute("action","../include/addObjective.php");
                  formElement.setAttribute("method","post");
                  var textElement =document.createElement("textarea");
                  textElement.setAttribute("rows","2%");
                  textElement.setAttribute("cols","100%");
                  textElement.setAttribute("name","textarea");
                  textElement.setAttribute("id","newtextarea");
                  textElement.appendChild(textareatext);
                  formElement.appendChild(textElement);
                  var saveButton =document.createElement("input");
                  saveButton.setAttribute("type","submit");
                  saveButton.setAttribute("name","saveSubmit");
                  saveButton.setAttribute("value","save");
                  saveButton.setAttribute("id","newObjToAdd");
                  divElement.appendChild(formElement)
                  var cell1 = row.insertCell(0);
                  cell1.appendChild(divElement);

                  formElement.appendChild(saveButton);
                  var cell2 = row.insertCell(1);
                  x= false;
                 }
               }

               //this for saving newly created objective
               var newObjective = document.getElementById('newObjToAdd');

               function saveNewObj()
               {
                 var theTextelement = document.getElementById('newTextArea');
                 var theText = document.getElementById('newTextArea').value;

                 var xhttp = new XMLHttpRequest();
                 xhttp.open("post", '../include/addObjective.php', true);
                 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                 xhttp.setRequestHeader('X-Requsted-With','XMLHttpRequest');
                 xhttp.onreadystatechange = function()
                 {
                     if (this.readyState == 4 && this.status == 200)
                     {
                       console.log("good!");
                     }
                 };
                 var theNewTextObj =document.createElement("p");
                 var textareatext = document.createTextNode(theText);
                 theNewTextObj.appendChild(textareatext);
                 var divid =document.getElementById(newDivId);
                 theTextelement.parentNode.removeChild(theTextelement);

                 xhttp.send("textarea="+theText);
               }
               newObjective.addEventListener('click',saveNewObj);
