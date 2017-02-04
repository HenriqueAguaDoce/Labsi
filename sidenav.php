<div class="col-sm-2 sidenav">
  <div class="left-navigation">
    <ul class="list">
        <h5><strong>MENU</strong></h5>
        <li><a href="missao.php">Missão</a></li>
        <li><a href="area_informacao.php">Área Estratégica de Informação</a></li>
        <li><a href="tipologias_atuacao.php">Tipologias de Atuação</a></li>
        <li><a href="investigacao.php">Investigação</a></li>
    </ul>
      <ul class="list">
        <h5><strong>PROJETOS</strong></h5>
        <?php if (isset($_SESSION['validUser']) AND $_SESSION['validUser'] == 1) :?>
        <li><a href="criar_projeto.php">Criar Projeto</a></li>
        <li><a>PetriRig</a></li>
        <li><a>Eugénio V3</a></li>
        <?php else: ?>
        <li><a>PetriRig</a></li>
        <li><a>Eugénio V3</a></li>
        <?php endif; ?>
    </ul>
    <ul class="list">
        <h5><strong>PUBLICAÇÕES</strong></h5>
        <?php if (isset($_SESSION['validUser']) AND $_SESSION['validUser'] == 1) :?>
        <li><a>Criar Publicação</a></li>
        <li><a>Publicação 1</a></li>
        <li><a>Publicação 2</a></li>
        <?php else: ?>
        <li><a>Publicação 1</a></li>
        <li><a>Publicação 2</a></li>
        <?php endif; ?>
    </ul>    
  </div>
</div>