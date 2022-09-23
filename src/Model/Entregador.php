<?php

class Entregador {

    private $conn;

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    public function getEntregadores(): array {

        // Busca id e nome de todos entregadores cadastrados

        $listarEntregadores = $this->conn->query("SELECT id_entregador, entregador_nome FROM `entregador`");
        $entregadores = $listarEntregadores->fetch_all(MYSQLI_ASSOC);
        return $entregadores;            
    }

    public function getEntregadorPorId (int $id) {

        $selecionaEntregador = $this->conn->prepare("SELECT * FROM `entregador` WHERE id=?;");
        $selecionaEntregador->bind_param("s", $id);
        $selecionaEntregador->execute();
        $entregador = $selecionaEntregador->get_result()->fetch_assoc();

        return $entregador;
    }
}
