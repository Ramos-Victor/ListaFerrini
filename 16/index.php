<legend>Média de numeros na lista</legend>
<?php
     $array = [10,5,55,52,34,58,24,25,54,4];
    
     echo "Lista de numeros: ";
     foreach($array as $number =>$num)
     {
         echo "$num ";
     }

     $resultado=0;
     $div=0;

     foreach($array as $num){
        $resultado += $num;
        $div++;
     }

     $media = $resultado/$div;

     echo "<br> A média é $media";
     
?>