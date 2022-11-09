<?php
$prova1 = 7;
$prova2 = 5;
$nota = ($prova1 + $prova2)/2;

	if($nota<3)
    	$desempenho = "PESSIMO";
    elseif($nota<5)
    	$desempenho = "RUIM";
    elseif($nota<7)
    	$desempenho = "MÉDIO";
    elseif($nota<8)
    	$desempenho = "BOM";
    else
    	$desempenho = "EXCELENTE";
        
    echo "O SEU DESEMPENHO FOI: $desempenho";

#Saída: O SEU DESEMPENHO FOI: MÉDIO