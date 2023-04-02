<?php
require_once 'Account.php';
class CAccount extends Account
{
    public function transfer($amount)
    {
        echo 'Im transfering: ' . $amount . '<br>';
    }
}
