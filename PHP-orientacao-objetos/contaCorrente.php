<?php

class contaCorrente{

    private $titular;
    private $agencia;
    private $numero;
    private $saldo;

    public function __construct($titular,$agencia,$numero,$saldo){
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function sacar($valor){
        validacao::verificaNumerico($valor);
        $this->saldo = $this->saldo - $valor;
        return $this;
    }

    public function depositar($valor){
        validacao::verificaNumerico($valor);
        $this->saldo = $this->saldo + $valor;
        return $this;
    }

    public function transferir($valor,contaCorrente $conta){
        validacao::verificaNumerico($valor);
        $this->sacar($valor);
        $contaCorrente->deoisutar($valor);
        return $this;
        }

    public function __get($atributo){
        valicadao::protegeAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo,$valor){
        validacao::protegeAtributo($atributo);
        $this->$atributo = $valor;
    }

    public function setNumero($numero){
        return $this->numero = $numero;
    }

    public function formataSaldo(){
        return "R$ ".number_format($this->saldo,2,",",".");
    }

    public function getSaldo(){
        return $this->formataSaldo();
    }
    public function __toString(){
        return "O titular da conta é: ".$this->titular. "<br/>Seu saldo atual é: ".$this->getSaldo();
    }
}
