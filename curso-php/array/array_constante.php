<div class="titulo">Array Constante</div>


<?php
const FRUTAS = array('laranja', 'abacaxi');
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno" , "Ford" => "Fiesta"];
print '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
print '<br>' . CIDADES[1];
