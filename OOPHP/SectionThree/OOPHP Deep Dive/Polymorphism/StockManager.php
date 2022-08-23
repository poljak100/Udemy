<?php

class StockManager
{
    public function upateStockFromFile(string $filename, CsvFileReader $csvFileReader)
    {
        $stockItems = $csvFileReader->readFileAsAssociativeArray($filename);
    }
}
