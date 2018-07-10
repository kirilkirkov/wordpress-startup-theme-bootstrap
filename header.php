<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="utf-8">
        <meta name="description" content='<?= get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ?>'>
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta property="og:description" content='<?= get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ?>'>
        <meta property="og:url" content="">
        <meta property="og:title" content="<?= get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) ?>">
        <meta property="og:type" content="website">
        <title><?= get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) ?></title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.css">
    </head>
    <body>
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
            ?>
            <img src="<?= esc_url($logo[0]) ?>" alt="Каризматик панчарево - Салон за красота" class="img-responsive logo">
            <?php
        } else {
            echo 'Не е добавено лого';
        }
        ?>