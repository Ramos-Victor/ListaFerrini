<legend>Converter Celsius para Fahrenheit</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Converter" name="action">
</form>


<?php 
    if(!empty($_POST)){
        echo "Temperatura em Celsius para converter foi: ".$_POST['numero'];
        Converter($_POST['numero']);
    }

    function Converter($temp){
        $fahrenheit = ($temp*1.8)+32;
        echo "<br> Temperatura convertida para fahrenheit: $fahrenheit";
    }
?>