<?php
include_once("templates/header.php");
?>

  <div class="container">

    <?php if(isset($printMsg) && $printMsg != ""): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">Minha Agenda</h1>

    <?php if(count($contacts) > 0): ?>   <!-- Se tiver mais de um contato na lista vou imprimir contatos -->
      <p>TEM CONTATOS</p>
        <table class="table" id="contacts-table"> <!--Tabela para mostrar os dados para p usuario -->
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome:</th>
              <th scope="col">Telefone:</th>
              <th scope="col"></th>
            </tr>
          </thead>
        </table>  
      <?php else: ?>
        <p id="empty-list-text">Ainda não há contatos na sua Agenda, 
          <a href="<?= $BASE_URL ?>creatphp">CLique para adicionar</a>  <!-- Se NÂO tiver contato na lista vou imprimir Clique para add contatos -->
        </p>

    <?php endif; ?>

  </div>

<?php
include_once("templates/footer.php");
?>