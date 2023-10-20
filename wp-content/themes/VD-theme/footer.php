<?php
$footer_title = get_field('footer_title', 'options');
$footer_content = get_field('footer_content', 'options');
$footer_menu_label_1 = get_field('footer_menu_label_1', 'options');
$footer_menu_label_2 = get_field('footer_menu_label_2', 'options');
$footer_menu_label_3 = get_field('footer_menu_label_3', 'options');
$footer_menu_label_4 = get_field('footer_menu_label_4', 'options');
?>


<footer class="footer">
    <div class="container">
        <div class="row pre-footer">
            <div class="col-md-6 left-part">
                <ul class="" >
                    <li>
                        <a href="<?= get_home_url() ?>/#section-main">Startseite</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url() ?>/#section-kontakt">Lösungen</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url() ?>/#section-uber-uns">Über uns</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url() ?>/#section-qa">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 right-part">
                <ul style="align-items: center">
                    <li>
                        <a href="https://www.linkedin.com/company/impact-digital-recruiting/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 
                                19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 
                                1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row footer-container">
            <div class="col-md-4 left-part">
                <p>© 2023 Impact digital recruiting. All rights reserved.</p>
            </div>
            <div class="col-md-4 center-part">
            <img class="logo" src="<?= get_theme_file_uri() ?>/images/impact-rec-logo.svg" alt="">
            </div>
            <div class="col-md-4 right-part">
                <ul>
                    <?php
                    $menu_items = wp_get_nav_menu_items('footer-menu');

                    foreach ($menu_items as $menu_item) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        ?>
                        <li>
                            <a href="<?php echo $url; ?>">
                                <?php echo $title; ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</html>