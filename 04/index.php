<legend>Fibonacci</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Fatorar" name="action">
</form>

<?php
if(!empty($_POST)){
    Fibonacci($_POST['numero']);
}
 function Fibonacci($n1){
    $aux = 1;
    $aux2 =0;
    for($i=1; $i <= $n1; $i++){
        $resul = $aux + $aux2;

        echo "$resul <br>";

        $aux2 = $aux;
        $aux = $resul;
        if($resul > $n1){
            break;
        }
    }
 }
?>