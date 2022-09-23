<?php

class Cliente {

    private $conn;

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    public function getClientes(): array {

        // Busca id e nome de todos clientes cadastrados

        $listarCliente = $this->conn->query("SELECT id_cliente, cliente_nome FROM `cliente`");
        $cliente = $listarCliente->fetch_all(MYSQLI_ASSOC);
        return $cliente;            
    }
}
