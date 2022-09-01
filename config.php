<?php

$conn = new mysqli('localhost', 'root', '', 'entregas_top');
$conn->set_charset('utf8');

if($conn == true) {
    echo 'Conexão estabelecida ';
} else {
   echo 'Conexão não estabelecida ';
}

?>