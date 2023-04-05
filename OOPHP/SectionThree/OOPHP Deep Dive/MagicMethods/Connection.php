<?php


class Connection
{
    private static $count = 0;
    private  $connectionId = 123;
    private  $ConId = 1234;

    public function __get($connectionId)
    {
        return $this->connectionId;
    }


    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        return self::$count--;
    }

    public function getCount()
    {
        return self::$count;
    }

    public function setConnection($ipAddres)
    {
        if (filter_var($ipAddres, FILTER_VALIDATE_IP)) {
            $this->connectionId = $ipAddres . '_' . self::$count;
            return;
        }
        die('Not a valid IP addres: ');
    }

    public function getConnectionId()
    {
        return $this->ConId;
    }
}
