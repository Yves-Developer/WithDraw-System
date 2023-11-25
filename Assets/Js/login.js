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
    
    var LogBtn = document.getElementsByClassName('btn');
    var form0 = document.querySelector('.col1');
    form0.onsubmit = (Event)=>{
        Event.preventDefault();
    }
    
    
    LogBtn[0].onclick =()=>{
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../Assets/Php/Authorise.php', true);
        xhr.onload = ()=>{
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = xhr.responseText;
                if (data == "code0") {
                    location.href = "../Admin";
                }
                else{
                    alert(data);
                }
            }
        }
        var formData0 = new FormData(form0);
        xhr.send(formData0);
    
    }