<?php

class ApiDados
{
    public $nomeComleto;
    public $email;
    public $telefone;
    public $login;
    function __construct($nomeComleto, $email, $telefone, $login)
    {
        $this->nomeComleto = $nomeComleto;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->login = $login;
   }
        function mostrandoDados() {
            echo "{$this->nomeComleto}
                  {$this->email}
                  {$this->telefone}
                  {$this->login}";
        }

   }

$usuario = new ApiDados(
    "Marcus Vinicius Pereria de Moraes<br>",
    "ma.vinicius.moraes@gemial.com<br>",
    "14222131351<br>",
    "mvPereira<br>" );
$usuario->mostrandoDados();
