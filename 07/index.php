<legend>Maior e menor</legend>
<?php
    $array = [10,5,55,52,34,58,24,25,54,4];
    
    echo "Array: ";
    foreach($array as $number =>$num)
    {
        echo "$num ";
    }
    
    $menor=$array[0];
    $maior=$array[0];

    foreach($array as $n){
        if($menor>$n){
            $menor = $n;
        }

        if($maior<$n){
            $maior =$n;
        }
    }
    

    echo "o menor numero do array é $menor e o maior numero do array é $maior";
?>