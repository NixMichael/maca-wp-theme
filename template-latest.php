<?php
/** Template Name: Latest */
get_header(); ?>

<?php
query_posts('cat=3');
?>
<div class="container">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="news-content">
    <div class="post-image">
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/post-images/default-image0<?php echo rand(1, 5); ?>.jpg" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </div>
    <div class="post-title">
        <h2><?php the_title(); ?></h2>
        <p><?php the_time('l jS M Y'); ?></p>
    </div>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
        <a class="btn-link" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a>
    </div>
</div>
<?php
endwhile;
endif;
?>
</div>
<?php get_footer(); ?>