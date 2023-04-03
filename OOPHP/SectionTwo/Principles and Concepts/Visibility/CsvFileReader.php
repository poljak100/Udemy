<?php

require_once 'FileReader.php';


class csv extends FileReader
{

    public $nesto = 'nesto';
    public function getNesto()
    {
        return $this->nesto;
    }
}
