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
        var estilos = '/pg_css/pg_styles.css?' + Math.random();
        </script>
        <script type="text/javascript">
    document.write('<link href="' + estilos + '" rel="stylesheet">');
    </script>
    <title>Contactanos</title>
    <link rel="icon" href="/pg_images/mando.ico">
</head>
<body>
    <main>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="/pg_images/pg_logo_header.png" alt="logo">
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <div class="link_submenu">
                <a href="#">Productos</a>
                <li class="submenu">
                    <ul>
                        <li><a href="/pg_catalogue/productconsolas.php">Consolas</a></li>       
                        <li><a href="/pg_catalogue/productjuegos.php">Juegos</a></li>       
                        <li><a href="/pg_catalogue/productaccesorios.php">Accesorios y perifericos</a></li>       
                        <li><a href="/pg_catalogue/productsillas.php">Sillas</a></li>
                    </ul>           
                </li>
            </div>    
            <a href="contact.php">Contactanos</a>
        </nav>
    </div>
 </header>
 <section id="banner_contact">
    <section id="wrap_contact">
        <div class="pg_content">
            <form action="datos.php" id="form_contact" method="POST">
                <fieldset>
                <h1>Contáctanos</h1>
                <div>
                <!--select name="typ_sol" id="typ_sol" class="valid">
                <option value="0">Selecciona tú solicitud</option>
                <option value="1">Petición</option>
                <option value="2">Queja</option>
                <option value="3">Sugerencia</option>
                </select-->
                </div>
                <div>
                <input type="text" name="name_contact" id="name_contact" placeholder="Nombre">
                </div>
                <div>
                <input type="text" name="email_contact" id="email_contact" placeholder="Correo electronico">
                </div>
                <div>
                <textarea name="message_contact" id="message_contact" placeholder="escriba aqui su comentario..."></textarea>
                </div>
                <div>
                <input type="submit" name="" id="" value="ENVIAR">
                </div>
                </fieldset>
            </form>
        </div>    
    </section>
 </section>
    </main>
</body>
<footer>
    <section class="footer" id="wrap_footer">
        <!--div class="pg_content">
            <form action="datos.php" id="form_contact" method="POST">
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
        </div--> 
        <!--div class="hrs">
             <hr class="hr">
         </div-->    
        <section class="footer_content">
            <div class="wrap_footer_left">
                <div class="newsletter">
                    <h3>suscribete a nuestro newsletter</h3>
                    <form>
                        <div class="column_form_footer">
                            <input type="text" name="email" id="email_neesletter" placeholder="ejemplo@gmail.com">
                        </div>
                        <div class="button_form_footer">
                            <input type="submit" name="" id="" value="ENVIAR">
                        </div>
                    </form>
                </div>
            <div class="footer_logos">
                 <div class="icons">
                     <a href="https://www.facebook.com/" id="fac" target="blank"></a>
                     <a href="https://www.twitter.com/" id="twi" target="blank"></a>
                     <a href="https://www.instagram.com/" id="ins" target="blank"></a>
                 </div>
            </div>
         </div>
         <div class="copyright">
             <p>pitchfork games 2020</p>
        </section>
     </section>
 </footer>
</html>