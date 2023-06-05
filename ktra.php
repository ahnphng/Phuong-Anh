<?php
//Câu 
function checkPrime($n){
    if ($n < 2){
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}

function findPrimes($array){
    $primeNumbers = [];
    foreach ($array as $n){
        if(checkPrime($n)){
            $primeNumbers[] = $n;
        }
    }
    return $primeNumbers;
}

$array =[3,5,2,9,10];
$primeNumbers = findPrimes($array);
echo "Các số nguyên tố trong mảng là: " .implode(", ", $primeNumbers);
?>