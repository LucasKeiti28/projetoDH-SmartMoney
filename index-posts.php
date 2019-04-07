<?php
  include_once "head.php" ;
  include_once "header-interna.php" ;
?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="curso-box-card"> <!--Box que engloba todo o Card do curso-->
          <div class="curso-box-img"> <!--Box que engloba imagem e nome do curso-->
            <h2 class="bold">Sistema de Equações do 1 Grau</h2>
            <h3>Matemática</h3>
          </div>
          <div class="curso-box-infos"> <!--Informação de minuto, aluno e dificuldade-->
            <div class="row">
              <div class="col-md-4">
                <p class="card-infos-num">45</p>
                <p class="card-infos-desc">Minutos</p>
              </div>
              <div class="col-md-4">
                <p class="card-infos-num">234</p>
                <p class="card-infos-desc">Alunos</p>
              </div>
              <div class="col-md-4">
                <p class="card-infos-num">6/10</p>
                <p class="card-infos-desc">Dificuldade</p>
              </div>
            </div>
          </div> <!-- curso-box-infos -->
         </div> <!-- curso-box-card -->
      </div>
    </div>
  </div>
</main>

<?php
  include_once "footer.php" ;
?>