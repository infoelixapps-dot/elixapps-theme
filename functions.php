<?php
/**
 * ElixApps Theme Functions and Definitions
 *
 * @package ElixApps
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'ELIXAPPS_VERSION', '3.0.0' );
define( 'ELIXAPPS_DIR', get_template_directory() );
define( 'ELIXAPPS_URI', get_template_directory_uri() );

/**
 * Automatically apply .docs-page body class for documentation pages
 */
function elixapps_body_classes( $classes ) {
    if ( is_page_template( 'page-docs.php' ) || is_page( 'docs' ) || is_page( 'documentation' ) || is_page( 'privacy-policy' ) || is_page( 'terms' ) || is_singular( 'post' ) ) {
        $classes[] = 'docs-page';
    }
    return $classes;
}
add_filter( 'body_class', 'elixapps_body_classes' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function elixapps_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 630, true );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 220,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Responsive embedded content
    add_theme_support( 'responsive-embeds' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Navigation Menu', 'elixapps' ),
        'footer-menu'  => esc_html__( 'Footer Navigation Menu', 'elixapps' ),
    ) );
}
add_action( 'after_setup_theme', 'elixapps_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function elixapps_enqueue_assets() {
    // Google Fonts: Plus Jakarta Sans, Inter & JetBrains Mono — Design B
    wp_enqueue_style(
        'elixapps-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Theme Main Stylesheet
    wp_enqueue_style(
        'elixapps-main-style',
        ELIXAPPS_URI . '/assets/css/main.css',
        array('elixapps-fonts'),
        ELIXAPPS_VERSION
    );

    // Root Style
    wp_enqueue_style(
        'elixapps-style',
        get_stylesheet_uri(),
        array('elixapps-main-style'),
        ELIXAPPS_VERSION
    );

    // Theme Main Script
    wp_enqueue_script(
        'elixapps-main-script',
        ELIXAPPS_URI . '/assets/js/main.js',
        array('jquery'),
        ELIXAPPS_VERSION,
        true
    );

    // Localize Script for AJAX & Site Info
    wp_localize_script( 'elixapps-main-script', 'elixappsData', array(
        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'elixapps_nonce' ),
        'homeUrl'   => home_url( '/' ),
        'themeUrl'  => ELIXAPPS_URI,
    ) );
}
add_action( 'wp_enqueue_scripts', 'elixapps_enqueue_assets' );

/**
 * Handle Contact Form Submission via AJAX
 */
function elixapps_handle_contact_form() {
    check_ajax_referer( 'elixapps_nonce', 'security' );

    $name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $subject = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : 'App Inquiry';
    $app_type= isset( $_POST['app_type'] ) ? sanitize_text_field( wp_unslash( $_POST['app_type'] ) ) : 'General';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array(
            'message' => esc_html__( 'Please fill in all required fields (Name, Email, and Message).', 'elixapps' )
        ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array(
            'message' => esc_html__( 'Please provide a valid business email address.', 'elixapps' )
        ) );
    }

    $admin_email = get_option( 'admin_email' );
    $email_subject = sprintf( '[%s Inquiry] %s - %s', $app_type, $subject, $name );
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "App / Service Type: $app_type\n\n";
    $body .= "Message:\n$message\n\n";
    $body .= "--\nSent from ElixApps Website";

    $headers = array( 'Content-Type: text/plain; charset=UTF-8', "Reply-To: $name <$email>" );

    @wp_mail( $admin_email, $email_subject, $body, $headers );

    wp_send_json_success( array(
        'message' => esc_html__( 'Thank you! Your message has been received. Our dev team will get back to you within 24 hours.', 'elixapps' )
    ) );
}
add_action( 'wp_ajax_elixapps_contact', 'elixapps_handle_contact_form' );
add_action( 'wp_ajax_nopriv_elixapps_contact', 'elixapps_handle_contact_form' );

/**
 * Helper: Retrieve or fallback page permalinks gracefully
 */
function elixapps_get_page_link( $slug ) {
    $page = get_page_by_path( $slug );
    if ( ! $page && ( $slug === 'contact' || $slug === 'contact-us' ) ) {
        $page = get_page_by_path( 'contact-us' );
        if ( ! $page ) {
            $page = get_page_by_path( 'contact' );
        }
    }
    if ( $page ) {
        return get_permalink( $page->ID );
    }
    return home_url( '/' . $slug . '/' );
}

/**
 * Filter: Add nav-link and active classes to primary menu anchor tags
 */
