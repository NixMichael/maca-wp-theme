<?php if (have_posts()): while (have_posts()): the_post();?>

    <div class="news-content">
        <div class="post-image">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php else: ?>
                <img src="https://cdn.pixabay.com/photo/2015/08/20/15/03/cow-897533_640.jpg" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
        <div class="post-title">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="post-excerpt">
            <?php the_excerpt(); ?>
            <a class="btn-link" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a>
        </div>
    </div>

<?php endwhile; else: endif; ?>