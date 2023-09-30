<!-- Header -->
<?php  include "../header.php" ?>
 
<?php 
  if(isset($_POST['create'])) 
    {
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $tipo = $_POST['tipo'];
       
        $query= "INSERT INTO lancamentos(descricao, valor, tipo) VALUES('{$descricao}','{$valor}','{$tipo}')";
        $add_lancamento = mysqli_query($conn,$query);
     
          if (!$add_lancamento) {
              echo "something went wrong ". mysqli_error($conn);
          }
 
          else { 
            echo "<script type='text/javascript'>window.top.location='http://localhost:8081/index.php';</script>"; exit;
            die();
        }         
    }
?>
 
<h1 class="text-center">Novo Lançamento </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" name="descricao"  class="form-control">
      </div>
 
      <div class="form-group">
        <label for="valor" class="form-label">Valor</label>
        <input type="text" name="valor"  class="form-control">
      </div>
     
      <div class="form-group">
        <label for="tipo" class="form-label">Tipo</label>
        <select name="tipo"  class="form-control">
            <option value="DESPESA">DESPESA</option>
            <option value="RECEITA">RECEITA</option>
        </select>
      </div>    
 
      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="Adicionar">
      </div>
    </form> 
  </div>
 
   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="../index.php" class="btn btn-warning mt-5"> Voltar </a>
  <div>
 
<!-- Footer -->
<?php include "../footer.php" ?>