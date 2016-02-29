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
                        <h1><?php the_title(); ?></h1>
                        <div class = 'banner_filter'></div>
                    </section>
                    
                    
                    <section class = 'section-content'>
                        <p><?php the_content(); ?></p>
                    </section>
                    
					
				<?php endwhile; ?>
			

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();
