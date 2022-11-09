<?php

$vetor = array(1,2,3,4,5);
foreach($vetor as $v)
{
    print"O valor atual do vetor $v.<br>";
}
$a = array("UM" => 1,"DOIS" => 2,"TRES" => 3);
foreach($a as $chave => $valor)
{
    print("\$a[$chave] => $valor.<br>");
}

#Uso do foreach

#Saída =

O valor atual do vetor 1.
O valor atual do vetor 2.
O valor atual do vetor 3.
O valor atual do vetor 4.
O valor atual do vetor 5.
$a[UM] => 1.
$a[DOIS] => 2.
$a[TRES] => 3.