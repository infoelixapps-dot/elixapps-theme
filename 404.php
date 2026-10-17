<?php
/**
 * 404 Error Page Template
 *
 * @package ElixApps
 */

get_header();
?>

<section class="hero-section" style="min-height: 85vh; display: flex; align-items: center; justify-content: center; text-align: center;">
    <div class="container" style="max-width: 680px; position: relative; z-index: 2;">
        <div class="section-badge" style="margin-bottom: 1.5rem; background: rgba(244, 63, 94, 0.15); border-color: rgba(244, 63, 94, 0.35); color: #fda4af;">
            <span class="dot" style="background-color: var(--rose); box-shadow: 0 0 10px var(--rose);"></span>
            Status 404: Not Found
        </div>

        <h1 style="font-size: clamp(3.5rem, 8vw, 5.5rem); font-family: var(--font-mono); margin-bottom: 1rem; color: #ffffff; letter-spacing: -0.04em;">
            404<span class="gradient-text-accent">&lt;/&gt;</span>
        </h1>

        <h2 style="font-size: 1.85rem; margin-bottom: 1rem; color: #ffffff; font-weight: 800; letter-spacing: -0.02em;">
            Workflow Endpoint Not Found
        </h2>

        <p style="color: #94a3b8; font-size: 1.12rem; line-height: 1.75; margin-bottom: 2.5rem;">
            The page or webhook route you were looking for doesn't exist, has been archived, or was moved during our latest deployment sprint.
        </p>

        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                <span>Return to Home</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>" class="btn btn-secondary">
                <span>View All Services</span>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
