<legend>FATORIAL</legend>
<form method="post">
    <input type="number" name="numero" placeholder="Digite um numero" value="0">
    <br>
    <input type="submit" value="Fatorar" name="action">
</form>

<?php
if(!empty($_POST)){
    Fatorar($_POST['numero']);
}
 function Fatorar($n1){
    $n=$n1;
    $fatorial=1;
    
    for($count=1; $count<=$n ; $count++)
     $fatorial *= $count;
    
    echo $fatorial;
 }
?>