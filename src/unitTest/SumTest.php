<?php


use PHPUnit\Framework\TestCase;
use Production\Sum;
class SumTest extends TestCase{
    
    /** @test */
    public function sum_one_add_one(){

       //Setup
       $sum = new Sum;
       // Action
       $sum->add(1,1);
       // Checks / Assertions
        
      $this->assertEquals(2, $sum->result());
    }
}