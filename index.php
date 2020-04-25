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
                <a href="#!" class="" onclick="institucional()"><img src="images/botao-play.png" alt="" class="img-play"> Video</a>
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
        <div class='div-text-home'>
            <h1 class='h1-home'>Primeira operadora móvel gratuita do mundo.</h1>
            <a class='sobre-a font-color-secundary' href="#!" onclick="click_nav('cadastro')">Cadastre-se aqui</a>
        </div>
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
                        <p class='sobre-p-white'>
                            <span class='font-color-secundary' style='font-weight:bold'>Condições para disponibilização do SIM Card</span><br>
                            <ul>
                                <li style='color:white'>Aprovação do cadastro pela equipe da Liberi;</li>
                                <li style='color:white'>Utilizar os apps das empresas parceiras;</li>
                            </ul>
                        </p>
                       
                        <p class='sobre-p-white'>
                            <span class='font-color-secundary' style='font-weight:bold'>Disponibilidade do SIM Card</span><br>
                            O SIM Card será disponibilizado de acordo com o volume de empresas parceiras da Liberi Movil e a medida em que novas empresas entrarem no projeto.

                        </p>

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
                                    <div class='col-md-4'>
                                        <div class='form-group'>
                                            <label for="estado">Estado:</label>
                                            <input type="text" class='form-control' id='estado' name='estado' placeholder='Estado...' required>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='form-group'>
                                            <label for="nome">Telefone:</label>
                                            <input type="tel" class='form-control' id='telefone' name='telefone' placeholder='(99)9999-9999' required>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='form-group'>
                                            <label for="operadora">Operadora:</label>
                                            <input type="text" class='form-control' id='operadora' name='operadora' placeholder='Operadora...' required>
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
                                            <label for="arquivo">Insira aqui a imagem do seu RG ou CNH '.jpg', '.png':</label>
                                            <input type="file" class='form-control' id='arquivo' name='arquivo' placeholder='.jpg, .png'>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <button type='submit' class='btn-enviar-cadastro bg-secundary' id='env-cadastro'>Enviar</button>                                        
                                        </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <input type="checkbox" name="condcontrat" id="condcontat"><label for="condcontrat">Li e concordo com os <a href='#!' onclick="termosUso()">termos de uso!</a></label><br>
                                                <input type="checkbox" name="recebpromo" id="recebpromo"><span class='promo-label'>Aceito receber mensagens, publicidade e promoções da Liberi Móvil e seus parcerios comerciais</span>
                                            </div>
                                        </div>
                                    <div class='col-md-12'>
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

    <div id='termos-uso'>
        <div class='corpo-termos-uso'>
            <h1>Termos de Uso <a href="#!" onclick="termosUso()"><img src="images/fechar-secundary.png" alt="Fechar" class='termos-fechar'></a></h1>
            <h2>CONTRATO DE ADESÃO A SERVIÇOS DE VALOR ADICIONADO (SVA)</h2>
            <p>De um lado, YES CONTROL TECNOLOGIA DA INFORMACAO LTDA, pessoa jurídica de direito privado doravante denominada CONTRATADA, inscrita no CNPJ/MF sob o no 33.193.820/0001-04, 
                e com NIRE no 35235487375, com sede na Cidade de São Paulo - SP, na Rua Barão do Serro Largo, no 592 CEP 03335-000, Bairro Vila Regente Feijó, neste ato representada por seu representante legal infra-assinado, 
                nos termos do seu contrato social, e do outro lado, as pessoas físicas e jurídicas de direito público ou privado que venham a se submeter a este instrumento mediante uma das 
                formas alternativas de adesão descritas no presente Contrato, doravante denominadas simplesmente CONTRATANTE ou CLIENTE, nomeadas e qualificadas através de 
                TERMO DE CONTRATAÇÃO ou de outra forma alternativa de adesão ao presente instrumento; tem entre si justo e contratado o presente instrumento particular, 
                acordando quanto às cláusulas e condições adiante estabelecidas, obrigando-se por si, seus herdeiros e/ou sucessores, o seguinte:
            </p>
            <h3>CLÁUSULA PRIMEIRA – DAS CONSIDERAÇÕES INICIAIS E DEFINIÇÕES</h3>
            <p>
                1.1 - Para os fins deste Contrato, a expressão “TERMO DE CONTRATAÇÃO” designa o instrumento (impresso ou eletrônico) de adesão (presencial ou online) a este contrato que 
                determina o início de sua vigência, que o completa e o aperfeiçoa, sendo parte indissociável e formando um só instrumento para todos os fins de direito, 
                sem prejuízo de outras formas de adesão previstas em Lei e no presente Contrato.
            </p>
            <p>
                1.2. - Para os fins deste Contrato, compreendem-se por prestação de Serviços de Valor Adicionado (SVA) atividades que acrescentam, a um serviço de 
                telecomunicações que lhe dá suporte e com o qual não se 
                confunde novas utilidades relacionadas ao acesso, armazenamento, apresentação, movimentação ou recuperação de informações.
            </p>
            <p>
                1.3 - A prestação de Serviços de Valor Adicionado (SVA) encontra-se sob a égide da Lei n.o 9.472/97; do Regulamento dos Serviços de Telecomunicações, aprovado pela 
                Resolução n.o 73, de 25 de Novembro de 1998; do Regulamento anexo à Resolução n.o 272, de nove de agosto de 2001, e demais normas aplicáveis.
            </p>
            <p>
                1.4 - Para os fins deste Contrato, compreende-se por “Prestador de Serviço de Comunicação Multimídia” empresa também contratante e usuária dos Serviços de 
                Valor Adicionado prestados pela CONTRATADA, 
                a ser indicada no TERMO DE CONTRATAÇÃO, que provê a interligação até o CLIENTE através da prestação de serviços de redes de telecomunicações.
            </p>
            <h3>CLÁUSULA SEGUNDA – DAS FORMAS DE ADESÃO</h3>
            <p>2.1 - A adesão pelo CLIENTE ao presente Contrato efetiva-se alternativamente por meio de quaisquer dos seguintes eventos, o que ocorrer primeiro:</p>
            <p>2.1.1 - Assinatura de TERMO DE CONTRATAÇÃO impresso;</p>
            <p>2.1.2 – Preenchimento e aceite “online” de TERMO DE CONTRATAÇÃO eletrônico;</p>
            <p>
                2.1.3 - Pagamento parcial ou total via boleto bancário, depósito em Conta Corrente ou outro meio idôneo de pagamento, 
                de qualquer valor relativo aos serviços de valor adicionado.
            </p>
            <p>
                2.1.4 - Percepção, de qualquer forma, dos serviços objeto do presente Contrato. 2.2 - Com relação à CONTRATADA, suas obrigações e responsabilidades iniciam efetivamente a
                partir da ciência comprovada de que o CLIENTE aderiu ao presente Contrato mediante um dos eventos supracitados, salvo no tocante ás formas de adesão previstas nos itens 
                2.1.3 e 2.1.4 acima, em que poderá a CONTRATADA, antes de iniciar o cumprimento de suas obrigações, reivindicar a assinatura/aceite do TERMO DE CONTRATAÇAO impresso ou eletrônico.
            </p>
            <p>
                2.3 - Os Serviços de Valor Adicionado (SVA) serão considerados habilitados após a instalação do simcard , no plano escolhido, efetuado pela CONTRATANTE em seu equipamento móvel.
            </p>
            <h3>CLÁUSULA TERCEIRA - DO OBJETO</h3>
            <p>
                3.1 - Constitui-se objeto do presente instrumento a prestação, pela CONTRATADA em favor do CLIENTE, de Serviços de Valor Adicionado (SVA) de acordo com os termos e condições previstas no presente 
                Contrato e no TERMO DE CONTRATAÇÃO, parte integrante e essencial à celebração do presente instrumento.
            </p>
            <p>
                3.2. - A prestação de Serviços de Valor Adicionado previsto no item 3.1 da presente cláusula, é prestada em uma modalidade, adequada conforme aceite do Termo de Contratação:
            </p>
            <h3>CLÁUSULA QUARTA – DOS DIREITOS E DEVERES DA CONTRATADA</h3>
            <p>Além das demais obrigações previstas neste Contrato e na regulamentação vigente, constituem-se direitos e deveres da CONTRATADA:</p>
            <p>4.1 - Manter a qualidade e a regularidade adequadas à natureza dos serviços prestados.</p>
            <p>4.2 - Solucionar as reclamações do CLIENTE sobre falhas nos serviços prestados.</p>
            <p>4.3 - Respeitar e se submeter fielmente à totalidade das cláusulas e condições pactuadas neste contrato.</p>
            <p>
                4.4 - O CLIENTE reconhece que, para a prestação dos serviços objeto do presente Contrato, poderá a CONTRATADA empregar equipamentos próprios ou de terceiros, assim como 
                subcontratar serviços de terceiros, assumindo sempre a CONTRATADA, em qualquer hipótese, a plena responsabilidade dos serviços em questão.
            </p>
            <p>
                4.5 - A CONTRATADA se exime de qualquer responsabilidade por danos e/ou prejuízos e/ou pela prática de atividades e condutas negativas pelo CLIENTE, 
                danosas e/ou ilícitas, através da utilização dos serviços de valor adicionado objetos deste contrato.
            </p>
            <p>
                4.6 - Caso seja possível, a CONTRATADA deverá comunicar ao CLIENTE, através de correio eletrônico ou aviso veiculado no sítio web, 
                com antecedência mínima de 24 (vinte e quatro) horas, a suspensão da prestação dos serviços por ocasião de manutenções programadas no sistema.
            </p>
            <p>
                4.7 - Caso o CLIENTE solicite mudança de endereço ou localidade, o atendimento estará sujeito à disponibilidade técnica no novo local pretendido 
                mediante o pagamento de uma nova TAXA, para envio de novo simcard com novo DDD e o cliente fica ciente de que o número da linha será alterado.
            </p>
            <p>
                4.8 - Garantir a privacidade e a segurança dos dados registrados de seus CLIENTES não sendo os mesmos divulgados para terceiros, 
                em hipótese alguma, salvo por ordem judicial ou autorização por escrito do usuário.
            </p>
            <p>
                4.9 - Os Serviços de Valor Adicionado são prestados exclusivamente ao CLIENTE, sendo vedado ao mesmo comercializar, ceder, alugar, sublocar, compartilhar, 
                disponibilizar ou transferir a terceiros, seja a que título for, quaisquer serviços ou produtos relacionados aos Serviços de Valor Adicionado.
            </p>
            <p>
                4.9.1 - O descumprimento do item acima sujeitará o CLIENTE ao desligamento automático da conexão, sem a necessidade de qualquer aviso prévio ou ressarcimento, 
                além da cobrança de multa estipulada em 10 (dez) vezes o valor mensal do PLANO DE SERVIÇO escolhido pelo CLIENTE.
            </p>
            <p>
                4.9.2 - Para minimizar problemas de compartilhamento indevido, vírus, trojans, tentativas de invasões, ataques, entre outros causados por mal uso interno ou externamente, 
                a CONTRATANTE para assim manter a qualidade e segurança de todos os CLIENTES em cada assinatura INDIVIDUALMENTE é feito um limite de 100 conexões para portas 80,443 (TCP) 
                NAVEGAÇÃO e 40 conexões para portas UDP EM GERAL.
            </p>
            <p>
                4.10 - Comunicar ao CLIENTE sobre toda e qualquer alteração nas condições de prestação dos Serviços de Valor Adicionado, inclusive referente à mudança de tecnologia que enseje modificação dos termos deste Contrato.
            </p>
            <p>
                4.11 - A velocidade de acesso do CLIENTE ao “backbone” da internet poderá apresentar períodos de desempenho inferior ao normal do PLANO DE SERVIÇO contratado e a CONTRATADA garante ao CLIENTE as regulamentações 
                que se encontram no site da anatel, http://www.anatel.gov.br/Portal/ da Resolução no 575, de 28 de outubro de 2011.
            </p>
            <p>
                4.11.1 - A CONTRATADA utilizará todos os meios, comercialmente viáveis, para que o ASSINANTE alcance velocidades máximas no link contratado para o ponto. 
                Contudo, o ASSINANTE declara estar ciente e concorda que tais velocidades podem variar dependendo do equipamento utilizado, 
                tráfego de dados na internet, número e tipos de acessos realizados por outros usuários, além de outros fatores fora do controle da CONTRATADA.
            </p>
            <p>
                4.12 - O CLIENTE deverá utilizar software adequado ao envio e recebimento de mensagens de correio de internet, sendo que o acesso à caixa postal será através da 
                página de internet Web-mail, a fim de permitir o acesso do CLIENTE quando este estiver em trânsito.
            </p>
            <p>
                4.13 - Atender às solicitações de atendimento e suporte técnico para manutenção e reparo dos serviços de Comunicação Multimídia no prazo máximo de 5 (CINCO) 
                dias úteis contados a partir da abertura do chamado pelo CLIENTE na Central de Atendimento da CONTRATADA.
            </p>
            <h3>CLÁUSULA QUINTA – DOS DIREITOS E DEVERES DO CLIENTE</h3>
            <p>
                Além das demais obrigações previstas neste Contrato e na regulamentação vigente, constituem-se direitos e deveres do CLIENTE:
            </p>
            <p>
                5.1 - Efetuar os pagamentos devidos em razão dos serviços decorrentes deste contrato, de acordo com os valores, periodicamente, forma, condições e vencimentos indicados no TERMO DE CONTRATAÇÃO, 
                parte integrante e essencial à celebração do presente instrumento.
            </p>
            <p>5.2 - Utilizar adequadamente os serviços, redes e equipamentos relativos ao serviço ora contratado, comunicando a CONTRATADA qualquer eventual anormalidade observada;</p>
            <p>5.3 – O cliente está ciente de que se trata de um BETA TESTER, para averiguação da qualidade da UNI nos serviços de valor adicionados disponibilizados.</p>
            <p>5.4 - Permitir às pessoas designadas pela CONTRATADA o acesso às dependências onde estão instalados os equipamentos disponibilizados e necessários à prestação dos serviços de valor adicionado.</p>
            <p>5.5 - Respeitar e se submeter fielmente à totalidade das cláusulas e condições pactuadas no presente instrumento.</p>
            <p>
                5.6 - Na hipótese do CLIENTE solicitar a CONTRATADA uma VISITA TÉCNICA para qualquer conserto ou reparo nos Serviços de Valor Adicionados por ela fornecidos, 
                e desde que as falhas não sejam atribuídas à CONTRATADA, tal solicitação acarretará na cobrança de uma visita, cabendo ao CLIENTE certificar-se previamente do 
                valor praticado à época junto à CONTRATADA.
            </p>
            <p>5.7 - O CLIENTE receberá da CONTRATADA, após a ativação dos serviços objeto do presente Contrato, a identificação e senha necessárias ao acesso à internet, não podendo em hipótese alguma ser a identificação/senha transferida a terceiros e/ou explorada para quaisquer fins comerciais/econômicos.</p>
            <p>5.8 - O CLIENTE assume integral responsabilidade por si e por terceiros na utilização de sua identificação e respectiva senha, obrigando-se a honrar os compromissos financeiros e legais daí resultantes.</p>
            <p>5.9 - Não serão permitidas conexões simultâneas utilizando a mesma identificação do CLIENTE e a mesma senha privativa.</p>
            <p>
                5.10 - Caberá ao CLIENTE manter seu equipamento movel protegido contra invasões provenientes de outros CLIENTES ou usuários da Internet, 
                bem como contra infecções causadas por softwares nocivos (vírus, spywares) ainda que as mesmas possam ser adquiridas por intermédio à CONEXÃO. Qualquer contribuição
                nesse sentido efetuado pela CONTRATADA ao CLIENTE não imputará ao primeiro qualquer responsabilidade por essa proteção.
            </p>
            <p>5.11 - Configurar adequadamente seu equipamento móvel, instalando sistemas pessoais de firewall, para evitar o acesso de suas pastas particulares por pessoas estranhas. A internet é uma rede pública, na qual as proteções por parte do usuário são requeridas como antivírus e afins.</p>
            <p>5.12 – Manter em seu equipamento instalado o simcard e os APP ́s necessários.</p>
            <p>5.13 - É de exclusiva responsabilidade do CLIENTE a instalação, manutenção e proteção de seus equipamentos, bem como dos equipamentos terminais de sua propriedade.</p>
            <p>5.14 - Quando for de seu interesse mais de um ponto de acesso, deverá providenciar um equipamento adequado para que os demais pontos tenham acesso.</p>
            <p>5.15 - Manter o cadastro pessoal sempre atualizado junto ao site da CONTRATADA.</p>
            <p>
                5.16 - Os Serviços de Valor Adicionado CONTRATADA não permitem a disponibilização do(s) terminais de computador a ele conectado(s) como servidor(es) de dados de qualquer 
                espécie (ex.P2P), inclusive: servidores Web, FTP, SMTP, POP3, redes virtuais privadas e quaisquer conexões entrantes que caracterizem ofertas de serviços pelo CLIENTE. 
                A infração desta cláusula poderá implicar na rescisão contratual unilateral. Qualquer eventual permissão ou disponibilização para qualquer um desses tipos de serviços 
                por parte da CONTRATADA dependerá do resultado de uma análise que a CONTRATADA deverá fazer e, se favorável, será em caráter provisório, temporário, e o CLIENTE, 
                antecipadamente declara que está ciente que a permissão ou disponibilização não constituem obrigação de continuidade, caracterizando-se como mera liberalidade por parte da CONTRATADA.
            </p>
            <p>5.17 - A CONTRATADA NÃO autoriza o CLIENTE a utilizar o serviço Internet banda larga para fins comerciais.</p>
            <p>5.18 - Ter restabelecida a integridade dos direitos relativos à prestação dos serviços, a partir da purgação da mora, ou de acordo celebrado com a prestadora, com a imediata exclusão de informação de inadimplência sobre ele anotada.</p>
            <h3>CLÁUSULA SEXTA – DA PROPRIEDADE INTELECTUAL</h3>
            <p>
                6.1 - O CLIENTE, na forma da lei civil e penal brasileira, respeitará os direitos autorais dos softwares, hardwares, marcas, tecnologias, nomes, programas, serviços, sistemas, 
                músicas, filmes, e tudo o mais que, por ventura, venha a ter acesso através do serviço ora contratado, respondendo diretamente perante os titulares dos direitos ora referidos 
                pelas perdas, danos, lucros cessantes, e tudo o mais que porventura lhes venha a causar, em razão do uso indevido ou ilegal daqueles direitos.
            </p>
            <p>
                6.2 - O CLIENTE está ciente de que a utilização da internet deve ser realizada com responsabilidade, respeitando legislações, principalmente no que tange a privacidade, 
                propriedades intelectuais e direitos autorais. A CONTRATADA se reserva no direito de limitar parcialmente, totalmente ou cancelando uni- lateralmente o contrato, 
                caso constate que tais princípios não estão sendo observados pelo CLIENTE.
            </p>
            <p>
                6.3 - A CONTRATADA poderá introduzir modificações ou aditivo contratual no presente instrumento, mediante devido registro em cartório, com comunicação escrita ou mensagens 
                lançadas no documento de cobrança mensal, qualquer forma eletrônica online, 
                restando tais informações disponíveis também no site da CONTRATADA, o que será dado pelo CLIENTE por recebido e aceito.
            </p>

            
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="scripts/my-menu.js"></script>
<script src='scripts/my-navigation.js'></script>
<script src="scripts/valid-cadastro.js"></script>

</body>
</html>