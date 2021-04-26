<?php get_header(); ?>
<hr class="mt-0">

<div class="row wpjk_blog">
    <?php if (have_posts()): while ( have_posts() )  : the_post(); ?>
        <div class="col-md-6">
            <article>
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium-large');
                }
                else { ?>
                    <img src="<?php echo get_bloginfo('template_directory') ?>/img/placeholder-2.jpg" alt="post-thumbnail" class="wp-post-image">
                <?php }
                ?>
                <p class="date"><?php the_date() ?></p>

                <h2><?php the_title() ?></h2>
                <?php
                $content = get_the_content();

                if ( ! has_excerpt() ) {
                        echo '<p>';
                        echo wp_trim_words( $content, 20);
                        echo '</p>';
                    } else {
                        the_excerpt();
                    }
                ?>

                <a href="<?php the_permalink(); ?>">
                    Czytaj więcej
                </a>
            </article>
        </div>
    <?php endwhile; else: ?>
        <p>Brak postów</p>
    <?php endif; ?>
    <?php if (have_posts()): while ( have_posts() )  : the_post(); ?>
        <div class="col-md-6">
            <article>
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium-large');
                }
                else { ?>
                    <img src="<?php echo get_bloginfo('template_directory') ?>/img/placeholder-2.jpg" alt="post-thumbnail" class="wp-post-image">
                <?php }
                ?>
                <p class="date"><?php the_date() ?></p>
                <h2><?php the_title() ?></h2>

                <p><?php the_excerpt() ?></p>
                <a href="<?php the_permalink(); ?>">
                    Czytaj więcej
                </a>
            </article>
        </div>
    <?php endwhile; else: ?>
        <p>Brak postów</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>

