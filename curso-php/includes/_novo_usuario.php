<?php
class NovoUsuario
{
    public $novoNome;
    public $novoEmail;
    public $novoLogin;

    public function __construct($novoNome, $novoEmail, $novoLogin) {
        $this->novoNome = $novoNome;
        $this->novoEmail = $novoEmail;
        $this->novoLogin = $novoLogin;
        echo "cadastrando usuario";
        }

        function aprensentandoUsuario() {
            echo "{$this->novoNome}
                  {$this->novoEmail}
                  {$this->novoLogin}";
        }


}

$novoUser = new NovoUsuario('Thales Bernardo Nicolas Sales<br>','thales.bernardo.sales@optovac.com.br<br>','Thale Bernarndo<br>');
$novoUser->aprensentandoUsuario();
$novoUser->novoNome;
