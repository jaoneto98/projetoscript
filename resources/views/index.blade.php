<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" />
    <title>Capet</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="assets/img/logo.png" style="position:relative;top:-24px" />
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li>
                            <a href="">
                                <img src="assets/img/insta.png" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="assets/img/facebookison.png" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="assets/img/zapzap.png" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{route('index')}}">Inicio</a>
                    </li>
                    <li>
                        <a href="">Serviços</a>
                    </li>
                    <li>
                        <a href="{{route('shop')}}">Shop</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Sobre nós</a>
                    </li>
                    <li>
                        <a href="">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Pesquisar" type="text" />
                @if(session('name'))
                    <a class="logado" style="color: rgb(0, 0, 0);">{{session('name')}}</a>
                    <a class="logout" style="color: rgb(255, 0, 0);" href="{{route('logout')}}">Logout </a>
                @else
                    <a href="{{route('login')}}"><img src="assets/img/walking.png" style="position:relative;top:10" allign="right" /></a>
                @endif
            </div>
        </div>
    </main>
    <div class="col-100">
        <div class="slider-principal">
            <img src="assets/img/filhotinho.jpg" />
            <img src="assets/img/gato_curioso.gif" />
            <img src="assets/img/dog_oi.jpg" />
            <img src="assets/img/gato_peladao.png" />
            <img src="assets/img/gato_cego.jpg" />
            <img src="assets/img/polvo.jpg" />
        </div>
    </div>
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>Capet ensina: <strong>proteção</strong> </h1>
            <p>É dever do proprietário proteger seu animal do sol e da chuva, além de impedir que os bichinhos fujam ou saiam sozinhos na rua. Assim, evitamos brigas, atropelamentos, envenenamentos e crias indesejáveis.</p>

            <div class="col-3 bloco-texto">
                <img src="assets/img/content-1.png" />
                <h3><b>Fique sempre atenado</b> </h3>
                <p>Sempre traremos novidades tanto para o cuidado quanto para a diversão dos seus pets!
                </p>
            </div>
            <div class="col-3 bloco-texto" style="margin-top: 6em;">
                <img src="assets/img/content-2.png" />
                <h3><b>Registre você e seu pet</b></h3>
                <p>Registrando-se e dando informações sobre seu pet podemos melhorar e personalizar ainda mais os cuidados para ele!
                </p>
            </div>
            <div class="col-3 bloco-texto">
                <img src="assets/img/irmaos_dogs.png" />
                <h3><b>Fotos</b> </h3>
                <p>Nós temos também ótimos serviços de fotografias para books do seu animalzinho!
                </p>
            </div>
        </div>
    </div>
    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/pit_cornio.png">
                <li>
                    <a href="{{route('roupa')}}">Roupas</a>
                </li>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/vacina.png">
                <li>
                    <a href="{{route('vacina')}}">Vacinação</a>
                </li>
                <p>A vacina é responsabilidade do Médico Veterinário, não podendo ser aplicada por outra pessoa, pois somente o Médico Veterinário está apto a examinar...
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/castelosubmerso.png">
                <p><b>Produtos para aquario</b></p>
                <p>Variedades de produtos marinhos!
                </p>
            </div>
        </div>
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/aquario_sem_fundo.png">
                <p><b>Cuidados</b></p>
                <p>Fique atento aos seus peixinhos e aos cuidados deles, temos serviços de cuidados, dicas e manutenção de aquarios a domicílio
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/pug_cadeirante.jfif">
                <p><b>Cuidados com pets deficientes</b></p>
                <p>Para nossos amiguinhos deficientes temos um cuidado extra mas sempre mantendo a alegria do pet em primeiro lugar!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/gato_cirurgiao.jpg">
                <p><b>Veterinaria</b></p>
                <p>Os atendimentos são realizados de acordo com o grau de risco do paciente.
                    com medicos e platonistas de 24hrs! 
                </p>
            </div>
        </div>
    </div>
    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4" style="position:relative;top:-45px">
                <img alt="Whiskas" title="Whiskas" src="assets/img/whiskas.jpg" />
            </div>
            <div class="col-4" style="position:relative;top:-55px">
                <img alt="Pedigree" title="Pedigree" src="assets/img/pedigree.jpg" />
            </div>
            <div class="col-4" style="position:relative;top:-63px">
                <br />
                <img alt="Ferplast" title="Ferplast" src="assets/img/ferplast.jpg" />
            </div>
            <div class="col-4" style="position:relative;top:-45px">
                <img alt="Royal Canin" title="Royal Canin" src="assets/img/royal_canin.jpg" />
            </div>
        </div>
    </div>
    <footer>
        <div class="col-100 footer">
            <div class="content">
                <div class="col-4">
                    <h3><b>Pastagens populares</b></h3>
                    <p>Envie Nos um texto de agradecimento e postaremos no nosso site e redes sociais!</p>
                    <p>Amor incondicional</p>
                    <p class="clock">08 de Março de 2020<p>
                    <p>Melhor parte da natureza.</p>
                    <p class="clock">25 de Fevereiro 2020<p>
                </div>
                <div class="col-4">
                    <h3><b>Tags: Amor incondicional</b></h3>
                    <p>Ter um bicho de estimação é cultivar um amor incondicional dentro da gente. É como criar um filho, um pequeno ser que depende do nosso carinho e afeto. A melhor parte dessa paixão é que eles nunca se cansam de amar de volta, não importa o que nós temos para dar em troca. Amor e atenção já são o suficiente para eles!</p>
                </div>
                <div class="col-4">
                    <h3><b>Melhor parte da natureza.</b></h3>
                    <p>
                        Os animais constituem a melhor parte da natureza. A parte que, mesmo ainda sendo irracional, é inteligente e bondosa. A parte que demonstra afeto sem querer nada em troca. Na verdade, os animais deixam a natureza ainda mais bela, ainda mais harmoniosa. E acredite: não dá nem para imaginar como seria se eles não existissem.
                    </p>
                </div>
                <div class="col-4">
                    <h3><b>Para todos!</b></h3>
                    <h3><b>
                        O bichinho mais fofo do mundo é o nosso! Não importa a raça ou o porte, se voa ou se nada.
                    </b></h3>
                    <p class="local">Maceió, AL<p>
                            <p class="email">capet@email.com<p>
                                    <p class="telefone">(82) 99127-5438<p>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-100 footer-2">
        <div class="content">
            <p>
                A saúde e o bem estar do seu bichinho em primeiro lugar!
            </p>
        </div>
    </div>

    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                localStorage.removeItem('blipSdkUAccount');
                new BlipChat()
                .withAppKey('ZmFlbDoxNjUxYjVkOS0wODk2LTQ4NTEtOGJjMS00MWFhNDNjYTZmM2E=')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
        })();
    </script>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>