<?php
  include_once "head.php" ;
  include_once "header.php" ;
?>
<main class="display-flex-center institucional">
  <div class="container">
    <div class="row display-flex-center">
      <div class=" col-md-6">
        <div class="texto-principal-mobile">
          <h1 class="bold">Mande uma mensagem ;)</h1>
          <form class="contato">
            <div class="form-group">
              <input id="nome" type="text" placeholder="Nome" class="form-control">
              <input id="email" type="text" placeholder="Email" class="form-control">
              <input id="telefone" type="text" placeholder="Telefone" class="form-control">
              <input id="mensagem" type="text" placeholder="Mensagem" class="form-control">
              <div class="text-right">
                <button type="submit" class="btn btn-contato">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class=" col-md-6">
        <img class="img-principal" src="img/img-contato.jpg" alt="">
      </div>
    </div>
  </div>
</main>

<?php
  include_once "footer.php" ;
?>