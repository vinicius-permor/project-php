<div class="titulo"> Metodos Magicos </div>

<?php
class Pessoa {
    public $nomeCompleto;
    public $idade;
    public $id;

    function __construct($nomeCompleto, $idade, $id) {
        echo "iniciando construção<br>";
        $this->nomeCompleto = $nomeCompleto;
        $this->idade = $idade;
        $this->id = $id;
    }

    function __destruct() {
        echo "chamando o metodo destruct<br>";
    }

    public function __toString() {
        return "NOME COMPLETO: {$this->nomeCompleto}<br>IDADE: {$this->idade}<br>ID: {$this->id}<br>";
    }
    public function aprensetar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {  // informa  apenas o atributo no qual eu deseja capturar
        // return $this->$atrib;
        echo "logando usuario, $atrib<br>";
    }
    public function __set($atrib, $valor) { //informa o atributo que deverá receber o valor
        //$this->atrib = $valor;
        echo "usuario está, {$atrib} para {$valor}<br>";

    }
    public function __call($parametro_1, $parametro_2) { //metodo call sempre chamar quando no objrto que não existe
        echo "tentativa de executar método ${parametro_1}";
        echo " com os parametros: ";
        print_r($parametro_2);
    }
}

$user = new Pessoa('Marcus Vinicius','29','mvpdmoraes');
$user->aprensetar();
echo $user, '<br>';
$user->nome = 'MARCUS<br>';
print "<br>";
$user->NomeCompleto = "NOVO USUARIO<br>";
$user->exec('Rua Casa Nova','Aeroporto', 'numero 1689', '6,8 kilometros' , 'id: 15847621', 15975368421);
echo "<br>";
$user = NULL;