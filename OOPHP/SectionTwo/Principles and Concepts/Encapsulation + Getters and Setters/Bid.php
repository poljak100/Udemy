<?php

class Bid
{
    private $money = 5;
    private $bid;

    public function setMinimum($amount)
    {
        if ($amount < $this->money) {
            $this->bid = $this->money;
            return;
        }
        $this->bid = $amount;
    }

    public function getMinimum()
    {
        return $this->bid;
    }
}
