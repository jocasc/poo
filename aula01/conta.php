<?php 

//classe conta
//propriedades numConta, saldo, titular;
//metodos sacar, depositar, verSaldo, verTitular;


class Conta
{
public $numConta;
public $saldo;
public $titular;



public function sacar($valor)
{
	$this->saldo -= $valor;
}

public function depositar($valor)
{
	$this->saldo += $valor;
}

public function verSaldo()
{
	echo"<br>Seu saldo é: $this->saldo";
}

public function verTitular()
{
	echo"O titular da conta é: $this->titular";
}

}


$obj1 = new Conta();
$obj1->saldo = 50;



$obj1->sacar(10);

$obj1->verSaldo();
$obj1->depositar(35);
$obj1->verSaldo();



 ?>