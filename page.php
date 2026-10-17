<?php
/**
 * Generic Page & Legal Template
 * High-Tech SaaS & Developer Aesthetic
 *
 * @package ElixApps
 */

get_header();

while ( have_posts() ) :
    the_post();

    $post_slug = get_post_field( 'post_name', get_the_ID() );
    $post_title = get_the_title();
    $raw_content = get_the_content();
    $is_privacy = ( $post_slug === 'privacy-policy' || strpos( strtolower( $post_slug ), 'privacy' ) !== false || strpos( strtolower( $post_title ), 'privacy' ) !== false );
    $is_terms = ( $post_slug === 'terms' || strpos( strtolower( $post_slug ), 'terms' ) !== false );
    
    // Calculate estimated reading time
    $word_count = str_word_count( strip_tags( $raw_content ) );
    if ( $word_count < 100 && ( $is_privacy || $is_terms ) ) {
        $reading_time = 6; // minutes estimated for default policy
    } else {
        $reading_time = max( 1, ceil( $word_count / 200 ) );
    }

    // Determine category badge text
    if ( $is_privacy || $is_terms ) {
        $category_badge = 'Legal & Compliance';
    } elseif ( is_page( 'about' ) || is_page( 'about-us' ) ) {
        $category_badge = 'Company Overview';
    } else {
        $category_badge = 'Documentation';
    }
?>

<!-- Reading Progress Bar -->
<div class="reading-progress-container">
    <div class="reading-progress-bar"></div>
</div>

<!-- Page Hero Banner -->
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
            <?php if ( $is_privacy || $is_terms ) : ?>
                <span class="text-muted">Legal</span>
                <span class="sep">/</span>
            <?php endif; ?>
            <span class="current"><?php echo esc_html( $post_title ); ?></span>
        </nav>

        <div class="section-badge" style="margin-bottom: 1.25rem;">
            <span class="dot"></span>
            <?php echo esc_html( $category_badge ); ?>
        </div>

        <h1 class="page-hero-title">
            <?php echo esc_html( $post_title ); ?>
        </h1>

        <?php if ( has_excerpt() ) : ?>
            <p class="page-hero-desc">
                <?php echo esc_html( get_the_excerpt() ); ?>
            </p>
        <?php elseif ( $is_privacy ) : ?>
            <p class="page-hero-desc">
                Learn how ElixApps handles, encrypts, and respects your data across our Monday.com marketplace applications, enterprise WordPress plugins, and workflow automation services.
            </p>
        <?php elseif ( $is_terms ) : ?>
            <p class="page-hero-desc">
                Review the terms, software license conditions, API limits, and service level agreements governing your use of ElixApps products.
            </p>
        <?php endif; ?>

        <!-- Document Meta Details Bar -->
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
                <span>Status: <strong style="color: var(--emerald);">Effective & Verified</strong></span>
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

