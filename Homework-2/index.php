<?php

abstract class Product {
    
    protected $goods = [];
    protected $finalPrice;
    protected $income;
    
    public function __construct(array $goods){
        $this->goods = $goods;
        $this->finalPrice = $this->getPrice($goods);
        $this->income = $this->income($this->getPrice($goods), $this->$goods['numberOfSales'];)
    }
    
    abstract protected function getPrice(array $goods);

    protected function income(float $price, int $amount){
        return $price * $amount;
    }
}

class PieceGoods extends Product {
    
    protected function getPrice(array $goods): float
    {
        return $goods['price'];
    }
}

class DigitalGoods extends Product {
    
    protected function getPrice(array $goods): float 
    {
        return $goods['price'] / 2;
    }
}

class GoodsByWeight extends Product {
    
    protected function getPrice(array $goods): float
    {
        return $goods['price'] * $goods['weight'];
    }
}

//////////////////////////////////////////////////////////////////////////

trait Singleton {
    
    static protected $self;

    private function __construct(){

    }

    public static function getInstance(){

        if (self::$self === null) {
            self::$self = new self();
        }

        return self::$self;
    }
}

class A {
    use Singleton;
}

$a = A::getInstance();
var_dump($a);

?>
