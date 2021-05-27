<?php
declare (strict_types = 1);
use PHPUnit\Framework\TestCase;

require "C:/Users/rcastruc/OneDrive - Capgemini/Desktop/php-test/src/app/Math.php";
/**
 * @coversDefaultClass Math
 */
class MathTest extends TestCase{

    public function testFibonacci()
    {
        $math = new Math();
        $this->assertEquals(34, $math->fibonacci(9));
    }
  
    public function testFactorial()
    {
        $math = new Math();
        $this->assertEquals(120, $math->factorial(5));
    }
}
