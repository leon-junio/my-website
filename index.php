<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leon Soluções
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/control.css">
    <link rel="stylesheet" href="css/whats.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/onepage-scroll/onepage-scroll.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <?php require "html/whats.html" ?>
    <div class="main">
        <section class="bg-cover bg-center hero">
            <div class="dark-overlay"></div>
            <div class="position-relative z-index-1">
                <div class="container text-center text-white">
                    <h1 class="text-uppercase my-4">Leon Soluções</h1>
                    <p class="font-italic lead">Aqui você vai encontrar as melhores soluções do mercado atual de informática.</p>
                    <p class="font-italic lead">Então não perca tempo e arrasta pra baixo pra conhecer um pouco mais sobre meu trabalho!</p>
                    <ul class="onepage-scroll">
                        <li class="list-inline-item">
                            <a id="btn-contato" data-index="6" class="btn btn-outline-light" onclick="location.replace('#7');location.reload();">Contato</a>
                        </li>
                        <li class="list-inline-item">
                            <a id="btn-port" data-index="4" class="btn btn-outline-light" onclick="location.replace('#4');location.reload();">Portfólio</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="scroll-btn link-scroll" onclick="location.replace('#2');location.reload();"><i class="fas fa-angle-double-down"></i></div>
        </section>
        <section id="1">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <header class="text-center">
                                <h2 class="text-uppercase lined">Leon Júnio Martins</h2>
                            </header>
                            <p class="lead">Encontrando soluções com apoio da mais alta tecnológia</p>
                            <p>Sou programador e desenvolvedor de aplicações e sites web. Com ensino técnico completo em informática pelo IFMG e atualmente curso Ciência da Computação na PUC Minas. Sou capaz de projetar, desenvolver e encontrar as soluções para os seus problemas e os de sua empresa.</p>
                            <p>Sou desenvolvedor backend com experiência no desenvolvimento de aplicações backend tanto para web quanto para desktop em diversas linguagens como: Java, C/C++, Python, PHP, JavaScript e C#.</p>
                            <p>Além de atuar na aréa de desenvolvimento, trabalho com manutenção/suporte em informática, design, webdesign, redes de computadores e muito mais! São muitos anos de experiência profissional e técnica com o mercado de trabalho
                                na area da computação, com isso tenho certeza que o meu conhecimento pode ser a resposta.</p>
                            <a href="https://github.com/leon-junio" target="_blank">Veja meu perfil no Github <i class="fab fa-github fa-2x fa-sm"></i></a>
                        </div>
                        <div class="col-lg-6">
                            <img src="img/sobre.png" style="position: absolute;z-index: 1;right: 2%;" alt="..." style="z-index: 0;" class="img-fluid rounded-circle d-block mx-auto">
                            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_p1qiuawe.json" background="transparent" speed="1" style="width: 100%; height: 103%;" loop autoplay></lottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <header class="mb-5 text-center">
                        <h2 class="text-uppercase lined">Serviços</h2>
                    </header>
                    <div class="row text-center">
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim1','ic1');" onmouseout="leon('anim1','ic1')">
                            <?php require "html/design1.html" ?>
                            <div id="ic1" class="icon mb-3"><i class="fas fa-desktop"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Web design</h4>
                            <p class="text-mted">Desenvolvimento de sites responsivos e rápidos.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim2','ic2');" onmouseout="leon('anim2','ic2')">
                            <?php require "html/design2.html" ?>
                            <div id="ic2" class="icon mb-3"><i class="fas fa-laptop-medical"></i>
                            </div>
                            <h4 class="text-uppercase lined lined-compact">Manutenção</h4>
                            <p class="text-mted">Manutenção e suporte em computadores/notebooks de todas as marcas.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim3','ic3');" onmouseout="leon('anim3','ic3')">
                            <?php require "html/design3.html" ?>
                            <div id="ic3" class="icon mb-3"><i class="fas fa-globe-americas"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Redes e Projetos</h4>
                            <p class="text-mted">Configurações de redes de computadores, roteadores e projetos de informática.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim4','ic4');" onmouseout="leon('anim4','ic4')">
                            <?php require "html/design4.html" ?>
                            <div id="ic4" class="icon mb-3"><i class="far fa-lightbulb"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Consultoria</h4>
                            <p class="text-mted">Tenha uma consultoria completa sobre informática em geral no setor de compras, projetos, configurações entre outros.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim5','ic5');" onmouseout="leon('anim5','ic5')">
                            <?php require "html/design5.html" ?>
                            <div id="ic5" class="icon mb-3"><i class="fas fa-code"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Programação e Aplicações</h4>
                            <p class="text-mted">Desenvolvimento de aplicações web, desktop, mobile. Conhecimentos em Java, JavaScript, PHP, MySQl, WebDev e muito mais.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4" onmouseover="raiane('anim6','ic6');" onmouseout="leon('anim6','ic6')">
                            <?php require "html/design6.html" ?>
                            <div id="ic6" class="icon mb-3"><i class="fas fa-user"></i></div>
                            <h4 class="text-uppercase lined lined-compact">Cursos e aulas</h4>
                            <p class="text-mted">Conhecimentos técnicos para ministrar aulas sobre informática básica e cursos de alto desempenho.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-uppercase lined">Portfólio</h2>
                        <p class="text-mted">Projetos e repositórios</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-4 align-items-center text-center">
                            <a class='btn btn-outline-dark' href="https://www.linkedin.com/company/netproject-ppm" target="_blank">Netproject</a>
                            <a class='btn btn-outline-dark' href="https://github.com/Bois-Barganhados-Studio" target="_blank">Bois Barganhados Studios</a>
                            <a class='btn btn-outline-dark' href="https://github.com/leon-junio/elf-alfa-hackathon" target="_blank">Alfa Hackthon</a>
                            <a class='btn btn-outline-dark' href="https://saudeplus.epizy.com" target="_blank">Saúde+</a>
                            <a class='btn btn-outline-dark' href="https://github.com/leon-junio/TI-Storage-Solutions" target="_blank">Storage Solutions</a>
                            <a class='btn btn-outline-dark' href="https://github.com/leon-junio/mobile-PUC" target="_blank">Aplicativos Mobile</a>
                        </div>
                        <div class="col-lg-12 col-md-12 mb-4 align-items-center text-center">
                            <a href="https://www.linkedin.com/in/leonjrmartins/" target="_blank"> Veja minhas contribuições e vida profissional no meu linkedin <i class="fab fa-linkedin fa-2x fa-xl"></i></a>
                        </div>
                        <div class="col-lg-12 col-md-12 mb-4 align-items-center text-center">
                            <a href="https://github.com/leon-junio" target="_blank"> Veja meus projetos e repositórios no Github <i class="fab fa-github fa-2x fa-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div id="div-down" class="col-12 align-items-center text-center">
                        <h2 class="text-uppercase lined">SAÚDE+ -  Gerenciamento de serviços de sáude</h2>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6 align-items-center text-center">
                        <h5>Baixar o sistema</h5>
                        <a type="button" href="#" id="btn-down" class="btn btn-outline-dark" data-toggle="modal" data-target="#downModal">
                            Download do SAUDE+ 2023</a>
                        <p>Versão 2.3.12 --- 18/08/2023 </p>
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_kabycqad.json" background="transparent" speed="1" style="width: 100%; height: 200px;" loop autoplay></lottie-player>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6 align-items-center text-center">
                        <h5>Como atualizar/instalar ?</h5>
                        <iframe width="70%" height="215" loading="lazy" autoplay="false" src="https://www.youtube.com/embed/t_0Vvqa7B1U?autoplay=1" title="Video Instalação" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>Tutorial de instalação/atualização do Saude+ 2023</p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12 align-items-center text-center">
                        <h5>INFORMAÇÕES DA VERSÃO 2.3.12</h5>
                        <p>Todas as alterações desta versão estão documentadas e são abertas para visualização. As alterações contém detalhes técnicos, em caso de dúvidas contate o suporte!</p>
                        <a class="btn btn-outline-dark" href="patch-notes.html">Ver notas da versão (O que há de novo?)</a>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12 align-items-center text-center">
                        <h5>REQUISITOS DO SISTEMA</h5>
                        <li>Java 64 bits <a class='btn btn-outline-dark' href="https://javadl.oracle.com/webapps/download/AutoDL?BundleId=245448_4d5417147a92418ea8b615e228bb6935" target="_blank">Download do java</a></li>
                        <li>Resolução recomendada: acima de 1024x720 e taxa de zoom até 120%</li>
                        <li>Processador Dual Core acima de 2.0 GHz (Intel® ou AMD®)</li>
                        <li>4 GB de RAM</li>
                        <li>100 MB de espaço no HD (Partição "C:")</li>
                        <li>Conexão com a internet de no minimo 10 Mbps</li>
                        <li>Sistema operacional: Windows 10/11 (64 bits) (Dispositivos Linux não são suportados)</li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="col-12 align-itens-center text-center">
                <h2 class="text-uppercase lined">BLOG</h2>
                <iframe style="height:600px" loading="lazy" autoplay="false" class="site1" width="100%" height="100%" frameborder="0" src="https://leongitapi.leonjunio.repl.co/"></iframe>
            </div>
        </section>
        <section class="bg-gray">
            <div class="col-12 align-items-center text-center">
                <h2 class="text-uppercase lined">Contato</h2>
                <div class="col-12 redes-sociais">
                    <article class="redes">
                        <a href="http://instagram.com/leonjrmartins" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="http://facebook.com/leonjrmartins" target="_blank"><i class="fab fa-facebook-square fa-2x fa-sm"></i></a>
                        <a href="http://twitter.com/leonjrmartins" target="_blank"><i class="fab fa-twitter fa-2x fa-sm"></i></a>
                        <a href="https://www.linkedin.com/in/leonjrmartins/" target="_blank"><i class="fab fa-linkedin fa-2x fa-sm"></i></a>
                        <a href="https://github.com/leon-junio" target="_blank"><i class="fab fa-github fa-2x fa-sm"></i></a>
                        <a href="https://www.youtube.com/channel/UCjLj-ZZKSv5Fd05AzSVajiw" target="_blank"><i class="fab fa-youtube fa-2x fa-sm"></i></a>
                    </article>
                    <hr>
                    <form class=" contact-form align-items-center text-center">
                        <div class=" row ">
                            <div class=" form-group col-lg-4 ">
                                <label for="nome">Seu primeiro nome *</label>
                                <input id="nome" type=" text " required name=" firstname " placeholder=" Digite seu primeiro nome " class=" form-control ">
                            </div>
                            <div class=" form-group col-lg-4 ">
                                <label for="sobrenome">Seu sobrenome *</label>
                                <input id="sobrenome" type=" text " required name=" lastname " placeholder=" Digite seu sobrenome " class=" form-control ">
                            </div>
                            <div class=" form-group col-lg-4 ">
                                <label for="email">Seu email *</label>
                                <input id="email" type=" email " required name=" email " placeholder=" Digite seu email " class=" form-control ">
                            </div>
                            <div class=" form-group col-lg-12 ">
                                <label for="message">Sua mensagem que deseja enviar *</label>
                                <textarea id="message" name=" message " required rows="4" placeholder=" Digite sua mensagem " class=" form-control "></textarea>
                            </div>
                            <div class=" form-group col-lg-12 ">
                                <button type="submit" href="mailto:leondev.martins@gmail.com" class=" btn btn-outline-primary">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
                <footer>
                    <div class="bg-darker py-4">
                        <div class="container text-center">
                            <p class="mb-0 text-muted text-small">&copy; Todos os direitos reservados. Desenvolvido por <a href="https://www.instagram.com/leonjrmartins/?hl=pt-br">Leon</a> 2023.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
        <!-- JavaScript files-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src=" vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
        <script src=" vendor/onepage-scroll/jquery.onepage-scroll.min.js "></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src=" js/front.js?id=<?php echo time()?>"></script>
        <script src=" js/main.js?id=<?php echo time()?>"></script>
        <script>
            window.onload = device();
            check();
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css " integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">
    </div>
    <?php require_once('structures/downModal.php'); ?>
</body>
</html>