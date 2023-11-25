    // Navigation bar
    var logo = document.getElementById('logo');
    var navbar = document.getElementById('navbar');
    var nav = document.getElementById('nav');
    var modal = document.getElementById('modal');
    var modal1 = document.getElementById('modal1');
    function loadData() {
        logo.classList.add('active');
        navbar.classList.add('active');
        navbar.classList.add('fades');
        nav.classList.add('active');
    
    }
    //Data manipulation
    function Popup1() {
        modal1.classList.add('active');
        modal1.classList.add('movedown');
        if(modal1.classList.contains('moveup')){
            modal1.classList.remove('moveup');
        }
    }
    function Popup() {
        modal.classList.add('active');
        modal.classList.add('movedown');
        if(modal.classList.contains('moveup')){
            modal.classList.remove('moveup');
        }
    }
    function hide() {
        modal.classList.add('moveup');
        window.setTimeout(function(){
        modal.classList.remove('active');    
        },470);
        modal1.classList.add('moveup');
        window.setTimeout(function(){
        modal1.classList.remove('active');    
        },470);  
    }
    //Prevent Default
    var form00 = modal.getElementsByClassName('form')[0];
    form00.onsubmit = (Event)=>{
        Event.preventDefault();
    }
    //Push data
    function PushData(Action) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST','../Assets/Php/withdraw.php',true);
        xhr.onload = ()=>{
            if(xhr.status == 200 && xhr.readyState == 4){
                var data = xhr.responseText;
                alert(data);
                //Auto Leave balnk Space
                var inputsbx = form00.getElementsByClassName('inputbx');
                for (let i = 0; i < inputsbx.length; i++) {
                    var inText1 = inputsbx[i].getElementsByTagName('input')[0];
                    inText1.value = "";
                }
            }
        }
        var formData0 = new FormData(form00);
        xhr.send(formData0);
        }
        //Push data1
        var form1 = modal1.getElementsByClassName('form')[0];
        form1.onsubmit = (Event)=>{
        Event.preventDefault();
        }
        function PushData1(Action) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST','../Assets/Php/deposit.php',true);
        xhr.onload = ()=>{
            if(xhr.status == 200 && xhr.readyState == 4){
                var data = xhr.responseText;
                alert(data);
                //Leave Blank Space
                var inputsbx = form1.getElementsByClassName('inputbx');
                for (let i = 0; i < inputsbx.length; i++) {
                    var inText = inputsbx[i].getElementsByTagName('input')[0];
                    inText.value = "";
                }
            }
        }
        var formData1 = new FormData(form1);
        xhr.send(formData1);
        }