<?php
function Sorteados(){
    $numeros = [];
    $values = [];
    for($i=0; $i < 20; $i++){
        array_push($numeros, rand(1,10));
    }
    echo "Números sorteados: " . implode(", ", $numeros). "<br>";
    for($i=0; $i<count($numeros); $i++){
        $current = $numeros[$i];
        if(!array_key_exists($current, $values)){
            for($j=0; $j<count($numeros); $j++){
                if($current == $numeros[$j]){
                    if(array_key_exists($current, $values)){
                        $values[$current] += 1;
                    }else{
                        $values[$current] = 1;
                    }
                }
            }
        }
    }
    $max = max($values);
    $repetido = array_search($max, $values);
    echo "O valor que mais se repetiu foi {$repetido}, ele se repetiu {$max} vezes.";
}

Sorteados();