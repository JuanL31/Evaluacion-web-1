<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postobon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">POSTOBON</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header> 
<center>
            <form class="mt-5" action="EJERCICIO4.php" method="POST">
                <h4>Consulte su Salario</h4>
                <br>
                <br>
                    <div class="row">
                 <div class="col">
                            <input type="text" class="form-control" placeholder="Introduzca las horas trabajadas" name="horas">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Introduzca las horas Extras" name="horasex">
                        </div>
                       <br>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="botonCalcular1">Calcular</button>
                   </form>
            </center>
</body>
</html>
<?php
    if(isset($_POST["botonCalcular1"])){
    $horasex=$_POST["horasex"];
    $horas=$_POST["horas"];
    $calcular;

    $calcular=$horas * 20000;
    echo("Su sueldo semanal es: ".$calcular);

    if ($horasex>=1){
      $calcular=$horas * 20000 + (25000*$horasex);
        echo("<br>");
       echo("<br>");
       echo ("su salario mas las horas extras es: ".$calcular);
  
    }
    }
?>