<?php get_header() ?>
        <section class="content col-9"> 
        <section class= "category">
                <h3 class=" b-black t-white category__title" style= 
                    "display: inline-block;
                    padding: .2em .4em .2em;
                    margin-top: 0.5em;
                    font-size: 1em;"
                >Tecnología</h3>
                <div class="row category__list" style="
                    border-top: 3px solid black;
                    padding: .7em;">
                <?php
                    $args = array( 'post_type' => 'post', 'category_name'=> 'tecnología', 'post_per_page' => 3 );
                    $col_the_query = new WP_Query( $args );
                    if ( $col_the_query ->have_posts() ) : 
                        while ( $col_the_query ->have_posts() ) : $col_the_query->the_post(); ?>
                        <a href="<?php the_permalink()?>" class="col-4 t-black category__link">
                            <div class="card">
                                <figure class="card-img-top"> 
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                            the_post_thumbnail();
                                        endif;
                                    ?> 
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title card__title"style="font-size: 20px;
    font-weight: bold;"><?php the_title()?></h5>
                                    <p class="card-text card__text"style="font-size: 12px;"><?php the_excerpt()?></p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
            </section>
            <section class= "category">
                <h3 class=" b-black t-white category__title" style= 
                    "display: inline-block;
                    padding: .2em .4em .2em;
                    margin-top: 0.5em;
                    font-size: 1em;"
                >Redes</h3>
                <div class="row category__list" style="
                    border-top: 3px solid black;
                    padding: .7em;">
                <?php
                    $args = array( 'post_type' => 'post', 'category_name'=> 'redes', 'post_per_page' => 3 );
                    $col_the_query = new WP_Query( $args );
                    if ( $col_the_query ->have_posts() ) : 
                        while ( $col_the_query ->have_posts() ) : $col_the_query->the_post(); ?>
                        <a href="<?php the_permalink()?>" class="col-4 t-black category__link">
                            <div class="card">
                                <figure class="card-img-top"> 
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                            the_post_thumbnail();
                                        endif;
                                    ?> 
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title card__title" style="font-size: 20px;
    font-weight: bold;" ><?php the_title()?></h5>
                                    <p class="card-text card__text"style="font-size: 12px;"><?php the_excerpt()?></p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
            </section>
            <section class= "category">
                <h3 class=" b-black t-white category__title" style= 
                    "display: inline-block;
                    padding: .2em .4em .2em;
                    margin-top: 0.5em;
                    font-size: 1em;"
                >Videojuegos</h3>
                <div class="row category__list" style="
                    border-top: 3px solid black;
                    padding: .7em;">
                <?php
                    $args = array( 'post_type' => 'post', 'category_name'=> 'videojuegos', 'post_per_page' => 3 );
                    $col_the_query = new WP_Query( $args );
                    if ( $col_the_query ->have_posts() ) : 
                        while ( $col_the_query ->have_posts() ) : $col_the_query->the_post(); ?>
                        <a href="<?php the_permalink()?>" class="col-4 t-black category__link">
                            <div class="card">
                                <figure class="card-img-top"> 
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                            the_post_thumbnail();
                                        endif;
                                    ?> 
                                </figure>
                                <div class="card-body">
                                    <h5 class="card-title card__title"style="font-size: 20px;
    font-weight: bold;"><?php the_title()?></h5>
                                    <p class="card-text card__text"style="font-size: 12px;"><?php the_excerpt()?></p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
            </section>
            </section>  
        <aside class="sidebar col-3">
            Publicidad
        </aside>    
                
<?php get_footer() ?>