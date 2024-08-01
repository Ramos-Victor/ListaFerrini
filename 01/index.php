<legend>CALCULADORA</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="number" name="numero2" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Somar" name="soma">
    <input type="submit" value="Subtrair" name="menos">
    <input type="submit" value="Multiplicar" name="multi">
    <input type="submit" value="Dividir" name="dividir">
</form>

<?php 

if(!empty($_POST))
{
    if(!empty($_POST['soma'])){
    Somar($_POST['numero'], $_POST['numero2']);
    }

    if(!empty($_POST['menos'])){
    Subtrair($_POST['numero'], $_POST['numero2']);
    }

    if(!empty($_POST['multi'])){
    Multiplicar($_POST['numero'], $_POST['numero2']);
    }

    if(!empty($_POST['dividir'])){
    Dividir($_POST['numero'], $_POST['numero2']);
    }
}

function Somar($n1, $n2){
    echo "$n1 + $n2 = ".$n1+$n2;
}
function Subtrair($n1, $n2){
    echo "$n1 - $n2 = ".$n1-$n2;
}
function Multiplicar($n1, $n2){
    echo "$n1 x $n2 = ".$n1*$n2;
}
function Dividir($n1, $n2){
    if($n2!=0){
    echo "$n1 / $n2 = ".$n1/$n2;
    }else{
    echo "Não tem como dividir por zero";    
    }
}
?>