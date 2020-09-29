<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPRING STEP </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>


<center>
            <form class="mt-4" action="EJERCICIO3.php" method="POST">
                <h4>SPRING STEP</h4>
                <br>
                <br>
                
                    <div class="row">
                        <div class="col">
                            
                        <input type="text" class="form-control" placeholder="Cantidad de zapatos" name="cantidad1">
                        </div>
                        
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Precio" name="precio1">
                        </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="botoncompra">Comprar</button>
                 
            </form>
            </center>
       <?php 



      if(isset($_POST["botoncompra"])){
    
      $precio=$_POST["precio1"];
      $cantidad=$_POST["cantidad1"];
     $descuento;
    
      if ($cantidad<3) {
          echo("No hay descuento:");
          echo("<br>");
          $total=$precio*$cantidad;
          echo("Total de la compra es: ".$total);

      }

      elseif ($cantidad==3) {
             $total=$precio*$cantidad; 
             $descuento=($total*10)/100;
             echo("Su descuento es: ".$descuento);  
             echo("<br>");
             $valorneto=$total-$descuento;
             echo("Total de la compra es: ".$valorneto);
      }

      elseif ($cantidad>3 and $cantidad<=8) {
              $total=$precio*$cantidad; 
              $descuento=($total*20)/100; 
              echo("Su descuento es: ".$descuento);  
              echo("<br>");
              $valorneto=$total-$descuento;
             echo("Total de la compra es: ".$valorneto);
             
      }

      elseif ($cantidad>8) {
             $total=$precio*$cantidad; 
             $descuento=($total*50)/100;
             echo("Su descuento es: ".$descuento); 
             echo("<br>"); 
             $valorneto=$total-$descuento;
             echo("Total de la compra es: ".$valorneto); 

          
 }
      }
     
      ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>