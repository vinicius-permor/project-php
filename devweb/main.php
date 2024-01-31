<?php namespace cadastro; ?>

<?php
namespace cadastro\page1;
include "_include_main.php";
include "_compra_page.php";
use listaProduto\page2\CarrinhoDeCompra as listandoProduto;
use compraPage\page3\finalizaPagamento as paginaCompra;
class SysCadastro {
    public  $nomeComleto;
    public $email;
    protected $senha;

    public function __construct($nomeComleto, $email, $senha)
    {
        $this->nomeComleto = $nomeComleto;
        $this->email = $email;
        $this->senha = $senha;
    }
    function criandoCadastro()
    {
        return $this->nomeComleto.
               $this->email.
               $this->senha;
    }
    private function visualizandoSenha() {
        return $this->senha;

    }
}
class Login extends SysCadastro {
    public $login;
    public $id;
    public static $novaSenha;

     function __contruct($nomeComleto, $email, $senha, $login, $id) {
          $this->login = $login;
         $this->id = $id;
         parent::__construct($nomeComleto, $email, $senha);
     }
     public function criandoLogin() {
         echo "{$this->login} {$this->id} {$this->senha}";
         return parent::criandoCadastro();
     }
     public function mostrandoSenha() {
         return $this->senha;
     }
     public static function alterandoSenha() {
         return "nova senha: " . self::$novaSenha;
     }
}

$amostra = new Login('nome completo: Marcus Vincius Pereira de Moraes ','email: ma.vinicius.moraes@gmail.com ','senha: 123456');
$amostra->login = " login: marcusMoraes ";
$amostra->id = " id: @mr78952 ";
$amostra::alterandoSenha();
//echo $amostra->mostrandoSenha();
$amostra->criandoLogin();
echo $amostra::$novaSenha = ' uma nova senha foi criada';
$finalizando = new listandoProduto();
echo $finalizando->colocaCarrinho();

