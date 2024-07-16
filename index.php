<?php


require("procesarAPI.php");

 $API_marvel= "https://whenisthenextmcufilm.com/api";
 $API_comments= "https://jsonplaceholder.typicode.com/comments";
 

 $datos_marvel= procesar_datos_API($API_marvel);
 $datos_comments= procesar_datos_API($API_comments);


 
?>

<?php require("header.php"); ?>

<section>

<div class="container-peli">
<h2> Siguiente pelicula de Marvel: <?= $datos_marvel['title']; ?> </h2>


<img src=" <?= $datos_marvel['poster_url']; ?>" alt="">
<p> fecha de estreno: <?= $datos_marvel['release_date']; ?> </p>
<p> faltan: <?= $datos_marvel['days_until']?> días para el estreno</p>
</div>

</section>


<section>


<h2>Comentarios</h2>


<div class="container-padre">

    <div class="hijo">


<!--  
    
puedo insertar uno a uno de la forma;


$datos_comments[0]['valor'];


-->
    


<?php foreach($datos_comments as $comment): ?>


    <p>comentario: <?= $comment['id']; ?></p> 

     <p>Nombre: <?= $comment['name']; ?></p> 

    <p>Email: <?= $comment['email']; ?>  </p>

     <p>Email: <?= $comment['body']; ?>  </p>

<hr>
    
<?php endforeach; ?>
</div>


</div>



</body>
</html>