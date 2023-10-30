<div class="titulo"> funções {escopo} </div>

<?php
function messages() {
    print"ola ";
    print "até a proxima<br>";
}
messages();

$variavel = 1;
function value() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";

}
echo "antes: $variavel <br>";
value();
echo "Depois $variavel <br>";

 function turnValue() {
     global $variavel;
     $variavel = 3;
     echo "Durante a função: $variavel <br>";
 };

 echo "Antes: $variavel <br>";
turnValue();
echo "Depois: $variavel <br>";


var_dump(turnValue());