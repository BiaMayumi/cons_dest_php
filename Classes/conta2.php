<?php
class conta {
    public $Cliente;
    public $Agencia;
    public $Conta;
    public $Saldo;
    public $Status;

    public function __construct($cliente, $agencia, $conta, $saldo, $status) {
        $this->Cliente = $cliente;
        $this->Agencia = $agencia;
        $this->Conta = $conta;
        $this->Saldo = $saldo;
        $this->Status = $status;
    }

    public function Depositar($valor) {
        $this->Saldo += $valor;
    }

    public function Sacar($valor) {
        if ($this->Saldo >= $valor) {
            $this->Saldo -= $valor;
        } else {
            echo "Saldo insuficiente.";
        }
    }

    public function ObterSaldo() {
        return $this->Saldo;
    }

    public function __destruct() {
    }
}
?>