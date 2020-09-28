<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width,intial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title><?php bloginfo('name') ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head() ?>
    </head>
    <body>
    <nav class="navbar site-nav navbar-expand-lg">
        <a href="<?php bloginfo('url'); ?>" class="navbar-brand site-logo"><img class="img-logo img-thumbnail" alt="logo" src="<?php echo get_template_directory_uri() . '/img/logo.png' ; ?>" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-support-content">
                <img class="img-thumbnail social-contact-icon" src="<?php echo get_template_directory_uri() . '/img/bars.svg' ; ?>" />
        </button>
        <div class="collapse navbar-collapse" id="navbar-support-content">
            <?php add_bootstrap_menu(); ?>
            
            <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=3eaae45f-5343-4f21-9b58-3e3296b59ce6" async></script>
            <button class="bokunButton" disabled id=bokun_3740496e_0869_42f8_9d23_76cc8cf154e9 data-src="https://widgets.bokun.io/online-sales/3eaae45f-5343-4f21-9b58-3e3296b59ce6/product-list/14397?partialView=1" >Book now</button>
            
            <a href="https://www.facebook.com/livenippon" class="nav-item"><img class="img-thumbnail social-contact-icon" src="<?php echo get_template_directory_uri() . '/img/facebook.svg' ; ?>" /></a>
            <a href="https://www.instagram.com/livenippon.official/?utm_source=ig_profile_share&igshid=1r270baai410v" class="nav-item"><img class="img-thumbnail social-contact-icon" src="<?php echo get_template_directory_uri() . '/img/instagram.svg' ; ?>" /></a>
        </div>
    </nav>