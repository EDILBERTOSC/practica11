<html>
<head>
<title>practica 11 php</title>
</head>
<body>
        <?php
        //Nombre del alumno
        //usando variables en php
        echo "<h1>variables </h1>";
        $nombre='edilberto';// tipo cadena 
        $apellido='sanchez cordova';
        $edad=21;
        $salario=1200.00;
        $fechaNacimiento0='5/10/1995';
        $estatus=true;
echo $nombre.'<br/>';
echo $apellido.'<br/>';
echo 'Nombre completo:'.$nombre.' '.$apellido.'<br/>';
echo 'TU EDAD ES '.$edad.'<br/>';
echo 'TU SALARIO ES:'.$salario;

?>
<h1>OPERADORES ARITMETICOS</H1>
<?php

$a=5;
$b=3;
$suma=$a+$b;
$resta=$a-$b;
$multiplica=$a*$b;
$divide=$a/$b;
echo 'la suma de '.$a.'+'.$b.'es: '.$suma.'<br/>'.'<br/>';
echo 'la resta de '.$a.'-'.$b.'es: '.$resta.'<br/>'.'<br/>';
echo 'la multiplica de '.$a.'*'.$b.'es: '.$multiplica.'<br/>'.'<br/>';
echo 'la divide de '.$a.'/'.$b.'es: '.$divide.'<br/>'.'<br/>';


?>
</body>
</html>