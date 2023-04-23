<?php

class Account
{
    public $balance;

    public function withdraw($key)
    {
        echo 'Im withdrawing: ' . $key . '<br>';
    }

    public function deposite($qb)
    {
        echo 'Im depositing: ' . $qb . '<br>';
    }

    public function GetBalance()
    {
        return $this->balance;
    }
}
