<?php

abstract class Caligrafia
{
    public abstract function funcaoDe_lapis();
    public abstract function funcaoDe_caneta();
    public abstract function funcaoDe_pincel($parametro = 'usar somente com quadro de pintura');


}

abstract class MaterialDe_uso extends Caligrafia {
    public function funcaoDe_caneta()
    {
        echo "usando caneta , no caderno<br>";
    }
    public function funcaoDe_lapis()
    {
        echo "usando lapis somente com caderno<br>";
    }
    public function funcaoDe_pincel($parametro = 'usar somente com quadro de pintura')
    {
        echo "usando pincel usado,  <br>";
    }
    public abstract function usandoFerramenta();

}

class UsandoFerramenta extends MaterialDe_uso
{
    public function funcaoDe_lapis() {
        echo "agora estou usando a função de lapis para escrever no caderno de desenho<br>";
        parent::funcaoDe_lapis();

    }
    public function funcaoDe_caneta()
    {
        echo "usando caneta para fazer anotações no caderno<br>";
        parent::funcaoDe_caneta(); // TODO: Change the autogenerated stub
    }
    public function funcaoDe_pincel($parametro = 'usar somente com quadro de pintura')
    {
        echo "usuando pincel novo para fazer uma pintura no quadro , $parametro<br>";
        parent::funcaoDe_pincel();
    }

    public function usandoFerramenta()
    {
        echo "usando ferramenta qualquer, usando criatividade para criação de arte<br>";
        parent::funcaoDe_pincel('pincel antigo para retocar pintura');
    }
}

$artistaUm = new UsandoFerramenta();
$artistaUm->funcaoDe_pincel();
$artistaUm->funcaoDe_lapis();
$artistaUm->funcaoDe_caneta();
