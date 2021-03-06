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
                <a href="{{route('login')}}">
                    <img src="assets/img/walking.png" style="position:relative;top:10" align="right" />
                </a>
            </div>
        </div>
    </main>
    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/formangatopfv.jpg">
                <p><b>
                    R$ 79,90 M
                </b></p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/gatochu.jpg" >
                <p><b>
                    R$ 69,90 M
                </b></p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/tocthorro.png">
                <p><b>
                    R$ 89,90 G
                </b></p>
            </div>
        </div>
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/piracat.jpg">
                <p><b>
                    R$ 69,90 M
                </b></p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/pit_agente_naval.jpg">
                <p><b>
                    R$ 69,90 G
                </b></p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="assets/img/pit_cornio.png">
                <p><b>
                    R$ 89,90 G
                </b></p>
            </div>
        </div>
    </div>
    
    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4" style="position:relative;top:-45px">
                <img alt="logo" title="Whiskas" src="assets/img/whiskas.jpg" />
            </div>
            <div class="col-4" style="position:relative;top:-55px">
                <img alt="logo" title="Pedigree" src="assets/img/pedigree.jpg" />
            </div>
            <div class="col-4" style="position:relative;top:-63px">
                <br />
                <img alt="logo" title="Ferplast" src="assets/img/ferplast.jpg" />
            </div>
            <div class="col-4" style="position:relative;top:-45px">
                <img alt="Puma" title="Royal Canin" src="assets/img/royal_canin.jpg" />
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
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>