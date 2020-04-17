<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberi móbile</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/pallet.css">
    <link rel="stylesheet" type="text/css" href="css/animations.css">
	<script src="scripts/modernizr.custom.js"></script>
</head>
<body>
    <div id='div-logo'>
        <h1><span id='span-logo-left'>Liberi</span><span id='span-logo-right'>móvil</span></h1>
    </div>
    <nav class='flex' id='nav'>
        <div class='br-primary-transparent' id='menu-left'></div>
        <div class='bg-secundary-transparent' id='menu-right'>
            <div class='flex'>
                <div class='item'>
                    <a href="#!" onclick="toggleSidebar()"><img src="images/menu-abrir-white.png" alt="menu" id='img-menu'> Menu</a>
                </div>
                <div class='item'>
                    <ul id='ul-menu'>
                        <li><a href="#!" onclick="click_nav('home')">Home</a></li>
                        <li><a href="#!" onclick="click_nav('sobre')">Sobre</a></li>
                        <li><a href="#!" onclick="click_nav('modelo-negocios')">Contato</a></li>
                        <li><a href="#!">Suporte</a></li>
                        <li><a href="#!">Faça seu cadastro</a></li>
                        <li><a href="#!" onclick="click_nav('parceiros')">Parceiros</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    
    <div id='home' class="">

    </div>
    <div id='sobre' class="">
        <div class='container-fluid'>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 sobre-text">
                   
                    <div class='sobre-div-text'>
                        <h1 class='sobre-h1 font-color-secundary'>Definitivamente</h1>
                        <h2 class='sobre-h2'><span style='color:white'>um </span><span style='color:#018B94'>novo conceito</span></h2>
                        <h2 class='sobre-h2-55'><span style='color:white'>em telefonia </span><span style='color:#018B94'>mundial</span></h2>
                        <p class='sobre-p font-color-secundary'>A Liberi Móvil, nasce com o propósito de revolucionar o mercado da telefonia mundial</p>
                        <p class='sobre-p-white'>
                            Com o conceito onde grandes empresas com atuação online de serviços e/ou produtos, sejam as grandes financiadoras deste projeto.
                        </p>
                        <p class='sobre-p-white'>
                            A telefonia gratuita vai gerar um aumento substancial no volume de clientes de todas as empresas envolvidas nesta iniciativa. 
                            O compartilhamento destes clientes entre empresas parceiras fará com que uma grande vade de dados seja dividida, gerando benefícios exclusivos para todos.
                        </p>
                        <p class='sobre-p-white'>
                            O investimento por paste das empresas vitria da verba de marketinf disponível para ações de grande impacto que, 
                            como está, atrairam novos números através de um servíço único e que acompanha o público onde for.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modelo-negocios">
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-6'>
                    <div class="modelo-negocios-div">
                        <h1 class="modelo-negocios-h1">Modelo de Oferta ao Cliente</h1>
                        <br>
                        <div class="row model-negocio-div-row">
                            <div class="col-md-5">
                                <h2 class="modelo-negocios-h2 font-color-secundary">3 Gb</h2>
                            </div>
                            <div class="col-md-2">
                                <img src="images/plus-imag.png" alt="plus">
                            </div>
                            <div class="col-md-5">
                                <h2 class="modelo-negocios-h2-2 font-color-secundary">LIGAÇÕES</h2>
                                <h3 class="modelo-negocios-h2-2 font-color-secundary">ILIMITADAS</h3>
                            </div>
                    </div>
                       
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <h2 class="modelo-negocios-h2-2"><img src="images/sms-um.png" alt="sms ilimitado"> SMS Ilimitados</h2>
                        <br>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <h2 class="modelo-negocios-h2-3">Seus melhores apps sem desconto na franquia</h2>
                        <p style="justify-content: center;">
                            Para manter a gratuidade mês a mês, o usuário deverá utilizar os apps parceiros durante o mês para que os mesmos se renovem.
                        </p>
                    </div>
                </div>
                <div class='col-md-6'>
                    <img src="images/img-model-oferta.png" alt="" class="modelo-negocios-img">
                </div>
            </div>
        </div>
    </div>



    <!-- <section id="home">

    </section>
    
    <section id="modelo-negocios">
        
    </section> -->
    <!-- <section id="parceiros">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 div-imag">
                    <img src="images/empresa-interesse-um.png" alt='' />
                </div>
                <div class="col-md-4 div-imag">
                    <img src="images/empresa-interesse-dois.png" alt='' />
                </div>
                <div class="col-md-4 div-imag">
                    <img src="images/empresa-interesse-tres.png" alt='' />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 div-imag">
                    <img src="images/empresa-interesse-quatro.png" alt='' />
                </div>
                <div class="col-md-4 div-imag">
                    <img src="images/empresa-interesse-cinco.png" alt='' />
                </div>
                <div class="col-md-4 div-imag">
                    <img src="images/empresa-interesse-seis.png" alt='' />
                </div>
            </div>
        </div>

    </section> -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="scripts/my-menu.js"></script>
<script src='scripts/navegacao.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="scripts/jquery.dlmenu.js"></script>
<script src="scripts/pagetransitions.js"></script>
</body>
</html>