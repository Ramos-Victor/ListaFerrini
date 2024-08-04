<legend>Piramide de numeros</legend>
<form method="post">
    <label for="">Digite o numero de linhas que deseja</label><br>
    <input type="number" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Formar" name="action">
</form>

<?php 
    if(!empty($_POST)){
        Triangulo($_POST['numero']);
    }

    function Triangulo($n){
        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$i;$j++){
                echo $j." ";
            }
            echo "<br>";
        }
    }
?>