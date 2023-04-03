<?php

class Account
{
    public $balance;

    public function withdraw($key)
    {
        echo 'Im withdrawing: ' . $key . '<br>';
    }

    public function deposite($amount)
    {
        echo 'Im depositing: ' . $amount . '<br>';
    }

    public function GetBalance()
    {
        return $this->balance;
    }
}
