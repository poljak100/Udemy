<?php

require_once 'CheckingAccount.php';


class PremiumCheckingAccount extends CheckingAccount
{
    public $minimumbalance = 5000;
}
