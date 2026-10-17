<?php
/**
 * Header template for ElixApps Theme
 *
 * @package ElixApps
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Brand Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                <div class="brand-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m16 18 6-6-6-6"/>
                        <path d="m8 6-6 6 6 6"/>
                        <circle cx="12" cy="12" r="2" fill="currentColor"/>
                    </svg>
                </div>
                <div class="brand-text">
                    <span class="brand-title">Elix<span>Apps</span></span>
                    <span class="brand-tag">Monday & WP Studio</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="primary-nav-container" aria-label="<?php esc_attr_e( 'Primary Navigation', 'elixapps' ); ?>">
                <?php
                if ( has_nav_menu( 'primary-menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'main-nav',
                        'fallback_cb'    => 'elixapps_primary_menu_fallback',
                    ) );
                } else {
                    elixapps_primary_menu_fallback();
                }
                ?>
            </nav>

            <!-- Header Action CTA -->
            <div class="header-actions">
                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary btn-sm">
                    <span>Start Project</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>

                <!-- Mobile Hamburger Toggle -->
                <button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'elixapps' ); ?>" aria-expanded="false">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 12h18M3 6h18M3 18h18"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div class="mobile-nav-drawer" id="mobile-drawer">
        <div class="mobile-nav-list">
            <?php
            if ( has_nav_menu( 'primary-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'mobile-menu-ul',
                    'fallback_cb'    => 'elixapps_mobile_menu_fallback',
                ) );
            } else {
                elixapps_mobile_menu_fallback();
            }
            ?>
        </div>
        <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary" style="width: 100%;">Get in Touch</a>
    </div>
</header>
<main id="primary" class="site-main">
