<?php

require '../config.php';
include '../src/Model/Entregador.php';


$fleets = new Entregador($conn);
echo json_encode($fleets->getEntregadores());


