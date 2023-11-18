<div class="titulo"> pratica </div>
<?php
//include "_pessoa.php";

class User{
    public function modificandoUsuario($MESSAGE = 'incluindo arquivo _pessoa.php'){
        include "_pessoa.php";
        echo "{$MESSAGE}";

    }
}

$user = new User();
$user->modificandoUsuario();