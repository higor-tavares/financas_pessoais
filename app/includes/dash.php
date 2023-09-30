<?php
    $query="SELECT SUM(valor) FROM lancamentos WHERE tipo = 'RECEITA'";  
    $receita= mysqli_query($conn,$query); 
    $total_receita= mysqli_fetch_row($receita)[0];
    $query2="SELECT SUM(valor) FROM lancamentos WHERE tipo = 'DESPESA'";  
    $despesa= mysqli_query($conn,$query2); 
    $total_despesa= mysqli_fetch_row($despesa)[0];
    $balance = $total_receita -  $total_despesa;
?>
<div class="container">
<h2 class="text-center" >Resumo</h2>
<div class="row">
<div class="card bg-light col">
  <div class="card-header">Despesas</div>
  <div class="card-body">
  <?php echo "<h5 class=\"card-title\">R$ {$total_despesa}</h5>" ?>
  </div>
</div>
<div class="card bg-light col">
  <div class="card-header">Receitas</div>
  <div class="card-body">
  <?php echo "<h5 class=\"card-title\">R$ {$total_receita}</h5>" ?>
  </div>
</div>
<div class="card bg-light col">
  <div class="card-header">Balanço</div>
  <div class="card-body">
  <?php echo "<h5 class=\"card-title\">R$ {$balance}</h5>" ?>
  </div>
</div>
</div>
</div>