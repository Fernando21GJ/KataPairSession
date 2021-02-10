<?php

use PHPUnit\Framework\TestCase;
use Production\Sum;

class PruebaTest extends TestCase{
    
    /** @test */
    public function check_that_one_is_one(){

       //Setup
       $sum = new Sum;
       // Action
       $sum->add(1,1);
       // Checks / Assertions
        
      //$this->assertEquals(1,1);
      $this->assertEquals(2, $sum->result());
    }
}