<?php
require_once('../src/PersonalWallet.php');

use PHPUnit\Framework\TestCase;
use src\wallet\PersonalWallet;

final class WalletTest extends TestCase
{
    public function testWalletTotalNegative()
    {
        //Context
        $wallet = new PersonalWallet();
        //input
        $wallet->setIncome(30);
        $wallet->setExpense(40);
        //Outcome expected
        $expected = -10;
        $this->assertEquals(
            $expected,
            $wallet->getTotal()
        );
    }

    public function testWalletIncomeNegative()
    {
        $wallet = new PersonalWallet();
        $wallet->setIncome(-10);
        $wallet->setExpense(40);
        $this->assertEquals(
            "Income can not be negative",
            $wallet->getTotal()
        );
    }

    public function testWalletExpenseNegative()
    {
        $wallet = new PersonalWallet();
        $wallet->income = 10;
        $wallet->expense = -5;
        $this->assertEquals(
            5,
            $wallet->getTotal()
        );
    }
}