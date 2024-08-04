<legend>Busca Linear</legend>
<?php
     $array = [10,5,55,52,34,58,24,25,54,4];
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
        $resultado = Buscalinear($_POST['numero']);
        if($resultado !==false){
            echo "Item encontrado no indice $resultado";
        }else{
            echo "Valor não encontrado";
        }
    }

    function Buscalinear($n){
        $item = $n;
        $array = [10,5,55,52,34,58,24,25,54,4];
        foreach($array as $ind => $num){
            if($num == $item){
                return $ind;
            }
        }

        return false;
    }
?>