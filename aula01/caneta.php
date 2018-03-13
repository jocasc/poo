<?php 

// Criar classe Caneta
// Propriedades cor, marca
// Criar um objeto com cor = vermelha e marcar Bic
// Criar um objeto com cor = azul e marca Compactor


// criar um metodo chamado escrever, este metodo escreve algo na tela;
// criar propriedade tampada (boolena)
// metodo destampar - atribuir o valor false para a propriedade tampada
// metodo tampar - atribuir o valor true para a propriedade tampada

echo"<pre>";

class Caneta
{
public $cor;
public $marca;
public $estado;

public function escrever($texto){
echo"$texto";
}

public function tampar(){
	$this->estado = false;
}

public function destampar(){
	$this->estado = true;
}

}

$obj1 = new Caneta();
$obj1->cor = "vermelha";
$obj1->marca = "Bic";
$obj1->escrever("escrevendo qualquer coisa!");

$obj1->tampar();
echo"<br>Estado da caneta = ".$obj1->estado;
$obj1->destampar();
echo"<br>Estado da caneta = ".$obj1->estado;


