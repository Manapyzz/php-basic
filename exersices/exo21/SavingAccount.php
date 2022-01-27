<?php

require_once 'BankAccount.php';

class SavingAccount extends BankAccount
{
    private int $interestRate;

    public function __construct(int $balance, int $interestRate)
    {
        $this->interestRate = $interestRate;
        parent::__construct($balance);
    }

    public function addInterest()
    {
        $this->balance += $this->balance * ($this->interestRate/100);
    }
}

$savingAccount = new SavingAccount(1000, 10);

var_dump($savingAccount);

$savingAccount->addInterest();

var_dump($savingAccount);


