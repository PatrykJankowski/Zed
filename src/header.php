<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#007FFF">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/zed/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/wp-content/themes/zed/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/wp-content/themes/zed/img/favicon-16x16.png" sizes="16x16">

    <link rel="stylesheet" href="/wp-content/themes/zed/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="navbar">

        <div class="navbar__logo-wrapper">
            <a class="navbar__logo" href="/" title="Zed" aria-label="Zed">
                <svg width="105" height="37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 36.637v-6.853L16.011 8.472H.314V0h28.064v6.416L12.106 28.165h17.176v8.472H0ZM85.882 0h-10.88v8.954h11.201c5.407 0 9.335 3.886 9.335 9.368 0 5.483-3.928 9.39-9.313 9.39H75.001v8.932h10.94c10.628 0 19.059-7.877 19.059-18.33C105 7.863 96.516 0 85.882 0ZM66.757 0H37.504v8.36h29.253V0ZM66.757 14.143H37.504v8.36h29.253v-8.36ZM66.757 28.278H37.504v8.359h29.253v-8.36Z" fill="#212121"/></svg>
            </a>
        </div>

        <nav class="navbar__nav-desktop">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
        </nav>

        <a href="kontakt" class="navbar__contact">
            Kontakt
        </a>

        <nav id="navbar__nav-mobile" class="navbar__nav-mobile">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
        </nav>

        <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i></div>
    </header>

    <main>
