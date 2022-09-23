<?php

include __DIR__ . "/../../config.php";

    header('Content-Type: application/json');

    $client = $_POST['client'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    //$pdo = new Pdo('mysql:host=localhost; dbname=entregas_top;', 'root', '');

    $stmt = $conn->prepare('INSERT INTO cliente (cliente_nome, cliente_endereco, cliente_email, cliente_telefone, senha) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param("sssss", $client, $address, $email, $phone, $password);
    

    if ($stmt->execute()) {        
        echo json_encode('Cliente cadastrado com sucesso!');
    } else {
        echo json_encode('Falha ao cadastrar cliente');
    }
