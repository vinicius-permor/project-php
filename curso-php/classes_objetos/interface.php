<div class="titulo"> Interface </div>

<?php
interface Animal {
    function respirar();
}
interface Canino{
    function latir(): string;
}

interface Miar
{
    function miando(): string;
}

interface Correndo
{
     function correr(): string;
}
class Cachorro implements Animal, Canino, Correndo {
    function respirar() {
        return "irei usar oxigenio! <br>";
    }

    function latir(): string
    {
        return "o cachorro ira latir<br>";
    }
     function correr(): string{
        return "cachorro está correndo";
    }

}

class Gato implements Animal, Miar, Correndo {
    function respirar() {
        return "irei usar oxigeio! <br>";
    }
    function miando(): string {
        return "o gato vai miar<br>";
    }
     function correr(): string {
        return "gato está correndo";
    }

}

$novo_Animal = new Cachorro();
echo $novo_Animal->respirar(), '<br>';
echo $novo_Animal->latir(), '<br>';
echo $novo_Animal->correr(), '<br>';

print "------------<br>";

$novo_gato = new Gato();
echo $novo_gato->respirar() , '<br>';
echo $novo_gato->miando(), '<br>';
echo $novo_gato->correr(), '<br>';