<?php get_header(); ?>
<hr class="mt-0">

<div class="wpjk_blog row">
<!--    <div class="col-12 text-center">-->
<!--        <h1>Blog</h1>-->
<!--    </div>-->
     <?php if (have_posts()): while ( have_posts() )  : the_post(); ?>
        <div class="col-lg-6">
            <div class="wpjk_blog-single-post my-3 p-3">
                <a href="<?php the_permalink(); ?>" alt="Go to <?php the_title() ?>">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium-large');
                    }
                    else { ?>
                        <img src="<?php echo get_bloginfo('template_directory') ?>/img/placeholder-2.jpg" alt="Post thumbnail" class="wp-post-image">
                    <?php }
                    ?>
                </a>
                <article class="p-2">
                    <span class="date"><?php the_date() ?></span>
                    <header>
                        <a href="<?php the_permalink(); ?>" alt="Go to <?php the_title() ?>">
                            <h2><?php the_title() ?></h2>
                        </a>
                    </header>
                    <?php
                    $content = get_the_content();

                    if ( ! has_excerpt() ) {
                        echo '<p>';
                        echo wp_trim_words( $content, 15);
                        echo '</p>';
                    } else {
                        the_excerpt();
                    }
                    ?>

                    <a href="<?php the_permalink(); ?>" class="btn btn-sm"  alt="Go to <?php the_title() ?>">
                        Czytaj więcej
                    </a>
                </article>
            </div>
        </div>
    <?php endwhile; else: ?>
        <p>Brak postów</p>
    <?php endif; ?>


</div>
<?php get_footer(); ?>

