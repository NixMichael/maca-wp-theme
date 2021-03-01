<?php
/** Template Name: FAQ */
get_header(); ?>

<?php
query_posts('cat=4');
?>
<div class="container">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h4 class="title"><?php the_title(); ?></h4>
    <?php the_content(); ?>
<?php
endwhile;
endif;
// wp_reset_query();
?>
<p>If you have any other questions, feel free to ask someone at the event or send us a message.</p>
</div>
<?php get_footer(); ?>