<?php
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WSRWFW2');</script>
    <!-- End Google Tag Manager -->
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSRWFW2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_1_444)">
                    <path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4Z" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1_444">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    <a href="tel:0718400124">Anruf</a>
                </div>
                    <div class="box-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_457)">
                        <path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 3V7" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 3V7" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4 11H20" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 19H22" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 16V22" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1_457">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                <a style="white-space:no-wrap" target="blank" href="https://reservation.desa-autoglass.ch/">Onlinetermin</a>
                </div>
                <div class="box-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1_450)">
<path d="M3 7C3 6.46957 3.21071 5.96086 3.58579 5.58579C3.96086 5.21071 4.46957 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7V17C21 17.5304 20.7893 18.0391 20.4142 18.4142C20.0391 18.7893 19.5304 19 19 19H5C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17V7Z" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3 7L12 13L21 7" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_1_450">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>


                <a style="white-space:no-wrap"   href="mailto:info@desa-autoglass.ch">E-Mail</a>
                </div>
                <div class="box-item">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1_468)">
<path d="M3 12C3 12.7956 3.31607 13.5587 3.87868 14.1213C4.44129 14.6839 5.20435 15 6 15C6.79565 15 7.55871 14.6839 8.12132 14.1213C8.68393 13.5587 9 12.7956 9 12C9 11.2044 8.68393 10.4413 8.12132 9.87868C7.55871 9.31607 6.79565 9 6 9C5.20435 9 4.44129 9.31607 3.87868 9.87868C3.31607 10.4413 3 11.2044 3 12Z" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15 6C15 6.79565 15.3161 7.55871 15.8787 8.12132C16.4413 8.68393 17.2044 9 18 9C18.7956 9 19.5587 8.68393 20.1213 8.12132C20.6839 7.55871 21 6.79565 21 6C21 5.20435 20.6839 4.44129 20.1213 3.87868C19.5587 3.31607 18.7956 3 18 3C17.2044 3 16.4413 3.31607 15.8787 3.87868C15.3161 4.44129 15 5.20435 15 6Z" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15 18C15 18.7956 15.3161 19.5587 15.8787 20.1213C16.4413 20.6839 17.2044 21 18 21C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 17.2044 20.6839 16.4413 20.1213 15.8787C19.5587 15.3161 18.7956 15 18 15C17.2044 15 16.4413 15.3161 15.8787 15.8787C15.3161 16.4413 15 17.2044 15 18Z" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.70001 10.7L15.3 7.30005" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.70001 13.3L15.3 16.7" stroke="#23467F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_1_468">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>


                <a style="white-space:no-wrap; cursor: pointer" class="share" >Teilen</a>
                </div>
            </div>
        </div>
    </header>