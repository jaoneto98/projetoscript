<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Mantenha-se conectado conosco</p>
                <p class="description description-primary">Faça seu login com suas informações pessoais!</p>
                <button id="signin" class="btn btn-primary">Entrar!</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie uma conta!</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou use seu E-mail para:</p>
                {{ Form::open(array('url' => route('cadastrar'), 'method' => 'post', 'class' => 'form')) }}
                <!-- <form class="form" action="{{route('cadastrar')}}" method="POST"> -->
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome" name="cadNome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="E-mail" name="cadEmail">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="cadSenha">
                    </label>
                    
                    @if(isset($erro))
                    <label class="label-input" for="">
                        ERRO: {{ $erro }}
                    </label>
                    @endif

                    <button type="submit" class="btn btn-second" onclick="submit()">Cadastrar</button>
                <!-- </form> -->
                {{ Form::close() }}
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá!</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">e comece a jornada conosco</p>
                <button id="signup" class="btn btn-primary">Inscreva-se</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Faça seu login agora!</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou use o seu E-mail para logar:</p>
            
            
                {{ Form::open(array('url' => route('logar'), 'method' => 'post', 'class' => 'form')) }}
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="E-mail" name="logEmail">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha"  name="logSenha">
                    </label>
                
                    @if(isset($erro))
                    <label class="label-input" for="">
                        ERRO {{ $erro }}
                    </label>
                    @endif

                    <a class="password" href="#">
                        Esqueceu sua senha?
                    </a>
                    <button type="submit" class="btn btn-second" onclick="submit()">Logar</button>
                {{ Form::close() }}
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="assets/js/app.js"></script>
</body>
</html>