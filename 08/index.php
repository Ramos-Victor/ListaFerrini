<legend>Soma dos valores de um array</legend>
<?php
     $array = [10,5,55,52,34,58,24,25,54,4];
    
     echo "Array: ";
     foreach($array as $number =>$num)
     {
         echo "$num ";
     }

     $soma = 0;

     foreach($array as $n){
        $soma +=$n;
     }

     echo "<br>O resultado é: $soma";
?>