<?php get_header(); ?>
<hr class="mt-0">

<article class="py-4">
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
    <span class="date"><?php echo get_the_date() ?></span>

    <div class="py-4 wpjk_single-post">
        <?php the_content(); ?>
    </div>

<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            --><?php //if (strlen(get_previous_post()->post_title) > 0) { ?>
<!--                <p>--><?php //previous_post_link() ?><!--</p>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!--        <div class="col text-right">-->
<!--            --><?php //if (strlen(get_next_post()->post_title) > 0) { ?>
<!--                <p>--><?php //next_post_link() ?><!--</p>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!--    </div>-->
</article>

<?php get_footer(); ?>
