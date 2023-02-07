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

class Login
{
    //Private só pode ser usado dentro da classe
    private string $email;
    private int $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->email = $e;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($s)
    {
        $this->senha = $s;
    }
    public function Login()
    {
        if ($this->email == "teste@teste.com" and $this->senha == 123456):
            echo "Logado com sucesso";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login();
$logar->setEmail('teste@teste.com');
$logar->setSenha(123456);
$logar->Login();
$logar->getEmail();
$logar->getSenha();
