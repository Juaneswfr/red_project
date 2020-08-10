
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Expires" content="0">
 		<meta http-equiv="Last-Modified" content="0">
		<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
		<meta http-equiv="Pragma" content="no-cache">
		<script type="text/javascript">
            var estilos1 = '/red_css/red_styles.css?' + Math.random();
            var estilos = './css/styles.css?' + Math.random();

          </script>

        <script type="text/javascript">
            document.write('<link href="' + estilos1 + '" rel="stylesheet">');
            document.write('<link href="' + estilos + '" rel="stylesheet">');
        </script>
	</head>
    <body>
        <main>
            <header>
               <div class="wrapper">
                   <div class="initial"><a href="/aesclothes/index.php"><img src="/aesclothes/images/logo_1.jpg"></a></div>
                       <nav>
                           <a href="/aesclothes/products.php">Ropa</a>
                           <a href="#">Faq</a>
                           <a href="#wrap_contact">Contacto</a>
                           <a href="/aesclothes/products.php">Accesorios</a>
                       </nav>
                   </div>
               </div>
            </header>
        </main>
        <section id="wrap_banner">
            <figure class="banner">
            </figure>
        </section>
        
        <section id="cards_body"> 
            <div class="red_content">
                <div class="content">
                    <figure>
                        <img src="/aesclothes/images/chart 1.gif">
                    </figure>
                    <article>
                        <h2>
                            Ropa
                        </h2>
                        <p>
                            Tenemos ropa de calidad, la mayoria son algodon y con poco polyester, aun asi el stock tiene diferentes prendas de diferentes materiales.
                        </p>
                        <a href="/aesclothes/products.php" class="a1">
                            Saber mas
                        </a>
                    </article>
                </div>
                <div class="content">
                    <figure>
                        <img src="/aesclothes/images/chart 2.gif" class="figure_2">
                    </figure>
                    <article>
                        <h2>
                            Accesorios
                        </h2>
                        <p>
                            Contamos con Accesorios de gran calidad, sus materiales son compuestos por acero, tambien tenemos una gran variedad de estos.
                        </p>
                        <a href="/aesclothes/products.php" class="a2">
                            Saber mas
                        </a>
                    </article>
                </div>
            </div>
        </section>
        
        <footer id="index_footer">
            <section class="footer_content">
                <section class="survey" id="wrap_contact">
                    <div class="survey_content">
                        <h1> Contacto</h1>
                        <form>
                            <div class="survey_two_columns">
                                <input id="nombre" name="nombre" placeholder="Introduzca su nombre.">
                                <input id="email" name="email" type="email" placeholder="ejemplo@gmail.com.">
                            </div>
                            <div class="survey_message_area">      
                                <textarea id="mensaje" name="mensaje" placeholder="Introduzca su mensaje."></textarea>
                            <div class="sumbit_button">
                                <input id="submit" name="submit" type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </section>
                <section class="finish_footer" id="wrap_footer">
                    <div>
                       <a href="https://www.twitter.com" class="twitter_b"><img src="/aesclothes/images/footer/twitter.png"></a>
                       <a href="https://www.facebook.com" class="facebook_b"><img src="/aesclothes/images/footer/facebook.png"></a>
                       <a href="https://www.instagram.com" class="instagram_b"><img src="/aesclothes/images/footer/instagram.png"></a>
                    </div>
                    <p>Creado por angel ©</p>
                </section>
            </section>
        </footer>
    </body>
</html>
