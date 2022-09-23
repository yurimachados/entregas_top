<?php

require '../config.php';
include '../src/Model/Cliente.php';


$clients = new Cliente($conn);
echo json_encode($clients->getClientes());