<!-- Page Content & Document Layout -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="doc-layout-grid">
            
            <!-- Left / Main Article Container -->
            <div class="doc-content-area">
                <div class="doc-card">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php
                            $has_custom_content = ! empty( trim( $raw_content ) );

                            if ( $has_custom_content ) :
                                the_content();
                            elseif ( $is_privacy ) :
                                // Comprehensive Modern Default Privacy Policy for ElixApps
                                ?>
                                <div class="doc-callout security">
                                    <div class="doc-callout-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                        </svg>
                                    </div>
                                    <div class="doc-callout-content">
                                        <h4>Commitment to Privacy & Developer Integrity</h4>
                                        <p>At <strong>ElixApps</strong>, data protection and developer transparency are fundamental. We do not sell your data, monetize board records, or store customer credentials unencrypted. All apps communicate over TLS 1.3 encrypted pipelines.</p>
                                    </div>
                                </div>

                                <h2>1. Overview & Scope</h2>
                                <p>This Privacy Policy describes how ElixApps Studio ("ElixApps", "we", "us", or "our") collects, protects, and handles information when you visit our website (<strong>elixapps.com</strong>), install our apps from the <strong>Monday.com Marketplace</strong> (such as <em>BoardSync</em> and <em>Smart Forms to Monday</em>), or use our <strong>WordPress Plugins</strong>.</p>
                                <p>By installing our applications or using our services, you acknowledge the processing practices outlined in this policy.</p>

                                <h2>2. Information We Collect</h2>
                                <p>We collect information only to the extent necessary to fulfill workflow integrations, authenticate API sessions, and provide prompt developer support:</p>
                                <ul>
                                    <li><strong>Account & Organization Information:</strong> Account identifier, organization name, admin email address, and Monday.com account ID provided when authorizing our marketplace apps.</li>
                                    <li><strong>Integration Credentials:</strong> Encrypted OAuth 2.0 access tokens and webhook secrets required to synchronize items between Monday.com boards and your WordPress instances.</li>
                                    <li><strong>Telemetry & Diagnostics:</strong> Anonymous operational data such as sync execution times, error codes, and plugin version numbers to diagnose performance bottlenecks.</li>
                                    <li><strong>Direct Inquiries:</strong> Name, business email, and project scope submitted through our contact forms or support channels.</li>
                                </ul>

                                <h2>3. Data Processing Matrix</h2>
                                <p>The table below summarizes the categories of data we process, our legal basis under GDPR, and retention limits:</p>

                                <div class="wp-block-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Data Category</th>
                                                <th>Purpose of Processing</th>
                                                <th>Legal Basis</th>
                                                <th>Retention Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Monday.com OAuth Tokens</strong></td>
                                                <td>Automating board webhooks and item creation</td>
                                                <td>Contract Fulfillment</td>
                                                <td>Until app uninstalled / revoked</td>
                                            </tr>
                                            <tr>
                                                <td><strong>WordPress Sync Logs</strong></td>
                                                <td>Troubleshooting webhook event deliveries</td>
                                                <td>Legitimate Interest</td>
                                                <td>30 days (auto-purged)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Contact / Support Inquiries</strong></td>
                                                <td>Answering technical questions & scoping projects</td>
                                                <td>Consent</td>
                                                <td>Up to 12 months after project close</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Website Analytics</strong></td>
                                                <td>Measuring traffic and documentation readability</td>
                                                <td>Legitimate Interest</td>
                                                <td>90 days aggregated</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h2>4. Monday.com & WordPress Integration Safeguards</h2>
                                <p>Our apps are built adhering to strict marketplace security standards:</p>
                                <ul>
                                    <li><strong>Zero Permanent Board Storage:</strong> When syncing records between Monday.com and WordPress, our servers act as an encrypted transit bridge. We do not maintain redundant permanent databases of your board rows or personal customer information.</li>
                                    <li><strong>Scoped API Permissions:</strong> Our applications request only the minimal Monday.com column and board scopes required for the specific integration recipes you activate.</li>
                                    <li><strong>Server-Side Encryption:</strong> All sensitive parameters (API keys, webhook signatures, tokens) are encrypted at rest using AES-256-GCM.</li>
                                </ul>

                                <blockquote>
                                    "Your workflow data belongs entirely to your organization. ElixApps does not sell, license, or monetize any workflow items processed through our integration engines."
                                </blockquote>

                                <h2>5. Cookies & Tracking Technologies</h2>
                                <p>Our website uses necessary and performance cookies to maintain user preferences and secure API forms:</p>
                                <ul>
                                    <li><strong>Essential Cookies:</strong> Session tokens and CSRF verification nonces required for contact submissions.</li>
                                    <li><strong>Preference Cookies:</strong> Dark/light mode theme toggles and saved navigation states.</li>
                                    <li><strong>No Third-Party Advertising Trackers:</strong> We do not deploy third-party advertising cookies, retargeting pixels, or behavioral advertising trackers on our website.</li>
                                </ul>

                                <h2>6. Your Rights Under GDPR & CCPA</h2>
                                <p>Depending on your jurisdiction (such as the European Economic Area, United Kingdom, or California), you retain statutory rights regarding your personal information:</p>
                                <ul>
                                    <li><strong>Right of Access & Portability:</strong> Request a copy of all integration telemetry and logs linked to your organization.</li>
                                    <li><strong>Right to Erasure ("Right to Be Forgotten"):</strong> Request immediate permanent deletion of all stored credentials, contact entries, and sync logs.</li>
                                    <li><strong>Right to Revoke Authorization:</strong> You can disconnect and revoke our access tokens at any moment through your Monday.com Admin Security Settings or WordPress Plugin dashboard.</li>
                                    <li><strong>Non-Discrimination:</strong> We do not alter service pricing or app capabilities if you exercise statutory privacy rights.</li>
                                </ul>

                                <h2>7. Security Architecture</h2>
                                <div class="doc-callout info">
                                    <div class="doc-callout-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <line x1="12" y1="16" x2="12" y2="12"/>
                                            <line x1="12" y1="8" x2="12.01" y2="8"/>
                                        </svg>
                                    </div>
                                    <div class="doc-callout-content">
                                        <h4>Multi-Layered Protection</h4>
                                        <p>Our infrastructure undergoes periodic dependency audits, automated static code analysis, and strict adherence to Monday.com Marketplace Security Requirements.</p>
                                    </div>
                                </div>
                                <p>We implement industry-standard technical measures, including automated SSL/TLS termination, rate limiting against DDoS threats, automated failover, and strict role-based access control (RBAC) across our deployment pipelines.</p>

                                <h2>8. Amendments & Revision Notice</h2>
                                <p>We may update this Privacy Policy periodically to reflect new app releases, API deprecations, or regulatory changes. Any significant updates will be communicated through our website banner or marketplace app release notes prior to taking effect.</p>

                                <h2>9. Data Protection Officer & Contact</h2>
                                <p>If you have any questions, wish to exercise your GDPR/CCPA rights, or need a signed Data Processing Addendum (DPA) for enterprise compliance, please reach out to our privacy officer:</p>
                                <ul>
                                    <li><strong>Email:</strong> <a href="mailto:privacy@elixapps.com">privacy@elixapps.com</a></li>
                                    <li><strong>Support Desk:</strong> <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>">elixapps.com/contact</a></li>
                                    <li><strong>Response Timeframe:</strong> Within 48 business hours</li>
                                </ul>
                                <?php
                            else :
                                // Generic Empty Page Fallback
                                ?>
                                <p>Content for this page is being updated. Please check back shortly or explore our services below.</p>
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
                                <h3>Have questions regarding our policies?</h3>
                                <p>Our engineering and legal team is available to assist with compliance inquiries, DPAs, or app security documentation.</p>
                            </div>
                            <div style="display: flex; gap: 0.75rem; flex-shrink: 0;">
                                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary btn-sm">
                                    <span>Contact Team</span>
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

                    <!-- Table of Contents Widget -->
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
                            <span>Table of Contents</span>
                        </div>
                        <ul class="doc-toc-list">
                            <!-- Populated dynamically via main.js -->
                            <li><span class="text-muted" style="font-size: 0.85rem;">Scanning document sections...</span></li>
                        </ul>
                    </div>

                    <!-- Trust & Compliance Highlights Widget -->
                    <div class="doc-widget">
                        <div class="doc-widget-title">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                            <span>Compliance Highlights</span>
                        </div>
                        <ul class="compliance-checklist">
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span>GDPR & CCPA Compliant</span>
                            </li>
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span>Monday.com API Verified</span>
                            </li>
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span>End-to-End TLS 1.3 Transport</span>
                            </li>
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span>Zero Board Data Reselling</span>
                            </li>
                            <li class="compliance-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                <span>Signed DPAs on Request</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Support Widget -->
                    <div class="doc-widget doc-help-widget">
                        <div class="doc-widget-title" style="color: var(--primary-light);">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                <line x1="12" y1="17" x2="12.01" y2="17"/>
                            </svg>
                            <span>Legal & DPA Requests</span>
                        </div>
                        <p>Need a custom Data Processing Agreement or vendor questionnaire filled out for your IT review?</p>
                        <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm" style="width: 100%; justify-content: center;">
                            Request Security Pack &rarr;
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
