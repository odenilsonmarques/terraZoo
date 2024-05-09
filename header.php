<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seja parceiro da maior rede de petshops do Norte e Nordeste do Brasil - Terra Zoo">
    <meta name="keywords" content="terra zoo, terrazoo, parceiros, negócio, ganhar dinheiro, empreender">
    <meta name="author" content="GMZ Solutions">
    <?php
    global $post;

    // Get the post title
    $title = get_the_title($post->ID);

    // Get the post excerpt
    $excerpt = get_the_excerpt($post->ID);

    // Get the site fav icon configured on customizer
    $favicon = get_theme_mod('favicon');

    // Get the site URL
    $site_url = esc_url(home_url('/'));

    // Output the meta tags
    ?>
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($excerpt); ?>">
    <meta property="og:image" content="<?php echo esc_url($thumbnail); ?>">
    <meta property="og:url" content="<?php echo esc_url($site_url); ?>">
    <meta property="og:type" content="website">


    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <a href="<?php echo esc_html(home_url('/')); ?>">TerraZoo</a>
                    <?php
                    }
                    ?>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="menu-icon">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-x"></i>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'zoo_main_menu',
                        'container' => 'ul',
                        'container_class' => 'navbar-nav ms-auto', 
                        'menu_class' => 'navbar-nav ms-auto', 
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
                    ));

                    ?>

                    <!-- Button -->
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto teste py-2 px-3" href="http://localhost:8170/seja-nosso-parceiro/" target="_blank">
                        QUERO SER PARCEIRO
                    </a>
                </div>
            </div>
        </nav>

    </header>