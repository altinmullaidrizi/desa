<?php
$logo = get_field('main_logo', 'options');
$has_page_banner = get_field('has_page_banner');
if (!$has_page_banner) {
    $header_color_class = ' dark-background';
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow" />

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        ?>
    </title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php wp_head(); ?>


</head>

<body>


    <header class="header">
        <div class="container">
            <div class="header-wrapper">

                <div class="header-logo">
                    <a href="<?= get_home_url() ?>">
                        <img class="logo" src="<?= get_theme_file_uri() ?>/images/impact-rec-logo.svg" alt="">
                    </a>
                </div>
                <div class="nav-items d-none d-lg-flex">
                    <ul>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/personenwagen/">Personenwagen</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/truck-bus/">Truck & Bus</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/flottenpartner/">Flottenpartner</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/filialen/">Filialen</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/ueber-uns/">Über uns</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/faq/">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="get-in-touch d-none d-lg-flex">
                    <a target="blank" href="https://reservation.desa-autoglass.ch/">
                        Termin online vereinbaren
                    </a>
                </div>
                <div class="d-flex d-lg-none justify-content-center align-items-center open-menu " id="open-menu">
                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="2" fill="#020B25"></rect>
                        <rect y="6" width="24" height="2" fill="#020B25"></rect>
                        <rect y="12" width="24" height="2" fill="#020B25"></rect>
                    </svg>
                </div>

                <div class="mobile-nav-items d-none" id="mobile-nav-items">
                    <ul class="d-flex col">
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/personenwagen/">Personenwagen</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/truck-bus/">Truck & Bus</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/flottenpartner/">Flottenpartner</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/filialen/">Filialen</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/ueber-uns/">Über uns</a>
                        </li>
                        <li>
                            <a target="blank" href="https://www.desa-autoglass.ch/faq/">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="icon-bar">
            <div class="icon-wrapper">
                <div class="">
                    Kontaktieren
                    Sie Uns
                </div>
            </div>
            <div class="box-details">
                <div class="box-item">
                    <p style="margin-right:5px">Tel.:</p><a href="tel:0718400124"> 071 / 840 01 24</a>
                </div>
                <div class="box-item">
                    <p style="margin-right:5px">Email:</p> <a style="white-space: nowrap"
                        href="mailto:info@digital-rec.ch">info@digital-rec.ch</a>
                </div>
            </div>
        </div>
    </header>