<?php

class Pessoa
{
    public string $nome;
    public int $idade;

    public function Speak()
    {
        //Através do $this-> dá para pegar o valor da variável sem ser preciso passar por parametros.
        echo $this->nome . " Falou que não tem " . $this->idade;
    }
}

$rodrigo = new Pessoa();
$rodrigo->nome = 'Rodrigo Santos';
$rodrigo->idade = 18;
$rodrigo->Speak();
echo $rodrigo->nome;
