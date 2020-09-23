<!DOCTYPE html>
<html lang="en">
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
        <link rel="shortcut icon" href=" /images/logos_and_particles/favicon-32x32.png" type="image/x-icon">
        <script type="text/javascript">
            document.write('<link href="' + estilos1 + '" rel="stylesheet">');
            document.write('<link href="' + estilos + '" rel="stylesheet">');
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	</head>
    <body id="contact_body">
        <main>
            <header id="index">
               <div class="wrapper">
                   <div class="initial"><a href=" /index.php"><img src=" /images/logos_and_particles/first_icon_1.png"></a></div>
                       <nav>
                           <a href=" /products.php">ROPA</a>
                           <a href=" /products.php">ACCESORIOS</a>
                           <a href="#">FAQ</a>
                           <a href="#wrap_contact">NEWSLETTER</a>
                           <a href=" /contact.php">CONTACTO</a>
                       </nav>
                   </div>
               </div>
            </header>
        </main>
        <section class="first_contact">
            <div class="a">
                <h3>CONTACTANOS!</h3>
                <hr>
            </div>
            <form method="POST" class="contact_form">
                <input type="text" required placeholder="Nombre">
                <input type="tel" required minlength="1" maxlength="9" placeholder="Telefono">
                <input required type="email" placeholder="Email" maxlength="50">
                <textarea required maxlength="500" placeholder="Escribe Tu Comentario"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
        <footer id="index_footer">
            <section class="footer_content">
                <section class="survey" id="wrap_newsletter">
                    <div class="survey_content">
                        <h1> Newsletter</h1>
                        <form>
                            <div class="survey_one_column">
                                <input id="email" name="email" type="email" placeholder="ejemplo@gmail.com.">
                            </div>
                            <div class="submit_button">
                                <input id="submit" name="submit" type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </section>
                <section class="finish_footer" id="wrap_footer">
                    <div>
                       <a href="https://www.twitter.com" class="social_media_icons"><img src=" /images/logos_and_particles/twitter.png"></a>
                       <a href="https://www.facebook.com" class="social_media_icons"><img src=" /images/logos_and_particles/facebook.png"></a>
                       <a href="https://www.instagram.com" class="social_media_icons"><img src=" /images/logos_and_particles/instagram.png"></a>
                       <a href="https://www.whatsapp.com" class="social_media_icons"><img src=" /images/logos_and_particles/whatsapp.png"></a>
                    </div>
                    <p>Creado por angel ©</p>
                </section>
            </section>
        </footer>
    </body>
</html>