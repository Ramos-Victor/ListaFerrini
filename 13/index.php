<legend>Invertendo String</legend>
<form method="post">
    <input type="text" name="palavra" placeholder="Digite uma string">
    <br>
    <input type="submit" value="Inverter" name="action">
</form>

<?php 
    if(!empty($_POST)){
        echo "A string digitada foi: ". $_POST['palavra'];
        invertendoString($_POST['palavra']);
    }

    function invertendoString($carac){
        $invertida="";

        for($i = strlen($carac) -1; $i>=0; $i--){
            $invertida .=$carac[$i];
        }

        echo "<br>A string possue $invertida caracteres";
    }
?>