<?php

class Reservation
{
    private $guest = 'Im guest';
    private $host = 'Im host';
    private $me = ' Me';

    public function cancel()
    {

        $this->guest();
        $this->host();
        echo 'LOTR ' . '<br>';
        $this->me();
    }

    public function guest()
    {
        echo 'Guess  Im: ' . $this->guest . '<br>';
    }

    public function host()
    {
        echo 'Guess  Im: ' . $this->host . '<br>';
    }

    public function me()
    {
        echo 'Ola: ' . $this->me . '<br>';
    }
}
