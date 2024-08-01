<legend>Ordenando um Array(bubble Sort)</legend>
<?php
     $array = [10,5,55,52,34,58,24,25,54,4];
    
     echo "Array: ";
     foreach($array as $number =>$num)
     {
         echo "$num ";
     }

     $aux = 0;

     for($i = sizeof($array) - 1 ;$i > 0; $i--){
        for($j=0;$j<$i;$j++){
           if($array[$j]>$array[$j+1]){
            $aux=$array[$j];
            $array[$j]=$array[$j+1];
            $array[$j+1]=$aux;
           }
        }
     }
     
     echo "<br>Array organizado : ";
     foreach($array as $number =>$num)
     {
         echo "$num ";
     }
?>