<?php

use PHPUnit\Framework\TestCase;

require_once basename(__DIR__) . '/../vendor/autoload.php';
require_once 'AnyEntity.php';


class AnyEntityTest extends TestCase {

    public function testSome(){

        $obj = new SomeClass();
        
        $this->assertIsInt($obj->some());

    }
}