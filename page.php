<?php get_header(); ?>
<hr class="mt-0">

<article class="py-4">
    <header>
        <h1 class="mb-4">
            <?php if(get_the_title()): the_title(); endif; ?>
        </h1>
    </header>
    <div class="py-2">
        <?php the_content(); ?>
    </div>

</article>
<?php if(is_page(41)) : ?>
<div class="technology-stack justify-content-center mb-4">
    <img src="<?php echo get_bloginfo('template_directory') ?>/img/technology-stack(1).jpg" alt="">
    <img src="<?php echo get_bloginfo('template_directory') ?>/img/php.jpg" alt="">
    <img src="<?php echo get_bloginfo('template_directory') ?>/img/technology-stack(2).jpg" alt="">
    <img src="<?php echo get_bloginfo('template_directory') ?>/img/technology-stack(3).jpg" alt="">
    <img src="<?php echo get_bloginfo('template_directory') ?>/img/technology-stack(4).jpg" alt="">
</div>

<?php endif; ?>
<?php get_footer(); ?>
