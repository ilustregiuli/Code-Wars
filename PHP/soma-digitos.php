<?php

/*

Recebe um número e soma todos os digitos dele até restar um dígito apenas;

*/

$number = 167;

$numberString = strval($number);

$soma = 0;
$continua = true;

while($continua) {
    for($i = 0; $i < strlen($numberString); $i++) { 
        $soma += (int) $numberString[$i];
    }

    if(strlen(strval($soma)) > 1) {     
        $numberString = strval($soma); 
        $soma = 0;
    } else {
        $continua = false;
    }

    var_dump($soma);
    var_dump($continua);
    var_dump(strlen($numberString));
    echo '***********************************************************' . PHP_EOL;    
}    

/* Melhor solução */
while(strlen($number) > 1) { // strlen retorna o número de bytes, então pode receber um "int" como argumento
    $number = array_sum(str_split($number)); // converte uma string em um array, mas também pode receber um "int"
}

echo $number .PHP_EOL;

$numero = 150;

var_dump(str_split($numero));
    