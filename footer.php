</section>
    <footer class="row"> 
            <section class="col-12 header__logo b-black"> 
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container' => 'nav',
                    'container_class' => 'col-12 footer__nav t-white',
                    'container_id' => '',
                    'items_wrap' => ' <ul class="nav nav__main j-center">%3$s</ul> ',
                    'menu_class' => 'nav-item nav__item',
                )) 
                ?>
                
                <figure class="header__logo__img" style="
                margin: 1em auto; 
                ">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets\img\logo2.png" class="img-fluid" alt="Viral Logo"/>
                </figure>
            </section>
    </footer>  
</body>
</html>
