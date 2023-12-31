<?php include "header.php"?>
<?php include "includes/dash.php"?>
  <div class="container">
    <h2 class="text-center" >Lançamentos financeiros</h2>
      <a href="includes/create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-plus"></i> Novo lançamento</a>
 
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Descrição</th>
              <th  scope="col">Valor</th>
              <th  scope="col">Tipo</th>
              <th  scope="col"> Data</th>
              <th  scope="col" colspan="3" class="text-center">Opções</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
  
          <?php
            $query="SELECT * FROM lancamentos";  
            $view_lancamentos= mysqli_query($conn,$query); 

            while($row= mysqli_fetch_assoc($view_lancamentos)){

              $id = $row['id'];                
              $descricao = $row['descricao'];        
              $valor = $row['valor'];         
              $tipo = $row['tipo'];        
              $data = $row['data_lancamento'];

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$descricao}</td>";
              echo " <td > R$ {$valor}</td>";
              echo " <td >{$tipo} </td>";
              echo " <td >{$data} </td>"; 
              echo " <td  class='text-center'>  <a href='includes/delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<?php include "footer.php" ?>