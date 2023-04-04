<?php

define('YEAR', 2023);

class Calendar
{
    public  $name;
    public $weeks = 365 * 7;
    public $year = YEAR;

    public static $days = '28';


    public const MONTHS_IN_YEAR = 12;

    public function getMonths()
    {
        return self::MONTHS_IN_YEAR;
    }
}

$calendar = new Calendar();
print $calendar->name = 'Dino' . '<br>';
print Calendar::$days . '<br>';
print Calendar::MONTHS_IN_YEAR . '<br>';
print_r($calendar->year . PHP_EOL);
