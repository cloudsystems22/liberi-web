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
</head>
<body>
    <div id='div-logo'>
        <h1><span id='span-logo-left'>Liberi</span><span id='span-logo-right'>móvil</span></h1>
    </div>
    <nav class='flex' id='nav'>
        <div class='br-primary-transparent' id='menu-left'>
            <div class="div-play">
                <a href="#!" class="" onclick="institucional()"><img src="images/botao-play.png" alt="" class="img-play"></a>
            </div>
        </div>
        <div class='bg-secundary-transparent' id='menu-right'>
            <div class='flex'>
                <div class='item'>
                    <a href="#!" onclick="toggleSidebar()"><img src="images/menu-abrir-white.png" alt="menu" id='img-menu'> Menu</a>
                </div>
                <div class='item'>
                    <ul id='ul-menu'>
                        <li><a href="#!" onclick="click_nav('home')">Home</a></li>
                        <li><a href="#!" onclick="click_nav('sobre')">Sobre</a></li>
                        <li><a href="#!" onclick="click_nav('modelo-negocios')">Plano</a></li>
                        <li><a href="#!" onclick="click_nav('suporte')">Suporte</a></li>
                        <li><a href="#!" onclick="click_nav('cadastro')">Faça seu cadastro</a></li>
                        <li><a href="#!" onclick="click_nav('parceiros')">Parceiros</a></li>
                        <li><a href="#!" onclick="click_nav('contato')">Contato</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    
    <div id='home' class="">

    </div>
    <div id='sobre' class="">
        <div class="logo">
            <h1><span id='logo-left-gray'>Liberi</span><span id='logo-right-gray'>móvil</span></h1>
        </div>
        <div class='container-fluid'>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8 sobre-text">
                   
                    <div class='sobre-div-text'>
                        <h1 class='sobre-h1 font-color-secundary'>Definitivamente</h1>
                        <h2 class='sobre-h2'><span style='color:white'>um </span><span style='color:#018B94'>novo conceito</span></h2>
                        <h2 class='sobre-h2-55'><span style='color:white'>em telefonia </span><span style='color:#018B94'>mundial</span></h2>
                        <p class='sobre-p font-color-secundary'>A Liberi Móvil, nasce com o propósito de revolucionar o mercado da telefonia mundial</p>
                        <!-- <p class='sobre-p-white'>
                            Com o conceito onde grandes empresas com atuação online de serviços e/ou produtos, sejam as grandes financiadoras deste projeto.
                        </p>
                        <p class='sobre-p-white'>
                            A telefonia gratuita vai gerar um aumento substancial no volume de clientes de todas as empresas envolvidas nesta iniciativa. 
                            O compartilhamento destes clientes entre empresas parceiras fará com que uma grande vade de dados seja dividida, gerando benefícios exclusivos para todos.
                        </p>
                        <p class='sobre-p-white'>
                            O investimento por parte das empresas viria da verba de marketing disponível para ações de grande impacto que, 
                            como esta, atrairam novos números através de um servíço único e que acompanha o público onde for.
                        </p> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modelo-negocios">
        <div class='container-fluid'>
            <div class="logo">
                <h1><span id='logo-left'>Liberi</span><span id='logo-right'>móvil</span></h1>
            </div>
            <div class='row'>
                <div class='col-md-6 col-sm-12'>
                    <div class="modelo-negocios-div">
                        <h1 class="modelo-negocios-h1">Na Liberi você tem</h1>
                        <div class="row model-negocio-div-row">
                            <div class="col-md-5">
                                <h2 class="modelo-negocios-h2 font-color-secundary">3 Gb</h2>
                            </div>
                            <div class="col-md-2">
                                <img src="images/plus-imag.png" alt="plus" class="img-plus">
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
                <div class='col-md-6 col-sm-12'>
                    <img src="images/img-model-oferta.png" alt="" class="modelo-negocios-img">
                </div>
            </div>
        </div>
    </div>
    <div id='suporte'>
        <div class="suporte-logo">
            <h1><span id='logo-left'>Liberi</span><span id='logo-right'>móvil</span></h1>
        </div>
        <div>
            <img src="images/suporte-tecnico.png" alt="" class='img-suporte'>
            <h1 class='suporte-h1-2'>Suporte técnico</h1>
            <h1 class='suporte-h1'>+55(11)94764-4384</h1>
        </div>
    </div>
    <div id='cadastro'>
        <div class='container-fluid'>
            <div class="cadastro-logo">
                <h1><span id='logo-left'>Liberi</span><span id='logo-right'>móvil</span></h1>
            </div>
            <div class='row'>
                <div class='col-md-3 col-sm-12'>
                    <h1>Cadastro</h1>
                </div>
                <div class='col-md-9 col-sm-12'>
                    <div class='div-cadastro'>
                        <div class='div-form'>
                            <form action="cadastro.php" method='POST' enctype='multipart/form-data'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <label for="nome">Nome:</label>
                                            <input type="text" class='form-control' id='nome' name='name' placeholder='Nome...' required>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='form-group'>
                                            <label for="rg">RG:</label>
                                            <input type="text" class='form-control' id='rg' name='rg' placeholder='RG...' required>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='form-group'>
                                            <label for="cpf">CPF:</label>
                                            <input type="text" class='form-control' id='cpf' name='cpf' placeholder='CPF...' required>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='form-group'>
                                            <label for="genero">Genero</label>
                                            <select name="genero" id="" class='form-control'>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="cep">CEP:</label>
                                            <input type="text" class='form-control' id='cep' name='cep' placeholder='00.000-000' required>
                                        </div>

                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="endereco">Endereço:</label>
                                            <input type="text" class='form-control' id='endereco' name='endereco' placeholder='Endereço...' require>
                                        </div>

                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class='form-control' id='bairro' name='bairro' placeholder='Bairro...' required>
                                        </div>

                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="cidade">Cidade:</label>
                                            <input type="text" class='form-control' id='cidade' name='cidade' placeholder='Cidade...' required>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="estado">Estado:</label>
                                            <input type="text" class='form-control' id='estado' name='estado' placeholder='Estado...' required>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="nome">Telefone:</label>
                                            <input type="tel" class='form-control' id='telefone' name='telefone' placeholder='(99)9999-9999' required>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="nome">E-mail:</label>
                                            <input type="email" class='form-control' id='email' name='email' placeholder='email@dominio.com'>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <label for="arquivo">Arquivo '.jpg', '.png':</label>
                                            <input type="file" class='form-control' id='arquivo' name='arquivo' placeholder='.jpg, .png'>
                                        </div>
                                    </div>
                                    <div class='col-md-12'>
                                        <button type='submit' class='btn-enviar-cadastro bg-secundary'>Enviar</button>
                                    </div>
                                </div>

                                    
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='parceiros'>

        <div class="container-fluid">
            <div class="logo">
                <h1><span id='logo-left'>Liberi</span><span id='logo-right'>móvil</span></h1>
            </div>
            <div class="container-parceiros">
                <h1>Empresas parceiras</h1>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <img src="images/empresa-interesse-um.png" alt="Jornais" class="parceiros-img">
                        <p class="parceiros-p font-color-secundary">Jornais</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/empresa-interesse-dois.png" alt="Entregas" class="parceiros-img">
                        <p class="parceiros-p font-color-secundary">Apps de entrega</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/empresa-interesse-tres.png" alt="Transporte" class="parceiros-img">
                        <p class="parceiros-p font-color-secundary">Transporte</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/empresa-interesse-quatro.png" alt="Jornais" class="parceiros-img">
                        <p class="parceiros-p font-color-secundary">Bancos digitais</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/empresa-interesse-cinco.png" alt="Entregas" class="parceiros-img">
                        <p class="parceiros-p font-color-secundary">Lojas digitais</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/empresa-interesse-seis.png" alt="Transporte" class="parceiros-img">
                        <p class="parceiros-p font-color-secundary">Redes sociais</p>
                    </div>
                </div>
             

            </div>
        </div>

    </div>
    <div id='contato'>
        <div class='fundo-contato'>
            <div class="contato-logo">
                <h1><span id='logo-left-gray'>Liberi</span><span id='logo-right-gray'>móvil</span></h1>
            </div>
            <h1 class='font-color-secundary'>Contato</h1>
            <h2 class='font-color-secundary'>contato@liberimovil.com.br</h2>
        </div>
        <div id='email-form'>
            <form action="contato.php" method='POST'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <label for="">Nome</label>
                            <input type="text" class='form-control' name='name' placeholder='Nome...' required>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <label for="">Email</label>
                            <input type="email" class='form-control' name='email' placeholder='email@dominio.com' required>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <label for="">Assunto</label>
                            <input type="text" class='form-control' name='subject' placeholder='Gostaria de...' required>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <label for="">Mensagem</label>
                            <textarea name="mensagem" id="" required></textarea>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <button type='submit' class='btn-enviar-cadastro bg-secundary'>Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id='video-institucional'>
        <div>
            <a href="#!" onclick="institucional()"><img src="images/fechar-white.png" alt="" style='width:20px; margin-left:5px; margin-top:5px'></a>
        </div>
        <iframe src="videos/video-um.mp4?autoplay=false" frameborder="0"></iframe>

    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="scripts/my-menu.js"></script>
<script src='scripts/my-navigation.js'></script>

</body>
</html>