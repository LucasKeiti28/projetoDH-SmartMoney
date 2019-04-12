<?php
  include_once "head.php" ;
  include_once "header-interna.php" ;

  $cursos = [
    "Full Stack" => ["Curso de Desenvolvimento Web", 1000.99, "full.jpeg", "fullstack"],
    "Marketing Digital" => ["Curso de Marketing", 1000.98, "marketing.jpg", "marketing"],
    "UX" => ["Curso de User Experience", 9000.98, "ux.jpg", "ux"],
    "Mobile Android" => ["Curso de Apps", 1000.97, "android.png", "android"]
  ];

?>
<main>
  <div class="container">
    <div class="row">
      <?php for ($i = 0 ; $i < 6 ; $i++ ) :?>
      <div class="col-md-4">
        <div class="curso-box-card"> <!--Box que engloba todo o Card do curso-->
          <div class="curso-box-img panel"> <!--Box que engloba imagem e nome do curso-->
            <span class="curso-box-add">+</span>
            <div class="curso-box-titulo-bg">
              <h2 class="bold curso-box-titulo">Sistema de Equações do 1 Grau</h2>
              <h3 class="curso-box-categ">Matemática</h3>
            </div>
          </div>
          <div class="curso-box-infos"> <!--Informação de minuto, aluno e dificuldade-->
            <div class="row">
              <div class="col-xs-4 col-md-4">
                <div class="panel">
                  <p class="card-infos-num bold">45</p>
                  <p class="card-infos-desc">Minutos</p>
                </div>
              </div>
              <div class="col-xs-4 col-md-4">
                <div class="panel">
                  <p class="card-infos-num bold">234</p>
                  <p class="card-infos-desc">Alunos</p>
                </div>
              </div>
              <div class="col-xs-4 col-md-4">
                <div class="panel">
                  <p class="card-infos-num bold">6/10</p>
                  <p class="card-infos-desc">Dificuldade</p>
                  </div>
              </div>
            </div>
          </div> <!-- curso-box-infos -->
        </div> <!-- curso-box-card -->
      </div>
      <?php endfor; ?>
    </div>
  </div>
</main>

<?php
  include_once "footer.php" ;
?>