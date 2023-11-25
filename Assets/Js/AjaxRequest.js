/* 
DON'T TOUCH THIS LINE IF YOU CARE MY HARDWORKING
====================================================
Developer: Yves Mugisha
Date: 16/11/2023
Day: Thursday
Mater Dei
E-mail: info@integratedfolks.com
===================================================
*/


// REGISTRATION CODES FOR JAVASCRIPT * AJAX REQUEST
// __________________________________________________________

///variable declation
var formElement = document.getElementsByClassName('input0');
var addBtn = document.getElementById('addBtn');
var form = document.getElementsByClassName('data');
//Prevent Form Auto submit
form[0].onsubmit = (Event) =>{
    Event.preventDefault();
}
//Add Event Handler
addBtn.onclick = ()=>{
    var formData = new FormData(form[0]);
    var xhr = new XMLHttpRequest();
    xhr.open('POST','../Assets/Php/add_student.php',true);
    xhr.onload = ()=>{
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = xhr.responseText;
            if(data == "code0"){
                for (let i = 0; i < formElement.length; i++) {
                   var inData = formElement[i].getElementsByTagName('input');
                   inData[0].value = "";
                    
                }
            }
                else{
                    alert(data);
                }
            
        }
    }
    xhr.send(formData);
}

// REGISTRATION CODES FOR JAVASCRIPT * AJAX REQUEST
// __________________________________________________________


