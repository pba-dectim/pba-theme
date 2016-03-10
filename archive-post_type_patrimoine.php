<?php


get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        

		<?php if ( have_posts() ) : ?>

			 <section class='banner-titre' style='background-image:url("<?php echo get_stylesheet_directory_uri(); ?>/img/46-pierre-boucher-arriere.jpg"); '>
                        <div class='banner_filter'></div>
                        <h1>Le patrimoine</h1>
              </section>
              <div>
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
                        <h3>CATÉGORIE(S)</h3>
                        <p><?php echo category_description( $category_id ); ?></p>
                    </div> 
                    <div>
                      
                        <?php
                            while ( have_posts() ) : the_post(); 
                            
                        ?>
                         <article class="listing-post-single">
                             <div>
                              <h1><?php the_title(); ?></h1>
                              <p><?php the_excerpt(); ?></p>
                              <a href="<?php the_permalink(); ?>">Voir la fiche</a>
                             </div>
                             <div>
                              <?php the_post_thumbnail('medium'); ?>
                             </div>
                        </article>
                        
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