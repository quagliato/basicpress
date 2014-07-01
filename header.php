<!DOCTYPE html>
<html lang="pt"> <!-- Don't forget changing language! -->
    <head>	
        <link rel="canonical" href="<?=get_bloginfo('url')?>" />

        <meta charset="UTF-8" />

        <meta name="description" content="<?=get_bloginfo('description')?>" />
        <!--meta name="keywords" content="" />
        <meta name="author" content="" /-->

        <title><?=get_bloginfo('name')?></title>

        <link rel="shortcut icon" type="image/png" href="<?=get_bloginfo('template_url')?>/_images/favicon.png" />

        <link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_url')?>/_css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_url')?>/_css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_url')?>/_css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_url')?>/_css/wp-core.css" />
        <link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_url')?>/_libs/jquery-ui/jquery-ui-1.10.3.custom.min.css" />

        <!--wp_head-->
        <?php wp_head(); ?>
        <!--/wp_head-->

        <!-- Third-party libs -->
        <script type="text/javascript" src="<?=get_bloginfo('template_url')?>/_libs/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="<?=get_bloginfo('template_url')?>/_libs/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?=get_bloginfo('template_url')?>/_libs/jquery.easing-1.3.min.js"></script>
        <!-- /Third-party libs -->

        <script>
            var rootURL = "<?=get_bloginfo('url')?>";
            var templateURL = "<?=get_bloginfo('template_url')?>";
        </script>

        <script type="text/javascript" src="<?=get_bloginfo('template_url')?>/_js/js.js"></script>

        <!--og tags (fb)-->
        <meta property="fb:admins" content="792152327" /> <!--Fill with your own FB profile ID-->
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:title" content="<?=get_bloginfo('name')?>" />
        <meta property="og:description" content="<?=get_bloginfo('description')?>" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?=get_bloginfo('name')?>"/>
        <meta property="og:url" content="<?=get_bloginfo('url')?>" />
        <meta property="og:image" content="" /> <!--TO FILL-->
        <!--/og tags-->

        <!--gplus tags-->
        <meta itemprop="name" content="<?=get_bloginfo('name')?>" />
        <meta itemprop="description" content="<?=get_bloginfo('description')?>">
        <meta itemprop="image" content=""> <!--TO FILL-->
        <!--/gplus tags-->

    </head>

