<?php

namespace Production;

class Sum
{
    private $sum;
    public function add($number1, $number2)
    {
        $this->sum = $number1 + $number2;
    }
    public function result()
    {
        //return 2;
        return $this->sum;
        echo 'this result is:' + $this->sum;
    }

}
