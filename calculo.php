<?php


function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

if($_POST){
    $factorial = 1;
    if(!empty($_POST['numero'])){
        $numero = $_POST['numero'];

        for($i = 1; $i <= $numero; $i++){

        $factorial = $factorial * $i;
            
        }

        echo "<div class='alert alert-success'>El factorial es: $factorial</div>";
    }
}



?>