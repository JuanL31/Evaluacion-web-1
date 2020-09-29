<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Calculadora</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="EJERCICIO1.php">Calculadora <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>  
</header>
<main>

    <div class="container">
        <div class="row justify-content-center">
           <div class="col-4">

            <center>
            <form class="mt-5" action="EJERCICIO1.php" method="POST">
                <h4>Calculadora</h4>
                <br>
                <br>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Ingrese   numero" name="numero1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Ingrese   numero" name="numero2">
                        </div>
                       
                    </div>
                    <br>
                    <br>
                    
                    

                    <button type="submit" class="btn btn-info"  name="botonCalcular1">SUMA</button>
                    <button type="submit" class="btn btn-info"  name="botonCalcular2">RESTA</button>
                    <button type="submit" class="btn btn-info"  name="botonCalcular3">MULTIPLICACION</button>
                   
            </form>
            </center>
       <?php 

        if(isset($_POST["botonCalcular1"])){
         $resultado;
        
        $valor1=$_POST["numero1"];
        $valor2=$_POST["numero2"];

        $resultado= $valor1 + $valor2;
        echo("<br>");
        echo("El resultado de la suma es :  " .$resultado);

       }


       ?>


       <?php 
       
       if(isset($_POST["botonCalcular2"])){

        $valor1=$_POST["numero1"];
        $valor2=$_POST["numero2"];

        $resultado= $valor1 - $valor2;
       
       echo("<br>");
       echo("El resultado de la resta es :  " .$resultado);
       }
       
       ?>


       <?php 
       
        if(isset($_POST["botonCalcular3"])){

        $valor1=$_POST["numero1"];
        $valor2=$_POST["numero2"];

        $resultado= $valor1 * $valor2;
       echo("<br>");
       echo("El resultado de la multiplicación es :  " .$resultado);
       }
       
       ?>

       <?php      
       
       ?>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>