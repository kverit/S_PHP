<?php

class goodsCategory { // "Транспорт", "Одежда", "Инструменты" .

    protected $categoryName;
    protected $popularity; // Популярность по количуству просмотров
    protected $discounts;
    
    protected function __construct($categoryName = null, $popularity = null, $discounts = null){
        $this->categoryName = $categoryName;
        $this->popularity = $popularity;
        $this->discounts = $discounts;
    }
    
    public function addToFavourites(){ // Добавить категорию в "Избранное".
        
    }
    
    protected function filter(){ // Фильтрация по заданным параметрам
        
    }
    
}

class subCategory extends goodsCategory{ // для категории "Транспорт": "Автомобили", "Мотоциклы", "Велосипеды".

    protected $subCategoryName;
    protected $numberOfGoods;
    protected $brands;
    
    protected function __construct($subCategoryName = null, $numberOfGoods = null, $brands = []){
        $this->subCategoryName = $subcategoryName;
        $this->numberOfGoods = $numberOfGoods;
        $this->brands = $brands;
    }
    
}

//Дан код. Что он выведет на каждом шаге? Почему?
class A {
    public function foo() {
        static $x = 0; // Статичная переменная функции класса А - общая для всего класса: 
                       // будет вызываться у всех объектв этого класса
        echo ++$x;
    }
}

$a1 = new A(); 
$a2 = new A();  
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4 Значение переменной увеличивается т.к. объекты $a1 и $a2 имеют одну область памяти, 
            //   и переменная $x принадлежит классу, а не отдельным объектам  


//Немного изменим код. Объясните результаты в этом случае
class A {
    public function foo() {
        static $x = 0;
        echo ++$x; 
    }
}

class B extends A {
    public function foo() {
        static $x = 0; // Переменная пересоздается и теперь относится к классу В
        echo ++$x;
    }
}

$a1 = new A(); 
$b1 = new B();
$a1->foo(); // 1 $x класса A
$b1->foo(); // 1 $x класса B
$a1->foo(); // 2 $x класса A
$b1->foo(); // 2 $x класса B


// Что он выведет на каждом шаге? Почему?
// То же самое что и в предыдущем задании, объект класса можно создавать без скобок 
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A {
}

$a1 = new A;
$b1 = new B;
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2

