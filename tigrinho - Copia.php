<?php

$valor = readline("Qual valor da aposta? R$ ");
$multi = readline("Quanto quer multiplicar caso ganhe? [2 ou 3 |] :");

$total = $valor*$multi; 

$aposta = rand(1,20);


if($valor < 1){
    echo "Insira um valor valido";
}
else{
    if($multi = 2 && $aposta > 12){
        echo "O tigrinho soltou a carta Valor total: R$ ";
        echo $total;
    }
    elseif($multi = 3 && $aposta > 16){
        echo "O tigrinho soltou a carta! Valor total: R$ ";
        echo $total;
    }
    else{
        echo "Tigrinho roubou teu money, F, toma de 4! o tigrinho rolou $aposta \n";
        
    }
    
}


?>