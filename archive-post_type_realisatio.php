<?php


get_header(); ?>

            <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        

		<?php if ( have_posts() ) : ?>

			 <section class='banner-titre' style='background-image:url("<?php echo get_stylesheet_directory_uri(); ?>/img/46-pierre-boucher-arriere.jpg"); '>
                        <div class='banner_filter'></div>
                        <h1>Nos réalisations</h1>
              </section>
              <div>
               	    
                       <div id="contenu_realisation">
                        <div id="ficheInfo" class="blockInfo">

                                <h3>Merite patrimonial</h3>
                                <br>
                                <p>Afin de stimuler l’intérêt pour l’héritage architectural de notre Ville, la Société du Patrimoine de Boucherville présidée par madame Nicole Racicot-Saia, créa le 28 septembre 2001,  les prix Mérite patrimonial.

Le Mérite Patrimonial est une reconnaissance destinée à honorer des maisons anciennes et à féliciter leurs propriétaires qui ont su garder et améliorer ces témoins de notre histoire dans le respect des traditions et des besoins de la modernité.</p>

                            </div>    	
               	        </div>
               	        
               	        
      	        
               	        
               	        
               	
               	<section id="listing-content-ajax">
                    <div id="ficheInfo" class="blockInfo">
                        <h3>CATÉGORIE(S)</h3>
                        <p><?php echo category_description( $category_id ); ?></p>
                    </div>
                  

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
                            'name'               => 'cat',
                            'id'                 => '',
                            'class'              => 'postform',
                            'depth'              => 0,
                            'tab_index'          => 0,
                            'taxonomy'           => 'realisation_category',
                            'hide_if_empty'      => false,
                            'value_field'	     => 'term_id',	
                        ); ?>
                        <?php wp_dropdown_categories( $args ); ?>           
                        <?php
                            while ( have_posts() ) : the_post(); 
                            $post_id = get_the_ID();
                        ?>
                          <div id="accordion"> 
                         
                             
                              <h1><?php the_field('date_de_la_realisation', $post_id);?><span>-</span><?php the_title(); ?></h1>
                              
                              <div>
                              
                              <p><?php the_excerpt(); ?></p>
                              <a href="<?php the_permalink(); ?>">Voir la fiche</a>
                         
                          
                              <?php the_post_thumbnail('medium'); ?>
                           
                        
                        </div>
                            <?php endwhile; ?>
                         </div>
                     
			    </section>
					<?php // Previous/next page navigation.
					twentyfourteen_paging_nav(); ?>

		<?php endif;?>
		

          </div>
	  </div><!-- #content -->
	</section><!-- #primary -->
<?php
get_footer();