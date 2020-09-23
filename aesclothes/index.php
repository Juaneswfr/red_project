<!DOCTYPE html>
<html lang="es">

    <body>
        <?php 

            include $_SERVER['DOCUMENT_ROOT'].'/view/header.php';
            //INCLUDE A INCLUDE_ONCE
        ?>
        <main>
            <header id="index">
               <div class="wrapper">
                   <div class="initial"><a href="/index.php"><img src="/images/logos_and_particles/first_icon_1.png"></a></div>
                       <nav>
                           <a href="/products.php">ROPA</a>
                           <a href="/products.php">ACCESORIOS</a>
                           <a href="#">FAQ</a>
                           <a href="#wrap_contact">NEWSLETTER</a>
                           <a href="/contact.php">CONTACTO</a>
                       </nav>
                   </div>
               </div>
            </header>
        </main>
        <section id="cloth_banner_1">
            <section class="banner_content">
                <div class="banner_1">
                    <h2> colección Elegante</h2>
                    <p> hasta un <span>30%</span> de descuento en productos seleccionados</p>
                    <a href="/products.php#elegant_promo">Saber más</a>
                </div>
            </section>
        </section>
        <section ID="cloth_banner_2">
            <section class="banner_content">
                <div class="banner_2">
                    <h2> colección de verano</h2>
                    <p> hasta un <span>33%</span> de descuento en compras de productos seleccionados de la colección</p>
                    <a href="/products.php#collection_1">Saber más</a>
                </div>
            </section>
        </section>
        <section id="cloth_banner_3">
            <section class="banner_content">
                <div class="banner_3">
                    <h2> Accesorios flame</h2>
                    <p> hasta un <span>30%</span> de descuento en accesorios de la nueva coleccion!</p>
                    <a>Saber mas</a>
                </div>
            </section>
        </section>
        <section id="info_index_body"> 
            <section>
                <div class="best_selling">
                    <div class="best_selling_products">
                        <h3>Lo Mas Vendido</h3>
                        <div class="products_list">
                            <ul>
                                <li>
                                    <a href=" products_pages/classic_converse.php"><img src="./images/Products/product_images/clothing/shoes/unisex/classic_converses.jpg"></a>
                                    <a href="./classic_vans.php"><img src=" /images/Products/product_images/clothing/shoes/unisex/classic_vans.jpg"></a>
                                    <a href="./trasher_hoodie.php"><img src=" /images/Products/product_images/clothing/hoodies/men/trasher_hoodie.jpg"></a>
                                    <a href="./gucci_belt.php"><img  class="s" src=" /images/Products/product_images/accesories/belts/men/gucci_elegant_belt.jpg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </section>
 
        <?php 
        include_once $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
        ?>

    </body>
</html>
