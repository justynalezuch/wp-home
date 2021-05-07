</div> <!--container-->

<footer class="wpjk_footer">
    <div class="container">
        <div class="row py-5 px-lg-5">
            <div class="col-lg-6 mb-4">
                <?php
                wp_nav_menu([
                    'theme_location'    => 'primary_menu',
                    'depth'             => 1,
                    'container'         => 'nav',
                    'container_class'   => 'wpjk_footer-menu'
                ]);
                ?>
            </div>
            <div class="col-lg-6">
<!--                <div class="row">-->
<!--                    <div class="col-1 pl-0">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-phone-ring"><path class="primary" d="M4 2h4a1 1 0 0 1 .98.8l1 5a1 1 0 0 1-.27.9l-2.52 2.52a12.05 12.05 0 0 0 5.59 5.59l2.51-2.52a1 1 0 0 1 .9-.27l5 1c.47.1.81.5.81.98v4a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2z"></path><path class="secondary" d="M22 10a1 1 0 0 1-2 0 6 6 0 0 0-6-6 1 1 0 0 1 0-2 8 8 0 0 1 8 8zm-4 0a1 1 0 0 1-2 0 2 2 0 0 0-2-2 1 1 0 0 1 0-2 4 4 0 0 1 4 4z"></path></svg>-->
<!--                    </div>-->
<!--                    <div class="col">-->
<!--                        <a href="tel:+48123456789">+48 123 456 789</a>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="row">
                    <div class="col-12 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 icon-mail"><path class="primary" d="M22 8.62V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.62l9.55 4.77a1 1 0 0 0 .9 0L22 8.62z"></path><path class="secondary" d="M12 11.38l-10-5V6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v.38l-10 5z"></path></svg>
                        <a href="mailto:justyna.kuta.programista@gmail.com">justyna.kuta.programista@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wpjk_copyright-info p-4">
            <div class="row"></div>
            <div class="col-12">
                <p>&copy Copyright Justyna Kuta 2021</p>
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ?>/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ?>/js/app.js"></script>

<?php wp_footer() ?>
</body>

</html>
