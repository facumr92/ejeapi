<?php

 $API= "https://whenisthenextmcufilm.com/api";
 $ch = curl_init($API);

//detiene  la ejecución si hay un error en el cURL
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

 //ejecuta la petición de la API
 $resultado= curl_exec( $ch );


//Decodifica la respuesta JSON en un array asociativo
 $datos=  json_decode($resultado,true); 
 curl_close( $ch );

//se debe mostrar usando var_dump o print_r ya qque es un array asociativo

//var_dump($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<section>

<div class="container-peli">
<h2> Siguiente pelicula de Marvel: <?= $datos['title']; ?> </h2>


<img src=" <?= $datos['poster_url']; ?>" alt="">
<p> fecha de estreno: <?= $datos['release_date']; ?> </p>
<p> faltan: <?= $datos['days_until']?> días para el estreno</p>
</div>

</section>


<style>


</style>
</body>
</html>