<?php
$peso = $_POST ["peso"];
$altura = $_POST ["altura"];

$peso = $peso/1000;

$altura = $altura/100;

$imc = $peso/($altura*$altura);

$imcformat = number_format($imc, 1);


if($imc < 18.5){
    $saude = "Você está com MAGREZA";
    
}else if($imc >= 18.5 && $imc <= 24.9){

    $saude = "Você está NORMAL";
}else if($imc >= 25.0 && $imc <= 29.9){
    
    $saude = "Você está com SOBREPESO";
}else if($imc >= 30.0 && $imc <= 39.9){
    
    $saude = "Você está com OBESIDADE";
}else if($imc >= 40.0){
    
    $saude = "Você está com OBESIDADE GRAVE";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/styles/bootstrap.min.css">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Title</title>
</head>
<body>
<div class="main">
    <div class="frmlogin">
    <form action="calculo.php" method="post">
        <h1>IMC</h1>
        <div class="form-group">
        Peso: <?php echo $peso ?> Kg<br><br>
        
        Altura: <?php echo $altura ?>M<br><br>
       
        IMC : <?php echo $imcformat ?><br><br>
       
         <?php echo $saude ?>
         </div>
    </form>

    </div>
</div>
</body>
</html

