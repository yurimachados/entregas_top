<?php

class Entrega {

    private $conn;

    private function __construct (mysqli $conn) {
        $this->conn = $conn;
    }

    public function getEntrega(): array {

        $query = $this->conn->query("SELECT * FROM `entregas`");

        $entregas = $query->fetch_all(MYSQLI_ASSOC);

        return $entregas;
    }

    public function getEntregaPorId (int $id) {

        $selecionaEntrega = $this->conn->prepare("SELECT * FROM `entregas` WHERE id=?;");
        $selecionaEntrega->bind_param("s", $id);
        $selecionaEntrega->execute();
        $entrega = $selecionaEntrega->get_result()->fetch_assoc();

        return $entrega;
    }


}