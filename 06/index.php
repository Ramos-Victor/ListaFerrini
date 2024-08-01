<legend>Tabuada</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Fatorar" name="action">
</form>

<?php

    if(!empty($_POST)){
        Tabuada($_POST['numero']);
    }

    function Tabuada($n1){
        for($i=1;$i<=10;$i++){
            echo "$n1 * $i = ".$n1*$i;
            echo "<br>";
        }
    }
?>