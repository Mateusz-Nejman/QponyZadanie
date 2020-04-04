<?php

namespace App\Tests;

use App\Entity\CalculatorData;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testValues()
    {
        $calculator = new CalculatorData();
        
        $calculator->setSerieCount(5);
        $this->assertEquals(3, $calculator->maximum());
        $calculator->setSerieCount(10);
        $this->assertEquals(4, $calculator->maximum());
        $calculator->setSerieCount(64);
        $this->assertEquals(13,$calculator->maximum());
    }
}
