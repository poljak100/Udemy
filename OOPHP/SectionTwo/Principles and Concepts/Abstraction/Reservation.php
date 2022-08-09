<?php

class Reservation
{
    private $host = 'Host class';
    private $guest = 'guest class';

    public function cancel()
    {
        $this->sendCancelNotification();
        $this->refundGuest();
    }

    private function sendCancelNotification()
    {
        echo 'Sending notification to' . $this->host . '<br>';
    }

    private function refundGuest()
    {
        echo 'Refunding' . $this->guest . '<br>';
    }
}
