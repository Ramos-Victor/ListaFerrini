<legend>VER SE É PAR OU IMPAR</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Calcular" name="action">
</form>

<?php 

if(!empty($_POST))
{
    Verificar($_POST['numero']);
}

function Verificar($n1){
    if($n1 % 2 == 0){
    echo "O numero $n1 é par";
    }
    else{
    echo "O numero $n1 é impar";
    }
}

?>