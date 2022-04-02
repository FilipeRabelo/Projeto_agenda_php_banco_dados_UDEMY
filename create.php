<?php
include_once("templates/header.php");
?>

  <div class="container">

    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar Contato</h1>

      <!-- action é o arquivo onde vou processar as informações / method POST -->

      <form action="<?= $BASE_URL ?>config/process.php>" method="POST" > 
        <input type="hidden" name="type" value="create" >   <!-- Para guiar nosso projeto (no process) para o que eu quero fazer como envio desse formulario -->
        
        <div class="form-group">   <!-- DIV PARA NOME NO CADASTRO -->
          <label for="name">Nome do Contato:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome:" required>
        </div>
        
        <div class="form-group">   <!-- DIV PARA TELEFONE NO CADASTRO -->
          <label for="phone">Telefone do Contato:</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o Telefone:" required>
        </div>
        
        <div class="form-group">   <!-- DIV PARA tELEFONE NO CADASTRO -->
          <label for="observation">Observações:</label>
          <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Insira as Observações:" rows="3" required> </textarea>
        </div>

        <!-- name é a forma da gente se guiar para o backend de cada valor q vai ser recebido-->

        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>

  </div>

<?php
include_once("templates/footer.php");
?>