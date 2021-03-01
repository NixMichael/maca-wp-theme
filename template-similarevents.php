<?php 
/** Template Name: Similar Events */
get_header(); ?>

<?php
query_posts('cat=5');
?>
<div class="container">
    <p>The following organisations and events are not affiliated with Manchester Animal Climate Action, but are part of the vegan movement and are active in the Manchester area.</p>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h4 class="title"><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    <?php endwhile; endif; ?>
    <p>If you have any other questions, feel free to ask someone at the event or send us a message.</p>
</div>
<?php get_footer(); ?>