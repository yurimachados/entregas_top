<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$bdname = 'entregas_top';

$conn = mysqli_connect($servername, $username, $password, $bdname);

// Receber a requisição da pesquisa
$requestData = $_REQUEST;

$columns = array(
    array( '0' => 'order_id'),
    array( '1' => 'order_client'),
    array( '2' => 'order_fleet'),
    array( '3' => 'order_originAddress'),
    array( '4' => 'order_destinyAddress'),
    array( '5' => 'order_status')
);

// Obter registro de número total de registros
$result_order = 'SELECT * FROM order';
$resultado_order = mysqli_query($conn, $result_order);
$qnt_orders = mysqli_num_rows($resultado_orders);

// Obter os dados a serem apresentados
$result_orders = 'SELECT * FROM order 1=1';
$resultado_orders = mysqli_query($conn, $result_orders);
$totalfiltrado = mysqli_num_rows($resultado_orders);

//Ordenar o resultado
$result_orders.=" ORDER BY ". $columns[$requestData['order'][0]['columns']]. "   ".$requestData['order'][0]
['dir'][0]['dir']." LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_orders=mysqli_query($conn, $resultado_orders);

// Ler e criar array de dados
$dados = array();
while($row_orders = mysqli_fetch_array($resultado_) ){
    $dados = array();
    $dados[] = $row_orders['order_id'];
    $dados[] = $row_orders['order_client'];
    $dados[] = $row_orders['order_fleet'];
    $dados[] = $row_orders['order_originAddress'];
    $dados[] = $row_orders['order_destinyAddress'];
    $dados[] = $row_orders['order_status'];
    
    $dados[] = $dados;
};

$json_data = array(
    "draw" => intval( $requestData['draw']),
    "recordsTotal" => intval( $qnt_orders),
    "recordsFiltered" => intval( $totalfiltrado),
    "data" => $dados
);

echo json_encode($json_data);