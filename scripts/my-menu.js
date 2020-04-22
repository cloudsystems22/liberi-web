
function toggleSidebar(){
    document.getElementById('menu-left').classList.toggle('active');
    document.getElementById('ul-menu').classList.toggle('active');
    let menuRight = document.getElementById('menu-right').classList.toggle('active');
    //console.log(menuRight);
    
    if(menuRight){
        document.getElementById('img-menu').src = 'images/fechar-white.png';
        //document.getElementById('ul-menu').style.display = 'inline-block';
        //document.getElementById('img-menu').setAttribute('src', 'images/fechar-white.png');
        //alert(menuRight);
    }
    else {
        document.getElementById('img-menu').setAttribute('src', 'images/menu-abrir-white.png');
        //document.getElementById('ul-menu').style.display = 'none';
    }
}