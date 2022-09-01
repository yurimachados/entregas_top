<?php

class Entrega 
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirEntregas()
    {

        $busca = $this->mysql->query("SELECT * FROM `entregas`");

        $entregas = $busca->fetch_all(MYSQLI_ASSOC);

        return $entregas;
    }


}