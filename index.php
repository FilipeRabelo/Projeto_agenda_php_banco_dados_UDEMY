<?php
include_once("templates/header.php");
?>

  <div class="container">

    <?php if(isset($printMsg) && $printMsg != ""): ?>       <!-- Para verificar se tem algo preenchido -->
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">Minha Agenda</h1>

    <?php if(count($contacts) > 0): ?>   <!-- Se tiver mais de um contato na lista vou imprimir contatos -->
      <!-- <p>TEM CONTATOS</p> -->

        <table class="table" id="contacts-table"> <!--Tabela para mostrar os dados para p usuario -->
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome:</th>
              <th scope="col">Telefone:</th>
              <th scope="col"></th>
            </tr>
          </thead> <!-- FIM DO CABEÇALHO DA TABELA -->
          <tbody>  <!-- INICIO CORPO DA TABELA -->
            <?php foreach($contacts as $contact): ?>   <!-- Passar por todos os contatos -->
              <tr>
                <td scope="row" class="col-id" ><?= $contact["id"] ?></td>
                <td scope="row"><?= $contact["name"] ?></td>
                <td scope="row"><?= $contact["phone"] ?></td>
                <td class="actions">
                  <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a> <!-- VIEW Pra visualizar os dados -->
                  <a href="#"><i class="far fa-edit edit-icon"></i></a>
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </td>
              </tr>
            <?php endforeach; ?>  <!-- FIM DO FOREACH -->
          </tbody>
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