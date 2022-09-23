<?php

require '../config.php';


    header('Content-Type: application/json');

    $cliente = $_POST['cliente'];
    $entregador = $_POST['entregador'];
    $coleta = $_POST['coleta'];
    $entrega = $_POST['entrega'];


    //$pdo = new Pdo('mysql:host=localhost; dbname=entregas_top;', 'root', '');

    $stmt = $conn->prepare('INSERT INTO entregas (entrega_cliente, entrega_entregador, entrega_origem, entrega_destino) VALUES (?, ?, ?, ?)');
    $stmt->bind_param("iiss", $cliente, $entregador, $coleta, $entrega);


    if ($stmt->execute()) {
        return $cliente;
    } else {
        echo json_encode('Falha ao cadastrar cliente');
    }
