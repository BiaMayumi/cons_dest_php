<?php

    include("Classes/conta2.php");


    $conta1 = new conta("Douglas Ribeiro", "0731", "987654-21", 400, "ativa");

    $conta1->Depositar(200);
    $conta1->sacar(25);

    echo 
        "Favorecido " .$conta1->Cliente. "<br/>
            Conta: " .$conta1->Conta. "<br/>
                Ag: " .$conta1->Agencia. "<br/>
                    Saldo: " .$conta1->ObterSaldo(). "<br/>";

?>