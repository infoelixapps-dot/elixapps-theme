<?php
/**
 * Template Name: Front Page
 * The home page template for ElixApps Theme
 *
 * @package ElixApps
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-badge-group">
                    <span class="partner-tag monday">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/>
                        </svg>
                        Monday.com Apps Partner
                    </span>
                    <span class="partner-tag wp">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18.2A8.2 8.2 0 1 1 20.2 12 8.2 8.2 0 0 1 12 20.2z"/>
                        </svg>
                        WordPress Plugin Studio
                    </span>
                </div>

                <h1 class="hero-title">
                    Powering Workflows With <span class="gradient-text-accent">Monday.com Apps</span> & <span class="gradient-text">WordPress Plugins</span>
                </h1>

                <p class="hero-description">
                    We engineer high-performance marketplace apps, bi-directional sync engines, and bespoke plugins that eliminate manual work for modern teams.
                </p>

                <div class="hero-cta-group">
                    <a href="#products" class="btn btn-primary">
                        <span>Explore Our Apps</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>" class="btn btn-secondary">
                        <span>Custom Development</span>
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-num">50k+</div>
                        <div class="stat-label">Active Users</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">4.9/5</div>
                        <div class="stat-label">Marketplace Rating</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">99.98%</div>
                        <div class="stat-label">Sync Reliability</div>
                    </div>
                </div>
            </div>

            <!-- Hero Interactive Mockup -->
            <div class="hero-media">
                <div class="mockup-window">
                    <div class="mockup-header">
                        <div class="mockup-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="mockup-title">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg>
                            elix-sync-stream.ts &bull; Live Board Sync
                        </div>
                        <span class="sync-live-badge">
                            <span style="width: 6px; height: 6px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
                            LIVE
                        </span>
                    </div>

                    <div class="mockup-body">
                        <!-- Monday Live Board Simulation -->
                        <div class="monday-mock-board">
                            <div class="board-top">
                                <span class="board-badge">Monday.com &times; WordPress Board</span>
                                <span style="font-size: 0.75rem; color: #94a3b8;">Updated Just Now</span>
                            </div>

                            <div class="board-row">
                                <span style="font-weight: 600;">WooCommerce Order #1042</span>
                                <span class="tag-status status-done">Sync Complete</span>
                                <span style="color: #64748b; font-family: var(--font-mono); font-size: 0.75rem;">0.12s</span>
                            </div>

                            <div class="board-row">
                                <span style="font-weight: 600;">Contact Form Lead: Enterprise</span>
                                <span class="tag-status status-syncing">Webhook Trigger</span>
                                <span style="color: #64748b; font-family: var(--font-mono); font-size: 0.75rem;">Processing</span>
                            </div>

                            <div class="board-row">
                                <span style="font-weight: 600;">Inventory Level Re-index</span>
                                <span class="tag-status status-working">Scheduled</span>
                                <span style="color: #64748b; font-family: var(--font-mono); font-size: 0.75rem;">14:30 UTC</span>
                            </div>
                        </div>

                        <!-- Developer Code Block -->
                        <div class="mockup-code-block">
                            <span class="code-keyword">import</span> { mondayClient } <span class="code-keyword">from</span> <span class="code-str">"@mondaycom/apps-sdk"</span>;<br>
                            <span class="code-keyword">const</span> bridge = <span class="code-keyword">new</span> <span class="code-fn">ElixWPConnector</span>({<br>
                            &nbsp;&nbsp;endpoint: <span class="code-str">"https://elixapps.com/wp-json/elix/v2"</span>,<br>
                            &nbsp;&nbsp;realtimeWebhook: <span class="code-keyword">true</span><br>
                            });<br>
                            <span class="code-fn">bridge.dispatchItem</span>({ boardId: 928311, pulseId: 541 });
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products & Plugins Showcase Section -->
<section class="section" id="products">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <span class="dot"></span>
                Featured Solutions
            </div>
            <h2 class="section-title">Engineered For <span class="gradient-text-accent">Peak Productivity</span></h2>
            <p class="section-desc">
                From native Monday.com view widgets to battle-tested WordPress plugins, our software helps tens of thousands of teams work smarter.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="tabs-filter">
            <button class="tab-btn active" data-filter="all">All Solutions (6)</button>
            <button class="tab-btn" data-filter="monday">Monday.com Apps (3)</button>
            <button class="tab-btn" data-filter="wp">WordPress Plugins (3)</button>
        </div>

        <!-- Product Cards Grid -->
        <div class="products-grid">
            <!-- App 1: Monday BoardSync -->
            <div class="product-card" data-category="monday">
                <div>
                    <div class="product-top">
                        <div class="app-icon monday">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>
                            </svg>
                        </div>
                        <span class="category-tag monday-tag">Monday.com App</span>
                    </div>

                    <h3 class="product-title">Elix BoardSync Pro</h3>
                    <p class="product-desc">
                        Bi-directional continuous data synchronization between Monday boards and external databases, REST endpoints, and CRMs with zero sync delay.
                    </p>

                    <div class="product-features-list">
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Instant two-way field synchronization
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Automated conflict resolution engine
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Enterprise webhook triggers
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="product-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span>4.9 (420+ reviews)</span>
                    </div>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm">Get App</a>
                </div>
            </div>

            <!-- App 2: Elix Forms to monday.com -->
            <div class="product-card" data-category="wp">
                <div>
                    <div class="product-top">
                        <div class="app-icon wp">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                            </svg>
                        </div>
                        <span class="category-tag wp-tag">WordPress Plugin</span>
                    </div>

                    <h3 class="product-title">Elix Forms to monday.com</h3>
                    <p class="product-desc">
                        Bridges Contact Form 7 forms with your monday.com workspace. Whenever a user submits a form, an item is automatically created with all fields cleanly mapped.
                    </p>

                    <div class="product-features-list">
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Official monday.com GraphQL API v2
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            One-Click Smart Auto-Mapping
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Submission Logs & 1-Click Retries
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="product-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span>5.0 (WordPress.org)</span>
                    </div>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'elix-forms-to-monday-com' ) ); ?>" class="btn btn-outline btn-sm">View Details &rarr;</a>
                </div>
            </div>

            <!-- App 3: Custom Views Studio -->
            <div class="product-card" data-category="monday">
                <div>
                    <div class="product-top">
                        <div class="app-icon monday">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="3"/><path d="M3 12h1m16 0h1M12 3v1m0 16v1M5.6 5.6l.7.7m11.4 11.4.7.7M5.6 18.4l.7-.7m11.4-11.4.7-.7"/>
                            </svg>
                        </div>
                        <span class="category-tag monday-tag">Monday.com App</span>
                    </div>

                    <h3 class="product-title">Board Views & KPI Studio</h3>
                    <p class="product-desc">
                        Custom interactive board views, dynamic analytics widgets, and automated formulas for complex project tracking.
                    </p>

                    <div class="product-features-list">
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Custom Gantt & Timeline widgets
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Calculated rollups across multiple boards
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Item view card extensions
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="product-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span>4.8 (190+ reviews)</span>
                    </div>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm">Get App</a>
                </div>
            </div>

            <!-- App 4: WooCommerce Monday Dispatcher -->
            <div class="product-card" data-category="wp">
                <div>
                    <div class="product-top">
                        <div class="app-icon wp">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                            </svg>
                        </div>
                        <span class="category-tag wp-tag">WordPress Plugin</span>
                    </div>

                    <h3 class="product-title">Woo Monday Dispatcher</h3>
                    <p class="product-desc">
                        Transform WooCommerce orders into fulfillment cards on Monday boards with inventory tracking and status synchronizers.
                    </p>

                    <div class="product-features-list">
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Automated order routing by category
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Two-way tracking number syncing
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Refund & cancellation automation
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="product-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span>4.9 (310+ reviews)</span>
                    </div>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm">Download</a>
                </div>
            </div>

            <!-- App 5: Smart Form Builder -->
            <div class="product-card" data-category="monday">
                <div>
                    <div class="product-top">
                        <div class="app-icon monday">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>
                            </svg>
                        </div>
                        <span class="category-tag monday-tag">Monday.com App</span>
                    </div>

                    <h3 class="product-title">Smart Form Builder Pro</h3>
                    <p class="product-desc">
                        Build branded client-facing portals and forms that stream inputs straight into Monday board columns with validation.
                    </p>

                    <div class="product-features-list">
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Conditional logic & file attachments
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Custom domains & brand styling
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Spam protection with reCAPTCHA v3
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="product-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span>4.9 (150+ reviews)</span>
                    </div>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm">Get App</a>
                </div>
            </div>

            <!-- App 6: Elix Automations -->
            <div class="product-card" data-category="wp">
                <div>
                    <div class="product-top">
                        <div class="app-icon wp">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            </svg>
                        </div>
                        <span class="category-tag wp-tag">WordPress Plugin</span>
                    </div>

                    <h3 class="product-title">Elix Webhook Engine</h3>
                    <p class="product-desc">
                        Lightweight background worker engine that triggers secure webhooks on any WordPress action without slowing page speeds.
                    </p>

                    <div class="product-features-list">
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Zero frontend performance impact
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            Built-in exponential retry policy
                        </div>
                        <div class="product-feature-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            HMAC SHA256 payload signing
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="product-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <span>5.0 (95+ reviews)</span>
                    </div>
                    <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-outline btn-sm">Download</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bento Grid: Architecture & Capabilities (Dark Feature Showcase) -->
<section class="section section-dark" id="architecture">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <span class="dot"></span>
                Engineering Standards
            </div>
            <h2 class="section-title">Built With <span class="gradient-text">Modern Software Architecture</span></h2>
            <p class="section-desc">
                We write clean, strictly-typed, scalable code adhering to WordPress coding standards and Monday.com Apps Framework best practices.
            </p>
        </div>

        <div class="bento-grid">
            <div class="bento-card col-span-2">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3 class="bento-title">Native Marketplace Compatibility</h3>
                <p class="bento-text">
                    Our apps are built natively for the Monday.com Apps Marketplace with React, GraphQL, and OAuth 2.0. In the WordPress sphere, we adhere strictly to WordPress Plugin Guidelines, Gutenberg block architecture, and REST API conventions.
                </p>
            </div>

            <div class="bento-card">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="bento-title">Enterprise Security</h3>
                <p class="bento-text">
                    End-to-end token encryption, CSRF nonces, granular permission scoping, and strict zero-logging of confidential business payloads.
                </p>
            </div>

            <div class="bento-card">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3 class="bento-title">Sub-Millisecond Speed</h3>
                <p class="bento-text">
                    Zero bloated external libraries. Optimized database queries, object caching, and asynchronous job processing that never bog down your site.
                </p>
            </div>

            <div class="bento-card col-span-2">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="bento-title">Developer-to-Developer Support</h3>
                <p class="bento-text">
                    When you open a ticket with ElixApps, you speak directly with the software engineers who wrote the code. We provide detailed API documentation, code examples, and rapid patch releases.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner-box">
            <h2 class="cta-banner-title">Have a Custom App or Plugin Idea?</h2>
            <p class="cta-banner-desc">
                Whether you need a bespoke Monday.com workflow app, a complex WordPress plugin, or a secure API integration bridge, our engineering team is ready to build it.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary">
                    <span>Schedule Free Dev Consultation</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="<?php echo esc_url( elixapps_get_page_link( 'services' ) ); ?>" class="btn btn-secondary">
                    <span>Explore Development Services</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
