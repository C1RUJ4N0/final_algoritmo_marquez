<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA</title>
</head>
<body>
<form action="ExamenFinalTSAS.php" method="post">
        <div class="container">
            <input type="number" name="Iva" 
            placeholder="Ingresar la cantidad de dinero"> <br><br>
            <input type="submit" value="Calcular IVA">
        </div>
        </body>
<?php
if (!empty($_POST)) {
    $num = $_POST ("IVA");
    if ($num * 0.21) {
        echo "El IVA";
    } 
     }else{
        echo "No se ingreso un monto correcto";
?>
