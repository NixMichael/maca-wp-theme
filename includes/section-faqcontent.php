<?php if (have_posts()): while (have_posts()): the_post();?>

    <div class="faq-content">
            <h3 class="sub-title"><?php the_title(); ?></h3>
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <?php the_content(); ?>
    </div>

<?php endwhile; else: endif; ?>