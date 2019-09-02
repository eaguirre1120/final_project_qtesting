<?php
require_once('../src/Calculadora.php');
use PHPUnit\Framework\TestCase;
use src\billetera;

final class CalculadoraTest extends  TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $this->assertEquals(
            8,
            $calc->suma(3,4)
        );
    }    
}