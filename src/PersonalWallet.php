<?php
namespace src\wallet;

class PersonalWallet
{
    private $income; 
    private $expense;
    

    public function __construct( $income = 0, $expense = 0 )
    {
        $this->income = $income;
        $this->expense = $expense;
    }

    public function setIncome( $amount )
    {
        $this->income = $amount;
    }

    public function setExpense( $amount )
    {
        $this->income = $amount;
    }

    public function getTotal()
    {
        if ( $this->income < 0 )
        {
            return "Income can not be negative";
        }
        if ( $this->expense < 0 )
        {
            $this->expense = \abs( $this->expense );
        }
        return $this->income - $this->expense;
    }
}