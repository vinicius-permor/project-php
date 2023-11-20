<div class="titulo"> pratica </div>
<?php
//include "_pessoa.php";

class User{
    public function modificandoUsuario($MESSAGE = 'incluindo arquivo _pessoa.php'){
        ini_set('display_errors',1);
        include '_novo_usuario.php';
        include "_pessoa.php";
        echo "{$MESSAGE}";

    }
}

$user = new User();
$user->modificandoUsuario();