<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEFA Champions League</title>
    <link rel="shortcut icon" href="./imgs/logo.png">
    <link rel="stylesheet" href="./estilos/segundop.css">
    
</head>
<body>
    <!-- BARRA DE NAVEGACIÓN-->
    <nav>
		<div id="navegador">
        <a href="https://www.academiadefutbolmillonarios.com.co/"><img src="./imgs/logotipo-removebg-preview.png" alt="img3" class="img3"></a>
		</div>
		<ul>
			<li>
                <a href="http://localhost/pagina%20oficial/Equipos.php">Equipos</a>
                <a href="http://localhost/pagina%20oficial/datos.php">Datos</a>
                <a href="http://localhost/pagina%20oficial/Partidos%20y%20resultados.php">Partidos y Resultados</a>
                <a href="http://localhost/pagina%20oficial/Ultimas%20Noticias.php">Ultimas Noticias</a>
                <a href="http://localhost/pagina%20oficial/historia.php">Historia</a>
			</li>
		</ul>
	</nav>

    <!--VIDEOS-->
    
    <div class="container-video">
        <div class="slider" id="slider">
            <section class="video" id="video"><video class="video__section" controls autoplay muted><source src="videos/My Video.mp4" class="slider__video" type="video/mp4"></video></section>
        </div>
        <div class="video__btn video__btn--right" id="btn-right">&#60;</div>
        <div class="video__btn video__btn--left" id="btn-left">&#62;</div>
    </div>
    <script src="./js/video.js"></script>



    <!--NOTICIAS--> 
    <div class="noticias">
        <!--SECCION 2-->        
        <div class="noticia2">
            <div class="texto2"><p>Real Madrid vs Juventus</p><p>Fue en la victoria de visitante del Real Madrid ante la Juventus en la fase de cuartos de final. A los 63 minutos, el portugués recibió un pase de Dani Carvajal y pateó el balón de chilena para su segundo tanto de la noche.</p></div>
            <div class="imagen2"><img src="imgs\cr7-chilena-65422-800x600.jpg" alt="primeraimg"></div>
        </div>
        <!--SECCION 3-->    
        <div class="noticia3">
            <div class="texto3"><p>El día en que Messi asombró al mundo con cuatro goles al Arsenal</p><p>Leo Messi dejó impresionado al todo el planeta aquel 6 de abril de 2010, en la visita del Arsenal al Camp Nou en los cuartos de final de una Liga de Campeones que acabaría para los de Guardiola en semifinales, tras su eliminatoria con el Inter de Mourinho.</p></div>    
            <div class="imagen3"><img src="imgs\messi.jpg" alt="img2"></div>
        </div>  
        <!--SECCION 4-->    
        <div class="noticia4">
            <div class="texto4"><p>El gol de Neymar ante el Basaksehir, elegido como el mejor en la fase de grupos de la Champions</p><p>El gol de Neymar que abrió la goleada del PSG al Istanbul Basaksehir (5-1) ha sido elegido como el mejor tanto de la fase de grupos de la Champions League. En el encuentro definitivo, que se acabó disputando el miércoles 9 de diciembre tras el plantón de los jugadores por los supuestos comentarios de Coltescu, el crack brasileño anotó su tercer hat-trick en la máxima competición continental (2 con la camiseta del PSG y 1 con la camiseta del Barça). </p></div>    
            <div class="imagen4"><img src="imgs\neymar.jpg" alt="imagen3"></div>
        </div>   
    </div>
</body>
</html>