function elixapps_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && $args->theme_location === 'primary-menu' ) {
        $existing = isset( $atts['class'] ) ? trim( $atts['class'] ) : '';
        $classes  = ! empty( $existing ) ? explode( ' ', $existing ) : array();

        if ( ! in_array( 'nav-link', $classes, true ) ) {
            $classes[] = 'nav-link';
        }

        $is_active = in_array( 'current-menu-item', (array) $item->classes, true )
                  || in_array( 'current_page_item', (array) $item->classes, true )
                  || in_array( 'current-menu-ancestor', (array) $item->classes, true );

        if ( $is_active && ! in_array( 'active', $classes, true ) ) {
            $classes[] = 'active';
        }

        $atts['class'] = implode( ' ', $classes );
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'elixapps_nav_menu_link_attributes', 10, 3 );

/**
 * Filter: Add dropdown indicator caret to menu items with children
 */
function elixapps_nav_menu_dropdown_icon( $item_output, $item, $depth, $args ) {
    if ( isset( $args->theme_location ) && $args->theme_location === 'primary-menu' && in_array( 'menu-item-has-children', (array) $item->classes, true ) ) {
        $caret = '<svg class="dropdown-caret" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>';
        $item_output = preg_replace( '/(<\/a>)$/i', ' ' . $caret . '$1', $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'elixapps_nav_menu_dropdown_icon', 10, 4 );

/**
 * Graceful Fallback for Primary Desktop Navigation Menu
 */
function elixapps_primary_menu_fallback() {
    $is_home     = is_front_page();
    $is_services = is_page( 'services' );
    $is_team     = is_page( 'team' );
    $is_plugin   = is_page( 'elix-forms-to-monday-com' );
    $is_docs     = is_page( 'docs' );
    $is_contact  = is_page( 'contact' ) || is_page( 'contact-us' );
    ?>
    <ul class="main-nav">
        <li class="menu-item <?php echo $is_home ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php echo $is_home ? 'active' : ''; ?>">Home</a>
        </li>
        <li class="menu-item <?php echo $is_services ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>" class="nav-link <?php echo $is_services ? 'active' : ''; ?>">Services</a>
        </li>
        <li class="menu-item <?php echo $is_team ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo esc_url( elixapps_get_page_link( 'team' ) ); ?>" class="nav-link <?php echo $is_team ? 'active' : ''; ?>">Team</a>
        </li>
        <li class="menu-item <?php echo $is_plugin ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo esc_url( elixapps_get_page_link( 'elix-forms-to-monday-com' ) ); ?>" class="nav-link <?php echo $is_plugin ? 'active' : ''; ?>">Elix Forms to monday.com</a>
        </li>
        <li class="menu-item <?php echo $is_docs ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo esc_url( elixapps_get_page_link( 'docs' ) ); ?>" class="nav-link <?php echo $is_docs ? 'active' : ''; ?>">Docs</a>
        </li>
        <li class="menu-item <?php echo $is_contact ? 'current-menu-item' : ''; ?>">
            <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="nav-link <?php echo $is_contact ? 'active' : ''; ?>">Contact Us</a>
        </li>
    </ul>
    <?php
}

/**
 * Graceful Fallback for Mobile Navigation Drawer
 */
function elixapps_mobile_menu_fallback() {
    $is_home     = is_front_page();
    $is_services = is_page( 'services' );
    $is_team     = is_page( 'team' );
    $is_plugin   = is_page( 'elix-forms-to-monday-com' );
    $is_docs     = is_page( 'docs' );
    $is_contact  = is_page( 'contact' ) || is_page( 'contact-us' );
    ?>
    <ul class="mobile-menu-ul">
        <li class="<?php echo $is_home ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li class="<?php echo $is_services ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>">Services</a></li>
        <li class="<?php echo $is_team ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( elixapps_get_page_link( 'team' ) ); ?>">Team</a></li>
        <li class="<?php echo $is_plugin ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( elixapps_get_page_link( 'elix-forms-to-monday-com' ) ); ?>">Elix Forms to monday.com</a></li>
        <li class="<?php echo $is_docs ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( elixapps_get_page_link( 'docs' ) ); ?>">Docs</a></li>
        <li class="<?php echo $is_contact ? 'current-menu-item' : ''; ?>"><a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>">Contact Us</a></li>
    </ul>
    <?php
}

/**
 * Graceful Fallback for Footer Menu
 */
function elixapps_footer_menu_fallback() {
    ?>
    <ul class="footer-links-list">
        <li><a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>">Custom Monday Apps</a></li>
        <li><a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>">WordPress Plugin Dev</a></li>
        <li><a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>">API Integration Services</a></li>
        <li><a href="<?php echo esc_url( elixapps_get_page_link( 'team' ) ); ?>">Meet the Developers</a></li>
        <li><a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>">Get in Touch</a></li>
    </ul>
    <?php
}

