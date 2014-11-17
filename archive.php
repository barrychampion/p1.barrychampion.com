<?php
/*
Template Name: Category Travels
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
<section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php if(is_category('featured')): ?>class="featured-post"<?php endif; ?>>
    <header>
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title() ;?>"><?php the_title() ;?></a></h2>
        <small><?php the_time('F jS, Y'); ?></small>
    </header>
    <a href="<?php the_permalink(); ?>" title="<?php the_title() ;?>"><?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), "class" => "alignleft post-thumbnail")); ?></a>
    <a href="<?php the_permalink(); ?>" title="<?php the_title() ;?>" class="btn btn-bc hidden-xs">More <i class="fa fa-angle-right"></i></a>
</article>


<?php endwhile; else: ?>

    <p>Sorry, no posts to list</p>

<?php endif; ?>
</section>
