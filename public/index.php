<?php

//class Pessoa
//{
//    public string $nome;
//    public int $idade;
//
//    public function Speak()
//    {
//        //Através do $this-> dá para pegar o valor da variável sem ser preciso passar por parametros.
//        echo $this->nome . " Falou que não tem " . $this->idade;
//    }
//}
//
//$rodrigo = new Pessoa();
//$rodrigo->nome = 'Rodrigo Santos';
//$rodrigo->idade = 18;
//$rodrigo->Speak();
//echo $rodrigo->nome;

//class Login
//{
//    //Private só pode ser usado dentro da classe
//    private string $email;
//    private int $senha;
//    private string $nome;
//
//    public function __construct($email, $senha, $nome)
//    {
//        $this->nome = $nome;
//        $this->setEmail($email);
//        $this->setSenha($senha);
//    }
//
//    public function getNome()
//    {
//        return $this->nome;
//    }
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    public function setEmail($e)
//    {
//        $this->email = $e;
//    }
//
//    public function getSenha()
//    {
//        return $this->senha;
//    }
//
//    public function setSenha($s)
//    {
//        $this->senha = $s;
//    }
//    public function Login()
//    {
//        if ($this->email == "teste@teste.com" and $this->senha == 123456):
//            echo "Logado com sucesso";
//        else:
//            echo "Dados inválidos";
//        endif;
//    }
//
//    //$logar = new Login('teste@teste.com', 123456, "Thiago bruno");
////$logar->Login();
////echo "<br>";
////echo $logar->getEmail()."<br>";
////echo $logar->getSenha()."<br>";
////echo $logar->getNome();
//}

//class Veiculos {
//    protected $modelo;
//    public $cor;
//    public $ano;
//
//    public function Andar()
//    {
//        return "andou";
//    }
//
//    public function Parar()
//    {
//        return "parou";
//    }
//
//    public function setModelo($m)
//    {
//        $this->modelo = $m;
//    }
//
//    public function getModelo()
//    {
//        return $this->modelo;
//    }
//}
//
//class Carro extends Veiculos
//{
//    public function nitro(){
//        return "fogo";
//    }
//
//}
//
//class Moto extends Veiculos
//{
//    public function grau()
//    {
//        return "Não dou grau em uma preciosidade";
//    }
//}
//
//$carro = new Carro();
//echo $carro->setModelo("Civic <br>");
//echo $carro->getModelo();
//echo $carro->cor = "preto <br>";
//echo $carro->ano = "2023";
//echo $carro->Andar() ."<br>";
//echo $carro->nitro()."<br>";
//echo $carro->Parar()."<br>";
//echo "<br><br><br><br>";
//
//$moto = new Moto();
//echo $moto->setModelo("MT-03 <br>");
//echo $moto->getModelo();
//echo $moto->cor = "Azul <br>";
//echo $moto->ano = "2024";
//echo $moto->Andar() ."<br>";
//echo $moto->grau()."<br>";
//echo $moto->Parar()."<br>";

abstract class Banco {
    protected float $saldo;
    protected float $limiteSaque;
    protected float $juros;

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
    public function getSaldo($s)
    {
        $this->saldo = $s;
    }
    public function setSaldo()
    {
        return $this->saldo;
    }
}

class Itau extends Banco {
//    Como as funções da Class Banco são 'abstract' eles se tornam obrigatoria na class filho;
    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "<br> Valor sacado: " . $s;
    }
    public function Depositar($d)
    {
        $this->saldo += $d;
        echo "<br> Valor depositado: " .$d;
    }
}

$itau = new Itau();
$itau->getSaldo(1000);
echo " <br> Valor na sua conta:" .$itau->setSaldo();
$itau->Sacar(500);
$itau->Depositar(100);
echo " <br> Valor Atualizado: ". $itau->setSaldo();
