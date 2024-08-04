<legend>Adivinhe um numero</legend>
<form method="post">
    <label for="">1 a 100</label><br>
    <input type="number" name="numero" placeholder="Digite um numero">
    <br>
    <input type="submit" value="Advinhar" name="action">
</form>

<?php 
    if(!empty([$_POST])){
        Adivinhe($_POST['numero']);
    }

    function Adivinhe($n){
        $aleatorio = rand(1,100);

        if($n == $aleatorio){
            echo "Acertou o numero parabens!!";
        }else{
            echo "Você errou, boa sorte da proxima vez!";
        }

        echo "<br>A resposta era $aleatorio";
    }
?>