<legend>Contagem de vogais</legend>
<form method="post">
    <input type="text" name="palavra" placeholder="Digite uma string">
    <br>
    <input type="submit" value="Contar" name="action">
</form>

<?php 
    if(!empty($_POST)){
        echo "A string digitada foi: ". $_POST['palavra'];
        contarVogais(str_split($palavra=$_POST['palavra']));
    }

    function contarVogais(array $carac){
        $qtdVogais=0;
        $vogais= ["a","e","i","o","u"];
        for($i=0;$i<sizeof($carac);$i++){
            for($j=0;$j<sizeof($vogais);$j++){
                if($vogais[$j]==$carac[$i]){
                    $qtdVogais++;
                }
            }
        }

        echo "<br>A quantidade de vogais na string é : $qtdVogais";
    }
?>