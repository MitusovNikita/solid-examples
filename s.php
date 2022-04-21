<?php
// 1)  1 класс - 1 логич сущьность
// Вынос логики логирования в отдельный класс
class Logger
{
    public function log()
    {
        echo 'logged';
    }
}

class Product
{
    private $logger;

    public function __construct(Logger $loggerObj)
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

$loggerObj = new Logger();
$product = new Product($loggerObj);
echo $product->getPrice();