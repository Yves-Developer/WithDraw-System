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

var index = -1;
var slide = document.getElementsByClassName('slide-n');
showSlide();
function showSlide() {
    index++;//0
    for (let i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
        
    }
    if (index >= slide.length) {
        index = 0;
    }
    slide[index].style.display = "block";

    window.setTimeout(showSlide,3000);
}
// Navigation bar
var logo = document.getElementById('logo');
var navbar = document.getElementById('navbar');
var nav = document.getElementById('nav');
function loadData() {
    logo.classList.add('active');
    navbar.classList.add('active');
    navbar.classList.add('fades');
    nav.classList.add('active');
   
}

