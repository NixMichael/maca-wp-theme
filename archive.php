<?php get_header(); ?>

<div class="container">
    <?php get_template_part('includes/section', 'newscontent'); ?>

    <div class="navigate-posts">
        <div>
        <?php if (previous_posts_link()): ?>
            <div>
                <?php previous_posts_link(); ?>
            </div>
        <?php endif; ?>
        </div>
        <div>
        <?php if (next_posts_link()): ?>
            <div>
                <?php next_posts_link(); ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>