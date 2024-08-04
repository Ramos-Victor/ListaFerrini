<legend>Busca Binária</legend>
<?php
     $array = [5,10,15,20,25,30,35,40,45,50];
     echo "Array: ";
     foreach($array as $number =>$num)
     {
         echo "$num ";
     }

?>

<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Buscar" name="action">
</form>

<?php
    if(!empty($_POST)){
        $n = intval($_POST['numero']);
        $resultado = buscaBinaria($n);
        if($resultado !==false){
            echo "Item encontrado no indice $resultado";
        }else{
            echo "Valor não encontrado";
        }
    }

    function buscaBinaria($item) {
        $array = [5,10,15,20,25,30,35,40,45,50];
        $inicio = 0;
        $fim = count($array) - 1;
    
        while ($inicio <= $fim) {
            $meio = intdiv($inicio + $fim, 2);
    
            if ($array[$meio] === $item) {
                return $meio;
            }
    
            if ($array[$meio] < $item) {
                $inicio = $meio + 1; 
            } else {
                $fim = $meio - 1; 
            }
        }
    
        return false; 
    }
?>