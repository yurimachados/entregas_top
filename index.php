<?php

require 'config.php';
require 'src/Entrega.php';

$pesquisa = new Entrega($conn);
$pesquisa = $pesquisa->exibirEntregas();

var_dump($pesquisa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    
</body>
</html>

