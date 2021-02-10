<?php

use PHPUnit\Framework\TestCase;
use Production\Substract;

class SubtractionTest extends TestCase
{

    /** @test */
    public function substract_one_minus_three()
    {

        //Setup
        $substract = new Substract;
        // Action
        $substract->Minus(1, 3);
        // Checks / Assertions
        $this->assertEquals(2, $substract->result());
    }
}
