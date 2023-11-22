<div class="titulo"> Basico </div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome Completo']) {
    $_SESSION['nome Completo'] = 'Marcus Vincius<br>';
}
print_r($_SESSION);

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'ma.vinicius.moraes@gmail.com<br>';
}
print_r($_SESSION);

if(!$_SESSION['ID:']) {
    $_SESSION['ID:'] = 'mvpdmoraes<br>';
}
print_r($_SESSION);

?>

<p>
    <a href='/curso-php/sessao/basico_sessao_alterar.php'> Alterar sessão</a>
</p>
