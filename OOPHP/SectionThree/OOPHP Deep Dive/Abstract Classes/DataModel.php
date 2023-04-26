<?php

abstract class DataModel
{
    protected string $tableName;
    protected  $host;


    public function save()
    {
        echo ('Saving data to table:' . $this->tableName) . '<br>';
        echo ('Saving :' . $this->host) . '<br>';
    }
}
