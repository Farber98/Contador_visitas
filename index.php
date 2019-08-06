<?php 

function contar_usuarios()
{
    $archivo = 'contador.txt';  //Nombre del archivo.
    if(file_exists($archivo))
    {
        $cuenta = file_get_contents($archivo) + 1;  //Sumamos una visita al valor que tenia el archivo.
        file_put_contents($archivo, $cuenta);    //Sobreescribimos el archivo con la visita nueva.
        return $cuenta;
    }
    else 
    {
        file_put_contents($archivo, 1); //Creamos el archivo y establecemos la primera visita.
        return 1;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Contador de visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>  <!-- Ejecutamos la funcion. -->
        <p class="texto">Visitas</p>
    </div>
</body>
</html>