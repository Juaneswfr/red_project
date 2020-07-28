<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script type="text/javascript">
        var estilosjuanes = '/css/styles.css?' + Math.random();
        var estilos = './css/styles.css?' + Math.random();
        </script>

        <script type="text/javascript">
    document.write('<link href="' + estilosjuanes + '" rel="stylesheet">');
    document.write('<link href="' + estilos + '" rel="stylesheet">');
    </script>
    <title>videojuegos</title>
</head>
<body>
    <main>
 <header>
    <div class="wrapper">
        <div class="logo">VIDEOJUEGOS</div>

        <nav>
            <a href="#">Inicio</a>
            <a href="#">Consolas</a>
            <a href="#">Juegos</a>
            <a href="/galeano/producto.html">Productos</a>
            <a href="#wrap_footer">Contactanos</a>
        </nav>
    </div>
 </header>
 <section id="banner" class="banner_home">
     <figure>
         <img src="./images/ellie.jpg" alt="banner">
     </figure>
 </section>
 <section id="wrap_submenu_home">
    <div class="curso_content">
        <div class="icons">
          <a href="#">
              <div>
                  <img src="/galeano/images/consola.png" alt="">
              </div>
              <div>
                  <p class="c-paragraph">
                      <span>CONSOLAS</span>
                  </p>
              </div>
            </a>  
          <a href="#collage">
              <div>
                  <img src="/galeano/images/controlxbox.png" alt="">
              </div>
              <div>
                  <p class="c-paragraph">
                      <span>JUEGOS</span>
                  </p>
              </div>
            </a>  
          <a href="#">
              <div>
                  <img src="/galeano/images/accesorios.png" alt="">
              </div>
              <div>
                  <p class="c-paragraph">
                      <span>ACCESORIOS</span>
                  </p>
              </div>
            </a>  
          <a href="#">
              <div>
                  <img src="/galeano/images/ofertas.png" alt="">
              </div>
              <div>
                  <p class="c-paragraph">
                      <span>OFERTAS</span>
                  </p>
              </div>
            </a>    
        </div::after> 

    </div>    
</section>
<section id="one" class="wrapper_style">

    <div class="curso_content">

        <div class="inner">
            <article class="feature_left">
                <figure class="image">
                    <img src="./images/ps5.jpeg"> 
                </figure>
                <div class="content">
                    <h2>PLAYSTATION 5</h2>
                    <p>PlayStation 5 es una consola de videojuegos de sobremesa desarrollada por Sony Interactive Entertainment. Es la sucesora de la PlayStation 4 y su lanzamiento mundial está programado para finales de 2020. Es la quinta consola de sobremesa de la marca PlayStation y la tercera en ser diseñada por Mark Cerny.</p>
                    <a href="#" class="button_alt">Más</a>
                </div>
            </article>
        </div>

        <div class="inner">
            <article class="feature_left">
                <figure class="image">
                    <img src="./images/xboxseriesx.jpg"> 
                </figure>
                <div class="content">
                    <h2>XBOX SERIES X</h2>
                    <p> La Xbox Series X será una nueva consola de videojuegos desarrollada por Microsoft. Con planes para entrar en ventas aproximadamente a finales de 2020, y entrar en competencia con la PlayStation 5 de Sony​.</p>
                    <a href="#" class="button_alt">Más</a>
                </div>
            </article>
        </div>
            

        
    </div>

    </section>
    
<section id="collage"> 
    <div class="curso_content"> 
         <div class="juegos"> 
             <img src="./images/jump-xbox.png">
             <img src="./images/just-xbox.png">
             <img src="./images/mortal-xbox.png">
             <img src="./images/portada-call-xbox.png"> 
             <img src="./images/blackops-ps.png">
             <img src="./images/daysgone-ps.png">
             <img src="./images/horizon-ps.png">
             <img src="./images/wwii-ps.png">
         </div> 
     </div>
 </section>
</main>
</body>

<footer>
    <section class="footer" id="wrap_footer">
        <div class="curso_content">
            <form action="/galeano/datos.php" id="form_contact" method="POST">
            <input type="text" name="username" id="username" placeholder="Correo electronico">
            <input type="text" name="name" id="name" placeholder="Nombre">
            <input type="text" name="lastname" id="lastname" placeholder="Apellido"> 
            <div>
                 <textarea id="mensaje" name="mensaje" placeholder="introduzca su mensaje..."></textarea>
                 <hr>
            </div>
            <div>
                <input type="submit" name="" id="" value="ENVIAR">
                </div>    
            </form>
        </div> 
        <div class="hrs">
             <hr class="hr">
         </div>    
         <div class="footer_content">
             <div class="footer_logos">
                 <div class="icons">
                     <a href="https://www.facebook.com/" id="fac" target="blank"></a>
                     <a href="https://www.twitter.com/" id="twi" target="blank"></a>
                     <a href="https://www.instagram.com/" id="ins" target="blank"></a>
                 </div>
             </div>
         </div>
         <div class="copyright">
             <p>Gafas source</p>
         </div>
     </section>
 </footer>


</html>
