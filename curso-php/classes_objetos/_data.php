<div class="titulo"> Data </div>

<?php

class Data
{
    public $dia = 00;
    public  $mes = 00;
    public $ano = 0;

    public function aprensetarAno() {
        print " {$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}

$dia1 = new Data();
$dia1->dia = 9;
$dia1->mes = 11;
$dia1->ano = 2023;
$dia1->aprensetarAno();

$dia2 = new Data();
$dia2->dia = 27;
$dia2->mes = 07;
$dia2->ano = 1994;
$dia2->aprensetarAno();

$dia3  = new Data();
$dia3->dia = 'undefined';
$dia3->mes =  'undefined';
$dia3->ano = 1960;
$dia3->aprensetarAno();
