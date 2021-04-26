<?php get_header(); ?>
<hr class="mt-0">


<article>
    <header>
        <h1><?php the_title(); ?></h1>
    </header>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium-large');
        }
        else { ?>
            <img src="<?php echo get_bloginfo('template_directory') ?>/img/placeholder-2.jpg" alt="post-thumbnail" class="wp-post-image">
        <?php }
    ?>

    <p><?php the_content(); ?></p>

    <div>
        <?php previous_post_link() ?>
        <?php next_post_link() ?>
    </div>

</article>

<?php get_footer(); ?>
