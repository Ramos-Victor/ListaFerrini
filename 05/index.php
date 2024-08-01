<legend>Primo</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Fatorar" name="action">
</form>

<?php
if(!empty($_POST)){
    Primo($_POST['numero']);
}
 function Primo($n1){
    $div = 0;
    for($i=2;$i<$n1;$i++)
        if($n1 % $i ==0){
            $div++;
        }
    
    if($div!=0)
    echo "Não é primo";
    else
    echo "É primo";
 }
?>