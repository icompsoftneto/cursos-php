<?php

require "contaCorrente.php";

$contaJoao = new contaCorrente("Joao", "1212","343434-9", 2000.00);
$contaMaria = new contaCorrente("Maria","1212", "343423-9",6000.00);

var_dump($contaJoao);
$contaJoao->sacar(454)
        ->depositar(5789)
        ->sacar(33);
var_dump($contaJoao);

echo $contaJoao->getSaldo();
