<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="row">
    <div class="col-12 wpjk_main">
        <img src="<?php echo get_bloginfo('template_directory') ?>/img/web-img-2.jpg" alt="Main content picture">
        <div class="text-center py-5">
            <h1 class="mb-3">Jestem programistką, <span>web developerem</span></h1>
            <?php dynamic_sidebar('front_page_main_text') ?>
            <a href="">Czytaj więcej o mnie...</a>
        </div>
    </div>

    <section class="col-12 text-center py-5 mt-4">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">W czym mogę Ci <span>pomóc?</span></h2>
            </div>
            <div class="col-md-4">
                <div class="wpjk_skill-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="primary" d="M4 2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm0 2v10h16V4H4zm4 16a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v.59l.7.7A1 1 0 0 1 16 23H8a1 1 0 0 1-.7-1.7l.7-.71V20z"></path><path class="secondary" d="M2 14h20v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2z"></path></svg>
                    <?php dynamic_sidebar('front_page_skill_1') ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wpjk_skill-container darken">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="primary" d="M5 13h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm10 0h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zM5 3h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2z"></path><path class="secondary" d="M18 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0V8h-2a1 1 0 0 1 0-2h2V4a1 1 0 0 1 2 0v2z"></path></svg>                <?php dynamic_sidebar('front_page_skill_2') ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wpjk_skill-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="primary" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"></path><path class="secondary" d="M21 20v-1a5 5 0 0 0-5-5H8a5 5 0 0 0-5 5v1c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2z"></path></svg>                <?php dynamic_sidebar('front_page_skill_3') ?>
                </div>
            </div>
            <div class="col-12 mt-4">
                <a href="<?php echo get_permalink( get_page_by_path( 'portfolio' ) ) ?>" class="btn">Zobacz moje portfolio</a>
            </div>
        </div>
    </section>

    <section class="col-12 row text-center py-5 mt-4">

    </section>

    <div class="col-12 row">
        <?php get_template_part('content') ?>
    </div>
</main>

<?php get_footer(); ?>



