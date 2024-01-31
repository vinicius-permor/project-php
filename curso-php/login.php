<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
    $usuarios =[
        [
            "nome" => "Marcus Vinicius",
            "email"=> "vinicius@gmail.com",
            "senha"=> "123",
    ],
    [
      "nome"=> "Vinicius de Moraes",
      "email"=> "marcus@gmail.com",
      "senha"=> "456",
    ],
    ];

    foreach ($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido &&  $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time()  + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }

        if (!$_SESSION['usuario']){
            $_SESSION['erros'] = ['Usuario/Senha inválido'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Roboto+Mono:wght@100&family=Rubik:wght@300&display=swap"
      rel="stylesheet"
    />
      <link rel="stylesheet" href="recursos/css/estilo.css" />
      <link rel="stylesheet" href="recursos/css/login.css" />
    <title>Curso PHP</title>
  </head>

  <body class="login">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Seja bem vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
      PROJETOS PARA TREINAMENTO
      <?= date('Y'); ?>
    </footer>
  </body>
</html>
