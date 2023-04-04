<?php


class Connection
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public function getCount()
    {
        return self::$count;
    }
}
