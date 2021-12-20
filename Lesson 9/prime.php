<?php
function primeCheck($number){

    if ($number == 1)

        return false;

    for ($i = 2; $i <= $number/2; $i++){

        if ($number % $i == 0)
            return false;
    }

    return true;

}
$countPrime = 10001;
//$countPrime = 6; // return 13

$n = 0;
$k = 0;
while ($k < $countPrime) {
    $n++;
    $prime = primeCheck($n);
    if($prime){
        $k++;
    }
}
echo "Число $n";
//Число 104743