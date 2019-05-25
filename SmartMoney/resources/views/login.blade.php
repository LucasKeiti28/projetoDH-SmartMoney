@include("head")

<body class="login-page">

    <div class="login-form-container">
        <form class="form-login" action="/cursos" method="get"> <!--Trocar método para POST-->
        @csrf
            <div class="form-centro">
                    <img src="img/icone-logo.png" alt="">
                    <span class="seu-login"><b>Faça seu login</b></span>
                    <input class="cpf" type="number" name="CPF" placeholder="CPF" required>
                    <input class="senha"  type="password" name="Senha" placeholder="Senha" required>
                    <button class="botao" type="submit">Continuar</button>
                <div class="esqueci-senha">  
                    <a href="#"><b>Esqueci minha senha ></b></a>
                </div>
            </div>
        </form>
    </div> 

</body>

</html>