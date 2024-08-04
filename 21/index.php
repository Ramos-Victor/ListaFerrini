<legend>Calcular a soma de numeros impares</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Calcular" name="action">
</form>

<?php 
    if(!empty($_POST)){
        somarImpar($_POST['numero']);
    }

    function somarImpar ($n){
        $resultado=0;
        for($i=1;$i<=$n;$i++){
            if($i % 2 != 0){
                $resultado +=$i;
            }
        }

        echo "A soma dos numero impares até $n é: $resultado ";
    }
?>