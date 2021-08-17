<?php

class valicadao{
    public static function protegeAtributo($atributo)
    {
        if ($atributo == "titular" || $atributo == "saldo") {
            throw new Exception("O atributo $atributo continua privado");
        }
    }

    public static function verificaNumerico($valor)
    {
        if (!is_numeric($valor)) {
            throw new Exception("O valor passado não é um número");
        }
    }
}

