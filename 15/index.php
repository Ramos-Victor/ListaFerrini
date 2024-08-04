<legend>Verificar numero perfeito</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Verificar" name="action">
</form>

<?php 
    if(!empty($_POST)){
        $perfeito = verificarPerfeito($_POST['numero']);
        echo "O numero digitado foi: ".$_POST['numero'];
        if($perfeito!=false){
            echo "<br> É um numero perfeito!!";
        }else{
            echo "<br> Não é um numero perfeito!!";
        }
    }

    function verificarPerfeito($n){
        $resultado = 0;
        for($i=$n-1;$i>0;$i--){
            if($n % $i == 0){
                $resultado += $i;
            }
        }

        if($resultado == $n){
            return true;
        }else{
            return false;
        }
    }
?>
