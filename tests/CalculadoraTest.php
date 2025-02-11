<?php
 use PHPUnit\Framework\TestCase;
 use App\Calculadora;
 class CalculadoraTest extends TestCase {

        public function testSuma() { 
            $calc = new Calculadora(); 
            $resultado = $calc -> suma(4, 2); 
            $this -> assertEquals(6, $resultado); 
            $this -> assertSame(6, $resultado); 
            $this -> assertGreaterThan(5, $resultado); 
            $this -> assertNotNull($resultado); 
        } 
        public function testResta() { 
            $calc = new Calculadora(); 
            $resultado = $calc -> resta(4, 2); 
            $this -> assertEquals(2, $resultado); 
            $this -> assertGreaterThan(1, $resultado); 
            $this -> assertNotNull($resultado); 
        } 
        public function testMultiplicacion() { 
            $calc = new Calculadora(); 
            $resultado = $calc -> multiplicacion(4, 5); 
            $this -> assertEquals(20, $resultado); 
            $this -> assertGreaterThan(19, $resultado); 
            $this -> assertNotNull($resultado); 
        } 
        public function testDivision() { 
            $calc = new Calculadora(); 
            $resultado = $calc -> division(8, 2); 
            $this -> assertEquals(4, $resultado); 
            $this -> assertGreaterThan(3, $resultado); 
            $this -> assertNotNull($resultado); 
        }

    public function testRaiz() { 
        $calc = new Calculadora(); 
        $resultado = $calc -> raiz(16); 
        $this -> assertEquals(4, $resultado); 
        $this -> assertGreaterThan(3, $resultado); 
        $this -> assertNotNull($resultado); 
    }
 }
