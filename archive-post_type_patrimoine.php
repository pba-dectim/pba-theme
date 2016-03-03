<?php


get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        

			<?php if ( have_posts() ) : ?>

			 <section class='banner-titre' style='background-image:url("<?php get_template_directory_uri(); ?>"/img/46-pierre-boucher-arriere.jpg); '>
                        <div class='banner_filter'></div>
                        <h1>Le Patrimoine</h1>
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
	'hierarchical'       => 0, 
	'name'               => 'cat',
	'id'                 => '',
	'class'              => 'postform',
	'depth'              => 0,
	'tab_index'          => 0,
	'taxonomy'           => 'patrimoine_category',
	'hide_if_empty'      => false,
	'value_field'	     => 'term_id',	
); ?>
<?php wp_dropdown_categories( $args ); ?>   
           
                
			<?php
					
					// Start the Loop.
					while ( have_posts() ) : the_post(); 

					$post_id = get_the_ID();
			?>
                    <article class="listing-post-single">
						<h1><?php the_field('date_de_la_realisation', $post_id);?><span>-</span><?php the_title(); ?></h1>
						<?php /*?>get_template_part( 'content', get_post_format() );<?php */?>
						<p><?php the_content(); ?></p>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="test" />
                        <a href="<?php the_permalink(); ?>">Voir la fiche</a>
					</article>
					<?php endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav(); ?>

				<?php endif;
		
			?>
            </div>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
