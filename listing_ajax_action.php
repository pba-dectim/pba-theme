<?php if ( have_posts() ) : 


while ( have_posts() ) : the_post(); 

?>
 <article class="listing-post-single">
    <h1><?php the_field('date_de_la_realisation', $post_id);?><span>-</span><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="test" />
         <a href="<?php the_permalink(); ?>">Voir la fiche</a>               
</article>