<?php

// Ничего лучше на придумал. Проблемы с "творчеством" ((

class SomeClass {

    public function some(){
        $array = [];
        $arrayLenght = random_int(1, 1000);
        
        for( $i = 0 ; $i < $arrayLenght ; $i++){
             $num = random_int(1, 1000);
             array_push($array, $num);
        }
        return array_sum($array);
    }
}
;