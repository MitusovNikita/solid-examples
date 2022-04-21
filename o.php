<?php
// 2) Принцип открытости / закрытости
// расширение функционал лог через интерфейс

interface ILogger
{
    public function log();
}

class FileLogger implements ILogger
{
    private function saveToFile()
    {
        echo 'saved to file';
    }

    public function log()
    {
        $this->saveToFile();
    }
}

class DbLogger implements ILogger
{
    private function saveToDb()
    {
        echo 'saved to db';
    }

    public function log()
    {
        $this->saveToDb();
    }
}

class Product2
{
    private $logger;

    public function __construct(ILogger $loggerObj)
    {
        $this->logger = $loggerObj;
    }

    public function getPrice()
    {
        $price = 100;

        $this->logger->log();
        return $price;
    }
}

$loggerObj = new DbLogger();
$product = new Product2($loggerObj);
echo $product->getPrice();