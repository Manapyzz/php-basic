<?php

class BankAccount
{
    protected int $balance;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function withdraw(int $amount)
    {
        if ($amount > $this->balance)
        {
            throw new Exception('Not enough money on this account');
        }

        $this->balance -= $amount;
    }

    public function deposit(int $amount)
    {
        $this->balance += $amount;
    }
}

//$bankAccount = new BankAccount(2000);
//
//var_dump($bankAccount);
//
//try {
//    $bankAccount->withdraw(300);
//} catch (Exception $e)
//{
//    echo $e->getMessage();
//}
//
//var_dump($bankAccount);
//
//$bankAccount->deposit(10000);
//
//var_dump($bankAccount);