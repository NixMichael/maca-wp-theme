<?php
/** Template Name: FAQ */
get_header(); ?>

<?php
query_posts('cat=4');
?>
<div class="container">

<span class="highlight-area">
    <h3>We've tried to answer the most common questions from newcomers here.</h3>
    <p>If you have any other questions, feel free to ask someone at an event or <a href="">send us a message.</a></p>
</span>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h4 class="title"><?php the_title(); ?></h4>
    <?php the_content(); ?>
<?php
endwhile;
endif;
// wp_reset_query();
?>
</div>
<?php get_footer(); ?>