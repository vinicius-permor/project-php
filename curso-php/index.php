<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Roboto+Mono:wght@100&family=Rubik:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="recursos/css/estilo.css" />
    <title>Curso PHP</title>
  </head>

  <body>
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
      <div class="conteudo">
          <?php require_once "menu.php.html"?>
      </div>
    </main>
    <footer class="rodape">
      PROJETOS PARA TREINAMENTO
      <?= date('Y'); ?>
    </footer>
  </body>
</html>
