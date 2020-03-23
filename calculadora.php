<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Calculadora {
    
    private $n;
    public function __construct($numeroInicial) {
        $this->n = $numeroInicial;
    }
//    public function somar($n1, $n2) {
//        return $n1 + $n2;
//    }
//    
//    public function subtrair($n1, $n2) {
//        return $n1 - $n2;
//    }
//    
//    public function multiplicar($n1, $n2) {
//        return $n1 * $n2;
//    }
//    
//    public function dividr($n1, $n2) {
//        return $n1 / $n2;
//    }
    public function somar($n1) {
        $this->n += $n1; 
        return $this;
    }
    
    public function subtrair($n1) {
        $this->n -= $n1; 
        return $this;
    }
    public function multiplicar($n1) {
        $this->n *= $n1; 
        return $this;
    }
    public function dividir($n1) {
        $this->n /= $n1; 
        return $this;
    }
    public function resultado() {
         
        return $this->n;
    }
}

$calc = new Calculadora(10);

//echo "2 + 20 = ".$calc->somar(2, 20)."<br/>";
$calc->somar(2)->somar(10)->subtrair(5);
$resultado = $calc->resultado();

echo "Resultado é: ".$resultado;