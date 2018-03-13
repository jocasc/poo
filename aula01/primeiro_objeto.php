<?php 	
echo"<pre>";

class Carro
{

public $cor;
public $marca;
public $modelo;
public $velocidade;

public function buzinar(){
	echo"Estou buzinando";
}

public function acelerar(){
	$this->velocidade += 10;
}

public function frear(){
	$this->velocidade -= 10;
}


}


$uno = new Carro();
$uno->cor = "Azul";
$uno->marca = "Fiat";
$uno->modelo = "Uno 1.0";
$uno->buzinar();
$uno->acelerar();

echo"<br>";
echo"Velocidade Atual: " . $uno->velocidade . "<br>";

$uno->acelerar();
echo"Velocidade Atual: " . $uno->velocidade . "<br>";
$uno->acelerar();
echo"Velocidade Atual: " . $uno->velocidade . "<br>";
/*
echo"<br><br>";

$gol = new Carro();
$gol->cor = "Preto";
$gol->marca = "VW";
$gol->modelo = "Gol 1.4";
var_dump($gol);

*/
 ?>