<nav class="navbar navbar-static-top navbar-default">
    <div class="container">
        <div class="navbar-header navbar-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#menu-principal" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="img/logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu-principal">
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#index.php">Home<span class="sr-only">(current)</span></a></li> -->
                <li><a href="index.php">Home</a></li>
                <li><a href="sobre.php">Sobre nós</a></li>
                <li><a href="#">Cartão de crédito</a></li>
                <li><a href="contato.php">Contatos</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a class="login bold" href="login.html">Login</a></li>
                <li><a href="#" class="cadastre-se" role="button" data-toggle="modal" data-target="#novaConta">Abrir
                        minha conta</a></li>
            </ul>


        </div><!-- /.navbar-collapse -->

    </div>
</nav>
<div class="modal fade" id="novaConta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                        class="bt-fechar-modal">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="padding-30">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Insira os dados para cadastrar</h3>
                        </div>
                        <div class="col-md-12">
                            <form class="contato" action="login.html"> 
                                <div class="form-group">
                                    <input id="nova-conta-nome" type="text" placeholder="Nome Completo"
                                        class="form-control">
                                    <input id="nova-conta-cpf" type="number" placeholder="CPF" class="form-control">
                                    <input id="nova-conta-email" type="text" placeholder="E-mail" class="form-control">
                                    <input id="nova-conta-email-confirma" type="text" placeholder="Confirmar e-mail"
                                        class="form-control">
                                    <div class="mt-15">
                                        <input type="checkbox" id="termo" name="termo"><label for="termo">Li e concordo
                                            com a</label> <a href="#" class="azul">política de privacidade</a>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-secundario btn-block">EFETUAR
                                            CADASTRO</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>