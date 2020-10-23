<?php 
require 'prueba.php';
 ?> 
<!DOCTYPE HTML>
<html lang="es-mx" dir="ltr"> <!--es una etiqueta la cuál determina el idioma del contenido-->
<head> 
  <meta charset="utf-8"> <!--es una etiqueta obligatoria la cual  se encarga de codificar los números y hacerlos accesibles para los ordenadores-->
  <meta name="author" content=""> <!--Dentro de las comillas se coloca el nombre del creador de la pagina web*/ -->
  <meta name="description" content=""> <!-- esta etiqueta sirve para dar una pequeña descripcion hacerca de tu sitio web -->
  <meta name="keywords" content="">  <!-- esta etiqueta sirve para poner palabras claves  hacerca de los temas que involucra tu sitio y es muy util para que los usuarios encuentren facilmente tu  sitio-->
 
  <title>MI BLOG PERSONAL </title> <!-- Es para agregar el nombre con el cual se mostrara  la pestaña del navegador  -->
  
  <link rel="stylesheet" href="s.css"> <!-- Aquí se manda a llamar la hoja de estilos para que le de diseño y animacion a la pagina web  -->
</head>
<body>   <!-- Inicia el contenido de la pagina -->

<header>

        <figure>
          <img src="imagenes/shutterstock.jpg" alt="" > <!-- Aqui se coloca una imagen que se mostrara en el header(en la cabecera de la pagina) -->
        </figure>
    <nav> <!-- -->
      <h2>Menú</h2>    <!-- empieza la barra de menú donde vendran los temas contenidos de la pagina -->
      <ul> 
        <li><a href="#biografia" target="_self">Biografia</a>.   <!-- El # se utiliza para que  te lleve a su id el cual se encuentra en la misma pagina del sitio-->
        </li>
        <li><a href="#musica" target="_self">Música</a>
        </li>
        <li><a href="#series" target="_self">T.V</a></li>  
        <li><a href="#comida" target="_self">Deporte</a></li>   
        <li><a href="#lugares" target="_self">Lugares</a></li>  
        <li><a href="#pasatiempos" target="_self">Pasatiempos</a></li>  
     </ul>
    </nav>  <!-- termina la barra del menú -->
    </header>
  <!--empieza una seccion -->
    <section>
      <h2 id="biografia">Biografia</h2>   <!--h2  sirve para colocar en nombre a un  titulo -->
      <p> Soy una persona apacionada de la informatica en particular me gusta el area de seguridad informatica y programacion es donde enfoco la mayor parte de mi tiempo, ademas me gusta ver peliculas y series de genero apocaliptico y suspenso, tambien practico taekwando dos veces a la semana me gustan las actividades que tengan que ver con la naturaleza</p>
        <figure>
          <img src="imagenes/" alt="">
        </figure>
        <article> <!--esta etiqueta que sirve como contenedor de bloques de contenido que se consideran independientes del sitio web y pueden, por lo tanto, ser vistos, reutilizados y distribuidos por separado-->
        <h3 id="musica">Música Favorita</h3> <br><br> <!--h2 la etiqueta br sirve para dar un salto de linea-->
        <p></p> <!--esta etiqueta sirve para insertar texto en parrafos-->
        <figure>
        <img src="imagenes/metalica.jpg">
        </figure>
    <p>Megusta casi todo tipo de musica, pero en particular lo que mas ecucho es rock alternativo y rap<em></em> </p>
    
    
        </article>
              <article>. 
          <h3 id="series">Series Favoritas </h3>
          <br><br>
          <iframe width="624" height="302" src="https://www.youtube.com/embed/AL9zLctDJaU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </article>
         <article>
    
        </section>
    <section>
    <h2 id="comida">Deporte favorito</h2>
    <h3>.</h3>>
        <figure>
        <a href="https://www.youtube.com/watch?v=WPVuC6ugmAw" target="_self"><img src="imagenes/taekwondo.jpg" alt="" title=""></a>
        </figure>
    <h3>.</h3>>
        <figure>
        <img src="imagenes/parkourt.jpg" alt=""title="">
        </figure>
     <h3>.</h3>> 
        <figure>
        <img src="imagenes/" alt=""title="">
        </figure> 
     <article>
     <h3 id="lugares" >Lugares Favoritos</h3>
     <ol>
      <li></li>
        <figure>
        <img src="imagenes/bosque.jpg" alt="" title="">
        </figure>
        <p></p>
      <li>...</li>
        <figure>
        <img src="imagenes/rapel.jpg" alt="" title="">
        </figure>
        <p></p>
      <li></li>
        <figure>
        <img src="" alt="" title="">
        </figure>
        <p></p>
      
     </ol>
     </article>
        
        <article>
        
        <h3 id="pasatiempos">Pasatiempos</h3>
        <p></p>
        <figure>
        <img src="imagenes/pelicula.jpg" alt="" title="">
        </figure>
        <p></p>
        <figure>
        <img src="imagenes/code.jpg" alt="" title="">
        </figure>
         <p></p>
        <figure>
        <img src="imagenes/dims.jpg" alt="" title="">
   
        </figure>

        </article>
    
    </section>
    <footer> <!-- Empieza el pie de pagina para agregar informacion extra del sitio web como: la licencia, redes sociales,etc-->

       
    </footer>
      </div>
</body>
</html>
