<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'novoEmail@bol.com.br';
?>
<p>
    <b><strong>Nome:</strong> </b> <?= $_SESSION['nome'] ?><br>
    <b><strong>Email:</strong> </b><?= $_SESSION['email']?><br>
</p>



<p>
    <a href="/curso-php/sessao/basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="/curso-php/sessao/basico_sessao_limpar.php"> Limpar Sessão </a>
</p>