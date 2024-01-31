<div class="titulo"> Gerenciamento de Sessão </div>

<?php
//session_id('70081e545756c74afc8f9f5ccf36ae1cvcbnb');
session_start();
echo session_id();

$count = &$_SESSION['count'];
$count = $count ? $count + 1 : 1;
echo '<br>' . $_SESSION['count'];

if ($_SESSION['count'] % 5 === 0) {
    session_regenerate_id();
}
if ($_SESSION['count'] >= 15) {
    session_destroy();
}
