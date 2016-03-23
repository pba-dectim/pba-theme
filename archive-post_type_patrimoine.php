<?php


get_header(); ?>

    <section id="primary" class="content-area">
        <div id="content" class="site-content" role="main">


            <?php if ( have_posts() ) : ?>
<!----------------------- Image Statique pour la bannière ---------------------------------------------->
                <section class='banner-titre' style='background-image:url("<?php echo get_stylesheet_directory_uri(); ?>/img/vitrail.jpg"); '>
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
                                        'hide_empty'         => 1, 
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

                                <h3>Le Patrimoine</h3>
                                
                                <p>La Société est ouverte sans restriction à tout citoyen ou organisme intéressé au patrimoine de Boucherville, que ce soit dans ses aspects historique, culturel, architectural, religieux ou environnemental, et désireux de participer à sa mise en valeur.</p>

                        </div> 
                                   
                                   
                                    <div id="contenuRecherche">
                                      <div id="accordion">
                                                <?php
                                        while ( have_posts() ) : the_post(); 

                                    ?>
                                    				<div id="dropDownSelect">
                                                                    <div id="laFleche"><i class="fa fa-chevron-down"><h1><?php the_title(); ?></h1></i></div>
                                                                </div>
                                                    <article class="listing-post-single">
                                                        <div id="txtContenu">
                                                           
                                                           
                                                            <div class="linkContent">
                                                                <?php the_excerpt(); ?>
                                                              
                                                            </div> 
                                                             
                                                             <a class="batman" href="<?php the_permalink(); ?>">Continuer la lecture</a>
                                                        </div>
                                                        <div id="imgContenu">
															<?php the_post_thumbnail('medium'); ?>
                                                         </div>

                                                    </article>

                                                    <?php endwhile; ?>
                                       </div>
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