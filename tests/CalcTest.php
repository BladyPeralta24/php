<?php
// use PHPUnit\Framework\TestCase;
// use App\Classes\Validaciones;

// class CalcTest extends TestCase
// {
//     public function test_ValidarNif()
//     {
//         $dni = new Validaciones;
//         $result = $dni->validarNif('78848952F');
//         $this->assertEquals(TRUE, $result);
        
//     }

// }

    use PHPUnit\Framework\TestCase;
    use App\Classes\Funciones\realizar_calculo;
    use App\Classes\Funciones\suma_elementos;
    use App\Classes\Funciones\calculadora;
    class CalcTest extends PHPUnit\Framework\TestCase
    {
        public function testRealizarNumero()
        {
            $this->assertEquals(15, realizar_calculo([1,2,3,4,5], 1));
            $this->assertEquals([1,2,3,4,5], realizar_calculo([3,1,4,2,5], 2));
            $this->assertEquals(false, realizar_calculo(['hola',1,3,5,3,2], 1));
            $this->assertEquals(['adios', true, 1, 'hola'], realizar_calculo(['hola', 1, true, 'adios'], 3));
        }

        public function testRealizarCalculo()
        {
            $this->assertEquals(5, calculadora(2,3,'+'));
            $this->assertEquals(6, calculadora(9,3,'-'));
            $this->assertEquals(100, calculadora(5,20,'*'));
            $this->assertEquals(2, calculadora(4,2,'/'));
            $this->assertEquals(false, calculadora(2,3,'hola'));
        }
    }