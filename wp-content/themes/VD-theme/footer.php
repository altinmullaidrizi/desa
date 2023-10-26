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
        <div class="row footer-container">

            <div class="col-md-6 left-part">
                <img class="logo" src="<?= get_theme_file_uri() ?>/images/logo-footer.svg" alt="">
            </div>
            <div class="col-md-6 right-part">
                <p style="margin-bottom:0">DESA AUTOGLASS AG |<br style="display:none"> Thunstrasse 162 |<br style="display:none"> 3074 Muri b. Bern </p>
                <div class="d-flex">
                    <a style="margin-right:5px"
                        href="mailto:reservation@desa-autoglass.ch">reservation@desa-autoglass.ch </a>
                    <p class="helpline"> | Helpline <a href="tel: 0848804022">0848 80 40 22</a></p>
                </div>
                <div class="language">
                    <a class="active" href="">DE</a> <span>|</span> <a href="">FR</a> <span>|</span><a href="">IT</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="after-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left">
                <div class="links"><a href="https://reservation.desa-autoglass.ch/" class="pr-4">Datenschutzerklärung</a></div>
            </div>
            <div class="col-md-6 right">
                <a href="https://impact-digital.ch/" target="_blank">
                    Webdesign by Impact Digital Gmbh
                </a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</html>