<?php
/**
 * Template Name: Documentation Page
 *
 * Dedicated Light-Theme Documentation Template
 * Features: High readability (white background, dark text), auto-generated TOC,
 * code blocks, alert callouts, and sticky navigation.
 *
 * @package ElixApps
 */

// Add docs-page class to body
add_filter( 'body_class', function( $classes ) {
    $classes[] = 'docs-page';
    return $classes;
} );

get_header();

while ( have_posts() ) :
    the_post();

    $post_title = get_the_title();
    $raw_content = get_the_content();
    
    // Estimate reading time
    $word_count = str_word_count( strip_tags( $raw_content ) );
    $reading_time = max( 1, ceil( $word_count / 200 ) );
?>

<!-- Reading Progress Bar -->
<div class="reading-progress-container">
    <div class="reading-progress-bar"></div>
</div>

<!-- Documentation Hero Banner -->
<section class="page-hero-section">
    <div class="container">
        <!-- Breadcrumbs -->
        <nav class="doc-breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'elixapps' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <span>Home</span>
            </a>
            <span class="sep">/</span>
            <span class="text-muted">Docs</span>
            <span class="sep">/</span>
            <span class="current"><?php echo esc_html( $post_title ); ?></span>
        </nav>

        <div class="section-badge" style="margin-bottom: 1.25rem;">
            <span class="dot"></span>
            Documentation & Developer Guides
        </div>

        <h1 class="page-hero-title">
            <?php echo esc_html( $post_title ); ?>
        </h1>

        <?php if ( has_excerpt() ) : ?>
            <p class="page-hero-desc">
                <?php echo esc_html( get_the_excerpt() ); ?>
            </p>
        <?php else : ?>
            <p class="page-hero-desc">
                Comprehensive technical guides, integration recipes, API documentation, and configuration references for ElixApps solutions.
            </p>
        <?php endif; ?>

        <!-- Documentation Meta Bar -->
        <div class="doc-meta-bar">
            <div class="doc-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
                <span>Last Updated: <strong><?php echo esc_html( get_the_modified_date( 'F j, Y' ) ); ?></strong></span>
            </div>

            <span class="doc-meta-divider"></span>

            <div class="doc-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                <span>Est. Reading Time: <strong><?php echo esc_html( $reading_time ); ?> min read</strong></span>
            </div>

            <span class="doc-meta-divider"></span>

            <div class="doc-meta-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                <span>Status: <strong style="color: var(--emerald);">Official Guide</strong></span>
            </div>

            <button type="button" class="doc-action-btn btn-print-doc" aria-label="Print Document">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 6 2 18 2 18 9"/>
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                    <rect x="6" y="14" width="12" height="8"/>
                </svg>
                <span>Print / Save PDF</span>
            </button>
        </div>
    </div>
</section>

<!-- Content & Documentation Layout -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="doc-layout-grid">
            
            <!-- Main Content Area -->
            <div class="doc-content-area">
                <div class="doc-card">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php
                            if ( ! empty( trim( $raw_content ) ) ) :
                                the_content();
                            else :
                                // Default sample documentation content if empty
                                ?>
                                <div class="doc-callout info">
                                    <div class="doc-callout-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <line x1="12" y1="16" x2="12" y2="12"/>
                                            <line x1="12" y1="8" x2="12.01" y2="8"/>
                                        </svg>
                                    </div>
                                    <div class="doc-callout-content">
                                        <h4>Documentation Quickstart</h4>
                                        <p>This page uses the <strong>Light Documentation Theme</strong> designed for optimal readability, high contrast, and long-form technical reading.</p>
                                    </div>
                                </div>

                                <h2>1. Getting Started</h2>
                                <p>Welcome to the ElixApps documentation! All our Monday.com marketplace apps and WordPress plugins communicate via secure REST and GraphQL endpoints.</p>
                                <p>To begin configuring your integration, ensure you have active Administrator privileges on your Monday workspace and WordPress installation.</p>

                                <h2>2. Configuration & Authentication</h2>
                                <p>Authenticate your Monday API key through our encrypted settings dashboard:</p>
                                
                                <pre><code>// Example: Initializing Monday.com GraphQL Client
