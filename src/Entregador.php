<?php

class Entregador {

    private $conn;

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    public function getEntregadores() {

        $listarEntregadores = $this->conn->query("SELECT id_entregador, entregador_nome FROM `entregador`");
        $entregadores = $listarEntregadores->fetch_all(MYSQLI_ASSOC);
        return $entregadores;
        // $result = extract($entregadores);

        // var_dump($result);
            
    }

    public function getEntregadorPorId (int $id) {

        $selecionaEntregador = $this->conn->prepare("SELECT * FROM `entregador` WHERE id=?;");
        $selecionaEntregador->bind_param("s", $id);
        $selecionaEntregador->execute();
        $entregador = $selecionaEntregador->get_result()->fetch_assoc();

        return $entregador;
    }
}
