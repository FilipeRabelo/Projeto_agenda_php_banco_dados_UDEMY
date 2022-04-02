
<!-- PAGINA DE CONTATO INDIVIDUAL -->

<?php
  include_once("templates/header.php");
?>

  <div class="container" id="view-contact-container">
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $contact["phone"] ?></p>  <!-- vem do banco de dados-->
    <p class="bold">Observações:</p>
    <p><?= $contact["observation"] ?></p>  <!-- vem do banco de dados-->
  </div>
    
<?php
  include_once("templates/footer.php");
?>





