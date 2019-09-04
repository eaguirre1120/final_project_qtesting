<?php
require_once('../FactoryTransaction.php');
use src\wallet\FactoryTransaction;

$transacions = FactoryTransaction::getTransanctions();
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
    if ( isset( $_REQUEST['income'] ) )
    {
        $income = (float) $_REQUEST['income'];
        $transacions['walletTransactions'][] = [
            'Ingreso' => $income,
            'Egreso' => 0
        ];
        $transacions['walletBalance'] = $transacions['walletBalance'] + $income;
        header('HTTP/1.0 201 Created');
        header('Content-Type: application/json');
        echo json_encode( $transacions, JSON_PRETTY_PRINT );
    }
    else 
    {
        header('HTTP/1.0 400 Bad Request');
        echo "El parámetro income es requerido."; 
    }
}
else if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    header('HTTP/1.0 200 Ok');
    header('Content-Type: application/json');
    echo json_encode( $transacions, JSON_PRETTY_PRINT );
}