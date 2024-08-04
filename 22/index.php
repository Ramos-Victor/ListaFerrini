<legend>Converter numeros decimal para binario</legend>
<form method="post">
    <input type="text" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Converter" name="action">
</form>


<?php 
if(!empty($_POST)){
    decimalParaBinario($_POST['numero']);
}   

function decimalParaBinario($numero) {
    if ($numero == 0) {
        echo "0";
    }
    
    $binario = "";
    while ($numero > 0) {
        $resto = $numero % 2;
        $binario = $resto . $binario;
        $numero = (int)($numero / 2);
    }
    
    echo "$binario";
}
?>