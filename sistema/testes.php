<?php

require '../config.php';
include '../src/Entregador.php';

$teste = new Entregador($conn);

echo json_encode($teste->getEntregadores());

