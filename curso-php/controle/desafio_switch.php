<div class="titulo">Desafio Switch</div>



<form action="#" method="post">
  <input type="text" name="param">
  <select name="conversao" id="conversao">
    <option value="km-milha"> KM > milha</option>
    <option value="milha-km">Milha > km</option>
    <option value="metro-km">Metro > km</option>
    <option value="cel-fah">Celsius > Farenheit</option>
    <option value="fah-cel">fahrenheit > Celsius</option>
  </select>
  <button>Caucular</button>
</form>

<style>
  form> * {
    font-size: 1.8rem;
  }
</style>

<?php
const fator_km_milha = 0.621371;
const fator_metro_km = 1000;
const fator_cel_fah = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
  case 'km-milha':
    $distancia = $param * fator_km_milha;
    $mensagem = "$param km = $distancia Milhas";
    break;
  case 'milha-km':
    $distancia = $param / fator_km_milha;
    $mensagem = "$param Milhas = $distancia km";
    break;
  case 'metro-km':
    $distancia = $param / fator_metro_km;
    $mensagem = "$param Metro = $distancia km";
    break;
  case 'km-metro':
    $distancia = $param / fator_metro_km;
    $mensagem = "$param Metro = $distancia km";
    break;
  case 'cel-fah':
    $conversao = $param * fator_cel_fah + 32;
    $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
    break;
  case 'fah-cel':
    $conversao = ($param - 32) / fator_cel_fah;
    $mensagem = "{$param}° farenheit = {$conversao}° Celsius";
  default:
  $mensagem = "nenhum valor calculado";
}
print "<p>$mensagem</p>";
