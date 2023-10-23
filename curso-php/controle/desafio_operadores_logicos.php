<div class="titulo">Desafio operadores Logicos</div>

<!--
  Dois trabalhos -> terça~e quinta!
  - se os dois forem executados -> TV 50' e Sorvete
  - se aprenas um for executado
-->


<form action="#" method="post">


  <div>
    <label for="t1">Trabalho 1 (terça)</label>
    <select name="t1" id="t1">
      <option value="1">Executando</option>
      <option value="0">Não Executando</option>
    </select>
  </div>
  <div>
    <label for="t2">Trabalho 2 (Quinta-Feira)</label>
    <select name="t2" id="t1">
      <option value="1">Executando</option>
      <option value="0">Não Executando</option>
    </select>
  </div>
  <button>Executar</button>
</form>

<style>
  button,
  select {
    font-size: 1.8rem;
  }
</style>


<?php
if (isset($_POST['t1'])  && isset($_POST['t2'])) {

  $t1 = $_POST['t1'] === '1';
  $t2 = !!$_POST['t2'];
  $tv = "";
  $sorvete = false;

  if ($t1 and $t2) {
    $tv = '50 polegadas';
  }

  if ($t1 && $t2) {
    $tv = '32';
  }

  if ($t1 or $t2) {
    $sorvete = true;
  }

  if ($tv) {
    $resultado = "vamos comprar uma tv de  $tv";
  } else {
    $resultado = "sem tv dessa vez";
  }

  $saudavel = !$sorvete;

  if (!$sorvete) {
    $resultado .= '<br>Estamos mais saudaveis!<br>';
  } else {
    $resultado .= '<br>Sorvete liberado!!';
  }

  echo "<p>$resultado</p>";
}
