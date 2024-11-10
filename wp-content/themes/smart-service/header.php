<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <title>
        <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
<header>
    <div class="container">
        <?php the_custom_logo() ?>
        <nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
                'menu_class' => 'menu',
                'container' => 'ul'
            ])
            ?>
        </nav>
        <div class="contacts">
            <a href="tel:+<?php the_field('phone_back'); ?>"><?php the_field('phone_front'); ?></a>
            <?php
            wp_nav_menu([
                'theme_location' => 'languages',
                'menu_class' => 'languages',
                'container' => 'ul'
            ])
            ?>
        </div>
    </div>
</header>