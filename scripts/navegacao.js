let pageActive = 'home';
$(document).ready(function (){
    //document.getElementById('home').style.display = true;
    //document.getElementById('sobre').style.display = false;
    document.getElementById('home').classList.toggle('active');
    pageActive = document.getElementById('home').id;
});



function click_nav(e) {

    if(e == 'home'){
        anima_menu(e);
    }
    //desativa o active da pagina atual;
    document.getElementById(pageActive).classList.toggle('active');
    //e pega o valor da pagina clicada, e ativa a mesma;
    document.getElementById(e).classList.toggle('active');
    //se o menu estiver na posição da home, ativa o efeito para subir;
    if(pageActive == 'home'){
        anima_menu(e);
    } 
    //captura o valor da pagina ativa;
    pageActive = e;
    //console.log(pageActive)
}


function anima_menu(e){
    //alert(e);
    document.getElementById('nav').classList.toggle('active');
    document.getElementById('div-logo').classList.toggle('active');
    document.getElementById('span-logo-left').classList.toggle('active');
    document.getElementById('span-logo-right').classList.toggle('active');
    
}
