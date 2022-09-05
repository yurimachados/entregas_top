<?php

    header('Content-Type: application/json');

    $client = $_POST['client'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $pdo = new Pdo('mysql:host=localhost; dbname=entregas_top;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO cliente (cliente_nome, cliente_endereco, cliente_email, cliente_telefone, senha) VALUES (:cl, :ad, :em, :ph, :pa)');
    $stmt->bindValue(':cl', $client);
    $stmt->bindValue(':ad', $address);
    $stmt->bindValue(':em', $email);
    $stmt->bindValue(':ph', $phone);
    $stmt->bindValue(':pa', $password);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Cliente cadastrado com sucesso!');
    } else {
        echo json_encode('Falha ao cadastrar cliente');
    }
