<?php
/* Template Name: À propos */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
	
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
                    
                    
            
<!--					// Include the page content template.-->
<!--//					get_template_part( 'content', 'page' );-->
                   
                    <section class = 'banner-titre' style = 'background-image:url("<?php the_post_thumbnail_url('full'); ?>"); '>
                        <div class = 'banner_filter'></div>
                        <h1><?php the_title(); ?></h1>
                    </section>
                    
                    
                    <section class = 'section-content'>
                    	<h2><?php the_field('titre_mandat'); ?></h2>
                            <hr>
                            <div><?php the_field('contenu_mandat'); ?></div>
                            
                        <h2><?php the_field('titre_historique'); ?></h2>
                          	<hr>
                            <div><?php the_field('contenu_historique'); ?></div>
                            
                        <h2><?php the_field('titre_membres_du_ca'); ?></h2>
                            <hr>
                            
                            <h3><?php the_field('titre_membres_fondateurs'); ?></h3>
                        		<div><?php the_field('liste_membres_fondateurs'); ?></div>
                                
                            <h3><?php the_field('titre_presidentes'); ?></h3>
                            	<div><?php the_field('liste_presidentes'); ?></div>
                                
                        <h2><?php the_field('titre_politique_culturelle'); ?></h2>
                            <hr>
                            <?php the_field('contenu_politique_culturelle'); ?>
                            
                    </section>
                    
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
			

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();
