<?php

include('../config.php');

$request_data = $_REQUEST;

// Consulta
$sql = "SELECT id_entrega, cliente_nome, entregador_nome, entrega_origem, entrega_destino, `status`, entrega_criada_as FROM entregas LEFT JOIN cliente ON entregas.entrega_cliente = cliente.id_cliente left join entregador ON entregas.entrega_entregador = entregador.id_entregador WHERE `status` != 3;";


// Executa query e monta array dentro da variável data com os dados da consulta
$stmt = $conn->query($sql);
while ($row = $stmt->fetch_assoc()) {
    
    $subarray = array();
    $subarray[] = $row['id_entrega'];
    $subarray[] = $row['cliente_nome'];
    $subarray[] = $row['entregador_nome'];
    $subarray[] = $row['entrega_origem'];
    $subarray[] = $row['entrega_destino'];
    $subarray[] = $row['status'];
    $subarray[] = $row['entrega_criada_as'];
    $data[] = $subarray;
}

//Conta a quantidade de registros de entregas dentro do banco de dados
$consulta = "SELECT * from entregas";
$result_consulta = mysqli_query($conn, $consulta);
$qnt_entregas = mysqli_num_rows($result_consulta);




// Saída de dados, aqui é formatada a resposta para o front
$output = array(
    'draw'=> intval($request_data['draw']), // Essa request data busca quantas
    'recordsTotal'=>$qnt_entregas,
    'recordesFiltered'=>$qnt_entregas,
    'data'=>$data,
);
// Transforma o $output em json
echo json_encode($output);






