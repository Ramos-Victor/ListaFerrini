<legend>Converter numeros decimal para binario</legend>
<form method="post">
    <input type="text" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Converter" name="action">
</form>

<?php 
    if(!empty($_POST)){
        $resultado = armstrongVerificar($_POST['numero']);

        if($resultado != false){
            echo "É um numero de armstrong";
        }else{
            echo "Não é um numero de armstrong";
        }
    }


function armstrongVerificar($n){
    $soma = 0; 
    $x = $n; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $soma = $soma + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    if ($n == $soma){
        return true;
    }
       
    return false;   
}
?>