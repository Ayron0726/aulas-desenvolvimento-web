<?php

$vetor = array(1,3,5,7,8,11,12,15,20);
for($i = 0; $i < sizeof($vetor);$i++)
{
    // é ímpar
    if($vetor[$i] % 2 != 0)
    {
        continue;
    }
    echo"O número ".$vetor[$i]." é par.<br>";
}

#Usando o continue

#Saída = 

O número 8 é par.
O número 12 é par.
O número 20 é par.