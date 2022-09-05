<?php

    header('Content-Type: application/json');

    $fleet = $_POST['fleet'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $pdo = new Pdo('mysql:host=localhost; dbname=entregas_top;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO entregador (entregador_nome, entregador_email, entregador_telefone, senha) VALUES (:fl, :em, :ph, :pa)');
    $stmt->bindValue(':fl', $fleet);
    $stmt->bindValue(':em', $email);
    $stmt->bindValue(':ph', $phone);
    $stmt->bindValue(':pa', $password);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Entregador cadastrado com sucesso!');
    } else {
        echo json_encode('Falha ao cadastrar entregador');
    }
