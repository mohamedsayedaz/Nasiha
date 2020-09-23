<!DOCTYPE HTML>
<html lang="ar" dir="rtl">
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
    <nav class="navbar site-nav navbar-expand-lg navbar-dark">
        <img class="img-logo img-thumbnail img-responsive" alt="logo" src="<?php echo get_template_directory_uri() . '/img/logo.jpg' ; ?>" />
        <a href="<?php bloginfo('url'); ?>" class="navbar-brand site-logo">نصيحه</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-support-content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-support-content">
            <?php add_bootstrap_menu(); ?>
        </div>
    </nav>