<?php
namespace Production;

class Substract {
    private $minus;
   public function Minus($number1,$number2){
   $this->minus = $number1 - $number2;
   }
   public function result(){
     return $this->minus;
   }
}