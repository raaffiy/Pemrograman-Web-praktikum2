<?php

function isPrime($n){
    if($n < 2) return false;
    if($n == 2) return true;
    if($n % 2 == 0) return false;

    for($i = 3; $i * $i <= $n; $i += 2){
        if($n % $i == 0) return false;
    }
    return true;
}

function countDivisors($n){
    $count = 0;
    for($i = 1; $i * $i <= $n; $i++){
        if($n % $i == 0){
            if($i * $i == $n){
                $count += 1;
            } else {
                $count += 2;
            }
        }
    }
    return $count;
}

$N = isset($_GET['n']) ? intval($_GET['n']) : 0;

if($N == 0){
    echo "Masukkan nilai N di URL, contoh: ?n=18";
    exit;
}

$bestP = 0;
$maxWays = 0;

for($p = 2; $p <= $N; $p++){

    if(!isPrime($p)) continue;

    if($N % $p != 0) continue;

    $totalEggs = $N * $p;

    $ways = countDivisors($totalEggs);

    if($ways > $maxWays){
        $maxWays = $ways;
        $bestP = $p;
    }
}

if($bestP == 0){
    $bestP = $N;
}

echo $bestP;

?>