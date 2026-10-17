<?php
/**
 * Footer template for ElixApps Theme
 *
 * @package ElixApps
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
</main><!-- #primary -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <!-- Brand Column -->
            <div class="footer-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                    <div class="brand-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
                <p class="footer-brand-desc">
                    Engineering next-generation Monday.com Marketplace apps and enterprise WordPress plugins that streamline workflows and supercharge productivity.
                </p>
                <div class="footer-social-links">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="GitHub">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Twitter">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="LinkedIn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://discord.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Discord">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="12" r="1"/><circle cx="15" cy="12" r="1"/><path d="M7.5 7.5c3.5-1 5.5-1 9 0M7 16.5c3.5 1 6.5 1 10 0"/></svg>
                    </a>
                </div>
            </div>

            <!-- Products Column -->
            <div class="footer-col">
                <h4 class="footer-heading"><?php esc_html_e( 'Apps & Plugins', 'elixapps' ); ?></h4>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">BoardSync for Monday.com</a></li>
                    <li><a href="<?php echo esc_url( elixapps_get_page_link( 'elix-forms-to-monday-com' ) ); ?>">Elix Forms to monday.com</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Automation Suite Pro</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">WooCommerce Sync Engine</a></li>
                </ul>
            </div>

            <!-- Navigation Column -->
            <div class="footer-col">
                <h4 class="footer-heading"><?php esc_html_e( 'Company & Services', 'elixapps' ); ?></h4>
                <?php
                if ( has_nav_menu( 'footer-menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container'      => false,
                        'menu_class'     => 'footer-links-list',
                        'fallback_cb'    => 'elixapps_footer_menu_fallback',
                    ) );
                } else {
                    elixapps_footer_menu_fallback();
                }
                ?>
            </div>

            <!-- Newsletter Column -->
            <div class="footer-col">
                <h4 class="footer-heading"><?php esc_html_e( 'Developer Updates', 'elixapps' ); ?></h4>
                <p class="footer-newsletter-text">Subscribe to our newsletter for plugin releases, API changelogs, and workflow tutorials.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to ElixApps developer updates!');">
                    <input type="email" placeholder="dev@company.com" required class="form-control" style="font-size: 0.85rem; padding: 0.6rem 0.85rem;">
                    <button type="submit" class="btn btn-primary btn-sm" style="flex-shrink: 0;">Join</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> <strong>ElixApps Studio</strong>. All rights reserved.
            </div>
            <div style="display: flex; gap: 1.5rem; align-items: center;">
                <span class="sync-live-badge">
                    <span style="width: 8px; height: 8px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
                    All Systems Operational
                </span>
                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>">Support & SLA</a>
                <a href="<?php echo esc_url( function_exists( 'get_privacy_policy_url' ) && get_privacy_policy_url() ? get_privacy_policy_url() : elixapps_get_page_link( 'privacy-policy' ) ); ?>">Privacy Policy</a>
                <a href="<?php echo esc_url( elixapps_get_page_link( 'terms' ) ); ?>">Terms</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
