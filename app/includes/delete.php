<!-- Footer -->

<?php  include "../header.php" ?>
<?php 
     ob_start();
     if(isset($_GET['delete']))
     {
         $id= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM lancamentos WHERE id = {$id}"; 
         $delete_query= mysqli_query($conn, $query);
         echo "<script type='text/javascript'>window.top.location='http://localhost:8081/index.php';</script>"; exit;
         die();
     }
              ?>

<!-- Footer -->
<?php include "../footer.php" ?>