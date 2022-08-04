<?php


class Account
{
    public $accountNumber;
    public $blanace;

    public function deposit($amount)
    {
        echo 'depositing ' . $amount . '<br>';
    }

    public function withdraw($amount)
    {
        echo 'withdrawing ' . $amount .  '<br>';
    }

    public function getbalance()
    {
        return $this->balance;
    }
}
