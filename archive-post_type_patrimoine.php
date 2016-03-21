<?php


get_header(); ?>

    <section id="primary" class="content-area">
        <div id="content" class="site-content" role="main">


            <?php if ( have_posts() ) : ?>
<!----------------------- Image Statique pour la bannière ---------------------------------------------->
                <section class='banner-titre' style='background-image:url("<?php echo get_stylesheet_directory_uri(); ?>/img/46-pierre-boucher-arriere.jpg"); '>
                    <div class='banner_filter'></div>
                    <h1>Le patrimoine</h1>
                </section>
                
                
                
<!----------------------- Début archive-post-type ----------------------------------------------------->                
            <section class='section-content'>
                  
                    <div id="section_listing">
                
<!----------------------- Block Info ------------------------------------------------------------------>
                        
                           <div id="recherchePatrimoine" class="blockInfo">
                           
                                <?php $args = array(
                                        'show_option_all'    => '',
                                        'show_option_none'   => 'Veuillez choisir une catégorie à afficher',
                                        'option_none_value'  => '-1',
                                        'orderby'            => 'name', 
                                        'order'              => 'ASC',
                                        'show_count'         => 0,
                                        'hide_empty'         => 0, 
                                        'child_of'           => 0,
                                        'exclude'            => '',
                                        'echo'               => 1,
                                        'selected'           => 0,
                                        'hierarchical'       => 1, 
                                        'name'               => 'cat-selector',
                                        'id'                 => 'cat',
                                        'class'              => 'postform',
                                        'depth'              => 0,
                                        'tab_index'          => 0,
                                        'taxonomy'           => 'patrimoine_category',
                                        'hide_if_empty'      => false,
                                        'value_field'	     => 'term_id',	
                                    ); ?>
                                            <?php wp_dropdown_categories( $args ); ?>
                               
                                <section id="listing-content-ajax">
                                   
                                   
                                   <div id="ficheInfo" class="blockInfo">

                                <h3>Plaques commémoratives</h3>
                                
                                <p>Afin de bien identifier les six bâtiments classés historiques de Boucherville, en 1992, la Société du Patrimoine a procédé à l’installation de plaques commémoratives en façade de chacun d’eux.<br><br>Cette initiative sert à la fois l’architecture et l’histoire.</p>

                        </div> 
                                   
                                   
                                    <div id="contenuRecherche">
                                        
                                                <?php
                                        while ( have_posts() ) : the_post(); 

                                    ?>
                                                    <article class="listing-post-single">
                                                        <div id="txtContenu">
                                                           
                                                            <div id="dropDown">
                                                           
                                                                <h1><?php the_title(); ?></h1>
                                                                
                                                                <div id="dropDownSelect">
                                                                    <div id="laFleche"><i class="fa fa-chevron-down"></i></div>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="linkContent">
                                                                <?php the_excerpt(); ?>
                                                            </div>
                                                            <!--<a href="<?php the_permalink(); ?>">Voir la fiche</a>-->
                                                        </div>
                                                        <div id="imgContenu">
                                                            <?php the_post_thumbnail('medium'); ?>
                                                        </div>
                                                        
                                                        <div id="division"></div>
                                                        
                                                    </article>

                                                    <?php endwhile; ?>
                                    </div>
                                </section>

                            <?php // Previous/next page navigation.
                            twentyfourteen_paging_nav(); ?>

                        <?php endif;?>

                    </div>
                      
                </div>
                 
            </section>
                  
        </div>
        
        <!-- #content -->
    </section>
    <!-- #primary -->
    <?php
get_footer();