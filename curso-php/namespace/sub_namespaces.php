<?php namespace App; ?>
<div class="titulo"> Sub Namespaces </div>


<?php
echo __NAMESPACE__ . '<br>';
const UmaNovaConstante = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const UmaNovaConstante = 456;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const UmaNovaConstante = 789;

echo UmaNovaConstante . '<br>';
echo constant('\\'. __NAMESPACE__ . '\constante') . '<br>';
echo \App\UmaNovaConstante . '<br>';
echo \App\Principal\UmaNovaConstante . '<br>';
echo \App\Principal\Especifico\UmaNovaConstante;