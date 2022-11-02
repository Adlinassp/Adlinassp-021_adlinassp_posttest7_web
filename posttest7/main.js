var element = document.body;

function ubahwarna() {
    element.classList.toggle("terang");
    if(element.classList.contains('terang')){
        localStorage.setItem('tema','terang');
    }else{
        localStorage.setItem('tema','gelap');
    }

}

 var tema = localStorage.getItem("tema");
 if (tema == 'terang'){
    element.classList.add("terang");
 }

 var btn_obj = document.getElementById("btn");
 btn_obj.addEventListener('click', function(){alert('web sedang tahap perbaikan'), true});



 var buttonbook = document.getElementsByClassName("button2");
setInterval(function() {
    buttonbook[0].style.color = "antiquewhite";
    
    setTimeout(function() {
        buttonbook[0].style.color = "#333";
    }, 500);
}, 1000);
 

var contact = document.getElementsByClassName("btn1");
setInterval(function() {
    contact[0].style.color = "#D36B00";
    contact[1].style.color = "#D36B00";
    contact[2].style.color = "#D36B00";
    setTimeout(function() {
        contact[0].style.color = "#A97155";
        contact[1].style.color = "#A97155";
        contact[2].style.color = "#A97155";
    }, 500);
}, 1000);