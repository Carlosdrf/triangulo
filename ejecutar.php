<?php
if(isset($_POST['btn'])&& $_POST['btn']== 'calcular'){
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $hipotenusa = null;

    if(!empty($lado1) or !empty($lado2)){

        echo "<h2 align='center'>calculo de la hipotenusa de un triangulo</h2>";

        $hipotenusa = sqrt(pow($lado1, 2)+pow($lado2,2));
        
        echo "<br>La hipotenusa del triangulo es: ".round($hipotenusa,3);
        echo "<br/><br/>";
        echo "<a href='index.html'>regresar</a>";
    }
}
?>