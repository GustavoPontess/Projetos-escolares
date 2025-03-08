<?php
header("Content-type:text/html; charset=utf8");
if (isset($_POST["parcelamentos"]) && !empty($_POST["parcelamentos"]) && isset($_POST["parcelamentos"]) && !empty($_POST["parcelamentos"])) {
    $Parcelamento = $_POST["parcelamentos"];
} else {
    header("location: venda.html");
}
switch ($Parcelamento){
    case "1":
        $valor = "R$4.499,00";
        $Vparcela = "R$4.499,00";
        $juros = "NENHUM";
        $Parcelamento = "AVISTA";
        break;
    case "2":
        $valor = "R$4.499,00";
        $Vparcela = "R$2.249,50";
        $juros = "NENHUM";
        $Parcelamento = "2x";
        break;
    case "3":
        $valor = "R$4.499,00";
        $Vparcela = "R$1.499,66";
        $juros = "NENHUM";
        $Parcelamento = "3x";
        break;
    case "4":
        $valor = "R$4.499,00";
        $Vparcela = "R$1.124,75";
        $juros = "NENHUM";
        $Parcelamento = "4x";
        break;
    case "5":
        $valor = "R$4.499,00";
        $Vparcela = "R$899,80";
        $juros = "NENHUM";
        $Parcelamento = "5x";
        break;
    case "6":
        $valor = "R$4.499,00";
        $Vparcela = "R$749,83";
        $juros = "NENHUM";
        $Parcelamento = "6x";
        break;
    case "7":
        $valor = "R$4.499,00";
        $Vparcela = "R$642,71";
        $juros = "NENHUM";
        $Parcelamento = "7x";
        break;
    case "8":
        $valor = "R$4.499,00";
        $Vparcela = "R$562,37";
        $juros = "NENHUM";
        $Parcelamento = "8x";
        break;
    case "9":
        $valor = "R$4.499,00";
        $Vparcela = "R$499,88";
        $juros = "NENHUM";
        $Parcelamento = "9x";
        break;
    case "10":
        $valor = "R$4.499,00";
        $Vparcela = "R$449,90";
        $juros = "NENHUM";
        $Parcelamento = "10x";
        break;
    case "11":
        $valor = "R$5.632,29";
        $Vparcela = "R$512,02";
        $juros = "2,29% a.m";
        $Parcelamento = "11x";
        break;
    case "12":
        $valor = "R$5.735,32";
        $Vparcela = "R$477,94";
        $juros = "2,29% a.m";
        $Parcelamento = "12x";
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/stylesheet.css" />
    <title>LojaVirtual</title>
</head>
<body>
<header>
    <h1 id="logo">LojaVirtual</h1>
</header>
<article>
    <div>
        <h2>Nota Fiscal</h2>
        <h5>Produto: Iphone 11</h5>
        <h5>Valor: <?php echo $valor?></h5>
        <h5>Forma de pagamento: <?php echo $Parcelamento?> Valor: <?php echo $Vparcela?> </h5>
        <h5>Juros: <?php echo $juros?></h5>
    </div>
</article>
</body>
</html>