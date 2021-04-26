<?php //if (have_posts()): while ( have_posts() )  : the_post(); ?>
<!--    <div class="blog-post col-12">-->
<!--        <h2>--><?php //the_title() ?><!--</h2>-->
<!--        <p>--><?php //the_content() ?><!--</p>-->
<!--        <p>--><?php //the_date() ?><!--</p>-->
<!--        <a href="--><?php //get_post_permalink(the_ID()) ?><!--">link</a>-->
<!--    </div>-->
<?php //endwhile; else: ?>
<!--    <p>Brak postów</p>-->
<?php //endif; ?>

<!--Last 3 posts-->
<?php
// the query
$the_query = new WP_Query( array(
    'posts_per_page' => 3,
));
?>

<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="blog-post col-12">
                <h2><?php the_title() ?></h2>
                <p><?php the_date() ?></p>
                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">
                    Czytaj więcej
                </a>
            </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php __('Brak wpisów'); ?></p>
<?php endif; ?>
<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Zobacz wszystkie wpisy</a>

