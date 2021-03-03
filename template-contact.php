<?php

/** Template Name: Contact Page */

get_header();

?>

<div class="container">
    <div class="contact">
        <div>
            <form action="/" method="post">
                <div>
                    <div>
                        <label for="name">Name</label>
                        <input type="text" id="name"/>
                    </div>
                    <div>
                        <label for="email">Your email</label>
                        <input type="text" id="email"/>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="message">Message</label>
                        <textarea id="message"></textarea>
                    </div>
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
        <div>
            <div class="highlight-area">
                <?php the_content(); ?>
            </div>
            <div class="contact-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Manchester_Outreach_04b.png" alt="Outreach team in Manchester">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>