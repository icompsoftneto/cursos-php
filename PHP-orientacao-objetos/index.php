<?php

require "validacao.php";
require "contaCorrente.php";

$contaJoao = new contaCorrente("Joao", "1212","343434-9", 2000.00);
$contaMaria = new contaCorrente("Maria","1212", "343423-9",6000.00);

$contaJoao->sacar("maria");


