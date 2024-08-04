<legend>Verificar palindromo</legend>
<form method="post">
    <input type="text" name="palavra" placeholder="Digite uma string">
    <br>
    <input type="submit" value="Verificar" name="action">
</form>

<?php 
    if(!empty($_POST)){
        $resul = invertendoString(strtolower($_POST['palavra']));

            if(!empty($_POST['palavra'])){
                echo "A string digitada foi: ".($_POST['palavra']);
                if($resul !=false){
                    echo "<br> A palavra é um palindromo!";
                }else{
                    echo "<br> Não é um palindromo!";
                }
            }else{
                echo "<br>Não deixe o campo vazio!!";
            }
    }

    function invertendoString($carac){
        $palavra=$carac;
        $invertida="";
        for($i = strlen($carac) -1; $i>=0; $i--){
            $invertida .=$carac[$i];
        }

        if($palavra == $invertida){
            return true;
        }else{
            return false;
        }
    }
?>