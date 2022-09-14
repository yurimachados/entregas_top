<?php

$conn = new mysqli('localhost', 'root', '', 'entregas_top');
$conn->set_charset('utf8');

if(!$conn){
   echo 'Conexão não estabelecida ';
   die();
}

?>