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
        $this->me();
    }

    public function guest()
    {
        echo 'Guess : ' . $this->guest . '<br>';
    }

    public function host()
    {
        echo 'Guess: ' . $this->host . '<br>';
    }

    public function me()
    {
        echo 'Ola: ' . $this->me . '<br>';
    }
}
