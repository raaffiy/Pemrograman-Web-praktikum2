<?php
function kalkulator(float $a, String $op, float $b): float|int|object|string {
    switch ($op) {
        //Penjumlahan
        case "+":
            return $a + $b;
        //Pengurangan
        case "-":
            return $a - $b;
        //Perkalian
        case "*":
            return $a * $b;
        //Pembagian
        case "/":
            return ($a == 0) ? "Error: Pembagian dengan nol tidak diperbolehkan." : $a / $b;
        //Modulus
        case "%":
            return ($b == 0) ? "Error: Pembagian dengan nol tidak diperbolehkan." : $a % $b;
        //Perpangkatan
        case "^":
            return pow($a, $b);
        //Input tidak benar
        default:
            return "Operator tidak valid";
     }
}

#Penjumlahan
echo kalkulator(3, "+", 5); // Output: 8

#Pembagian
echo ("\n" . kalkulator(10,"/",20)); //Output: 0.5

//Tidak Valid
echo ("\n" . kalkulator(10,"x",20)); //Output: Operator tidak valid
?>