const mondaySdk = require("monday-sdk-js");
const monday = mondaySdk();

monday.setToken("YOUR_ENCRYPTED_API_TOKEN");
const response = await monday.api(`query { me { name email id } }`);
console.log("Authenticated as:", response.data.me.name);</code></pre>

                                <h2>3. Best Practices & Troubleshooting</h2>
                                <p>Follow these operational recommendations to ensure optimal webhook delivery:</p>
                                <ul>
                                    <li>Always verify webhook signing secrets before dispatching board automations.</li>
                                    <li>Implement exponential backoff on HTTP 429 rate limit responses.</li>
                                    <li>Rotate production tokens every 90 days in accordance with SOC2 compliance.</li>
                                </ul>

                                <div class="doc-callout tip">
                                    <div class="doc-callout-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                        </svg>
                                    </div>
                                    <div class="doc-callout-content">
                                        <h4>Developer Pro Tip</h4>
                                        <p>You can test webhooks locally with ngrok tunnels before deploying recipes to production boards.</p>
                                    </div>
                                </div>
                                <?php
                            endif;

                            wp_link_pages( array(
                                'before' => '<div class="page-links" style="margin-top: 2rem;">' . esc_html__( 'Pages:', 'elixapps' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div>

                        <!-- Document Bottom Action Card -->
                        <div class="doc-footer-cta">
                            <div>
                                <h3>Was this documentation helpful?</h3>
                                <p>Need more technical assistance or customized integration recipes? Our engineering team is happy to help.</p>
                            </div>
                            <div style="display: flex; gap: 0.75rem; flex-shrink: 0;">
                                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary btn-sm">
                                    <span>Ask an Engineer</span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </a>
                                <button type="button" class="btn btn-secondary btn-sm btn-print-doc">
                                    <span>Print</span>
                                </button>
                            </div>
                        </div>

                    </article>
                </div>
            </div>

            <!-- Right Sticky Sidebar -->
            <aside class="doc-sidebar">
                <div class="doc-sidebar-sticky">

                    <!-- Table of Contents Widget (Auto-populated by main.js) -->
                    <div class="doc-widget">
                        <div class="doc-widget-title">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="8" y1="6" x2="21" y2="6"/>
                                <line x1="8" y1="12" x2="21" y2="12"/>
                                <line x1="8" y1="18" x2="21" y2="18"/>
                                <line x1="3" y1="6" x2="3.01" y2="6"/>
                                <line x1="3" y1="12" x2="3.01" y2="12"/>
                                <line x1="3" y1="18" x2="3.01" y2="18"/>
                            </svg>
                            <span>On This Page</span>
                        </div>
                        <ul class="doc-toc-list">
                            <li><span class="text-muted" style="font-size: 0.85rem;">Scanning headings...</span></li>
                        </ul>
                    </div>

                    <!-- Developer Quick Links Widget -->
                    <div class="doc-widget">
                        <div class="doc-widget-title">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                            </svg>
                            <span>Quick Resources</span>
                        </div>
                        <ul class="compliance-checklist">
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span><a href="https://developer.monday.com" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;">Monday API Docs</a></span>
                            </li>
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span><a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>" style="color: inherit; text-decoration: none;">Custom App Studio</a></span>
                            </li>
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span><a href="<?php echo esc_url( elixapps_get_page_link( 'privacy-policy' ) ); ?>" style="color: inherit; text-decoration: none;">Security & Compliance</a></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Direct Help Box -->
                    <div class="doc-widget doc-help-widget">
                        <div class="doc-widget-title">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                <line x1="12" y1="17" x2="12.01" y2="17"/>
                            </svg>
                            <span>Need Integration Help?</span>
                        </div>
                        <p>Our developers can assist you with custom Monday.com app workflows, webhooks, or API integrations.</p>
                        <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm" style="width: 100%; justify-content: center;">
                            Contact Developer Support &rarr;
                        </a>
                    </div>

                </div>
            </aside>

        </div>
    </div>
</section>

<?php
endwhile;

get_footer();
