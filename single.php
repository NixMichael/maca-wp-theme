<?php get_header(); ?>

<div class="container">
    <?php get_template_part('includes/section', 'content'); ?>

    <div class="navigate-posts" style="margin-top: 3rem">
        <div>
            <?php previous_post_link('%link', '<< Previous post', TRUE )?>
        </div>
        <div>
            <?php next_post_link('%link', 'Next post >>', TRUE )?>
        </div>
    </div>
</div>
<?php get_footer(); ?>