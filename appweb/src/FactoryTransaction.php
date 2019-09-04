<?php
namespace src\wallet;
require_once('PersonalWallet.php');
use src\wallet\PersonalWallet;

class FactoryTransaction
{
    public static function getTransanctions()
    {
        $walletTransaction = [];
        $transanction = [];
        $balance = 0;
        //Incomes
        for( $i = 0; $i < 5 ; $i++ )
        {
            // $walletIncome = new PersonalWallet(rand(5,200),0);
            $amount =  rand(100, 2000);
            $balance = $balance + $amount;
            $transanction = [
                'Ingreso' => $amount,
                'Egreso' => 0
            ];
            $walletTransaction['walletTransactions'][] = $transanction;
        }
        //Expense
        for( $i = 0; $i < 5 ; $i++ )
        {
            // $walletIncome = new PersonalWallet(rand(5,200),0);
            $amount =  rand(100, 1000);
            $balance = $balance - $amount;
            $transanction = [
                'Ingreso' => 0,
                'Egreso' => $amount
            ];
            $walletTransaction['walletTransactions'][] = $transanction;
        }
        $walletTransaction['walletBalance'] = $balance;
        return $walletTransaction;
    }
}