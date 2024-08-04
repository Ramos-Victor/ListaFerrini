<legend>Classificar Perfeito, Abundante e Deficiente</legend>
<form method="post">
    <input type="text" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Converter" name="action">
</form>

<?php 
    if(!empty($_POST)){
        verificarNumero($_POST['numero']);
    }

    function verificarNumero($num) {
        if ($num <= 0) {
            echo "O número deve ser maior que zero.<br>";
        }
        
        $soma_divisores = 0;
        
        for ($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                $soma_divisores += $i;
            }
        }
        
        if ($soma_divisores == $num) {
            echo "Perfeito";
        } elseif ($soma_divisores > $num) {
            echo "Abundante";
        } else {
            echo "Deficiente";
        }
    }
?>