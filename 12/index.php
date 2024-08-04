<legend>Contagem de caracteres</legend>
<form method="post">
    <input type="text" name="palavra" placeholder="Digite uma string">
    <br>
    <input type="submit" value="Contar" name="action">
</form>

<?php 
    if(!empty($_POST)){
        echo "A string digitada foi: ". $_POST['palavra'];
        contarCaracter(str_split($palavra=$_POST['palavra']));
    }

    function contarCaracter(array $carac){
        $qtdCarac=0;
        for($i=0;$i<sizeof($carac);$i++){
            $qtdCarac++;
        }

        echo "<br>A string possue $qtdCarac caracteres";
    }
?>