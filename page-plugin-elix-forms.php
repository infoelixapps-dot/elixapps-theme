<?php
/**
 * Template Name: Plugin Details — Elix Forms to monday.com
 * Dedicated product showcase template for Elix Forms to monday.com WordPress plugin (Full Width)
 *
 * @package ElixApps
 */

get_header();
?>

<!-- Plugin Hero Banner (High-Tech Dark Showcase) -->
<section class="page-hero-section plugin-hero-highlight">
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
            <a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Plugins</a>
            <span class="sep">/</span>
            <span class="current">Elix Forms to monday.com</span>
        </nav>

        <div class="hero-badge-group">
            <span class="partner-tag wp">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18.2A8.2 8.2 0 1 1 20.2 12 8.2 8.2 0 0 1 12 20.2z"/>
                </svg>
                WordPress.org Verified Plugin
            </span>
            <span class="partner-tag monday">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/>
                </svg>
                monday.com GraphQL API v2
            </span>
            <span class="partner-tag wp" style="color: #93c5fd; border-color: rgba(59, 130, 246, 0.35); background: rgba(37, 99, 235, 0.12);">
                Contact Form 7 Dedicated
            </span>
        </div>

        <h1 class="page-hero-title" style="font-size: clamp(2.4rem, 4.6vw, 3.8rem); max-width: 950px;">
            Elix Forms to <span class="gradient-text-accent">monday.com</span>
        </h1>

        <p class="page-hero-desc" style="max-width: 860px;">
            Elix Forms to monday.com bridges your Contact Form 7 forms with your monday.com workspace. Whenever a user submits a form on your site, an item is automatically created on your designated monday.com board with all fields cleanly mapped.
        </p>

        <!-- Action Buttons -->
        <div class="plugin-hero-actions" style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; margin-top: 2rem; margin-bottom: 2.25rem;">
            <a href="https://wordpress.org/plugins/elix-forms-to-monday-com/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                <span>Download on WordPress.org</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
            <a href="#visual-tour" class="btn btn-secondary">
                <span>Explore Visual Tour</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
            </a>
            <a href="<?php echo esc_url( elixapps_get_page_link( 'docs' ) ); ?>" class="btn btn-outline" style="color: #cbd5e1; border-color: rgba(255, 255, 255, 0.2);">
                <span>Documentation</span>
            </a>
        </div>

        <!-- Meta Strip -->
        <div class="plugin-meta-strip">
            <div class="meta-strip-item">
                <span class="meta-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <span><strong>5.0 / 5.0</strong> (Verified Rating)</span>
            </div>
            <div class="meta-strip-divider"></div>
            <div class="meta-strip-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                <span><strong>10,000+</strong> Active Installs</span>
            </div>
            <div class="meta-strip-divider"></div>
            <div class="meta-strip-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                <span><strong>100% Free & Open Source</strong> (GPLv2)</span>
            </div>
            <div class="meta-strip-divider"></div>
            <div class="meta-strip-item">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Tested up to <strong>WordPress 6.5</strong></span>
            </div>
        </div>
    </div>
</section>

<!-- Visual Pipeline Architecture Diagram Section -->
<section class="section" style="padding: 4rem 0 3.5rem; background: #ffffff; border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 760px; margin: 0 auto 2.5rem;">
            <div class="section-badge" style="margin: 0 auto 0.75rem;">
                <span class="dot"></span>
                Real-Time Data Pipeline
            </div>
            <h2 class="section-title">Direct, Zero-Middleware <span class="gradient-text-accent">Synchronization</span></h2>
            <p class="section-desc">
                No third-party webhooks, no Zapier subscriptions, and no transaction delays. Your WordPress forms transmit directly to official monday.com servers in under 120ms.
            </p>
        </div>

        <!-- Pipeline Flow Box -->
        <div class="pipeline-flow-container">
            <div class="pipeline-node">
                <div class="pipeline-icon wp">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18.2A8.2 8.2 0 1 1 20.2 12 8.2 8.2 0 0 1 12 20.2z"/>
                    </svg>
                </div>
                <div class="pipeline-label">Contact Form 7</div>
                <div class="pipeline-sub">User Submits Form</div>
                <span class="pipeline-tag">Inbound Trigger</span>
            </div>

            <div class="pipeline-arrow">
                <div class="pipeline-pulse-line"></div>
                <span class="pipeline-speed-badge">Instant</span>
            </div>

            <div class="pipeline-node highlight">
                <div class="pipeline-icon elix">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
                    </svg>
                </div>
                <div class="pipeline-label">Elix Forms Engine</div>
                <div class="pipeline-sub">Smart Field Mapper</div>
                <span class="pipeline-tag elix">Heuristic Match</span>
            </div>

            <div class="pipeline-arrow">
                <div class="pipeline-pulse-line"></div>
                <span class="pipeline-speed-badge">&lt; 120ms</span>
            </div>

            <div class="pipeline-node">
                <div class="pipeline-icon api">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <div class="pipeline-label">monday.com API v2</div>
                <div class="pipeline-sub">TLS 1.3 GraphQL POST</div>
                <span class="pipeline-tag">Encrypted Auth</span>
            </div>

            <div class="pipeline-arrow">
                <div class="pipeline-pulse-line"></div>
                <span class="pipeline-speed-badge">Real-Time</span>
            </div>

            <div class="pipeline-node monday">
                <div class="pipeline-icon monday">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/>
                    </svg>
                </div>
                <div class="pipeline-label">Live monday.com Board</div>
                <div class="pipeline-sub">New Item & Pulse Created</div>
                <span class="pipeline-tag monday">Synced Item</span>
            </div>
        </div>
    </div>
</section>

<!-- Visual Deep-Dive Showcase (Alternating Storytelling Rows with Large UI Mockups) -->
<section class="section" id="visual-tour" style="padding: 5.5rem 0; background: #ffffff;">
    <div class="container">
        
        <div class="section-header" style="text-align: center; max-width: 820px; margin: 0 auto 4.5rem;">
            <div class="section-badge" style="margin: 0 auto 0.75rem;">
                <span class="dot"></span>
                Visual Feature Walkthrough
            </div>
            <h2 class="section-title">Designed for <span class="gradient-text-accent">Clarity</span> and Precision</h2>
            <p class="section-desc">
                Explore the intuitive interface that turns complex GraphQL API integrations into simple one-click operations.
            </p>
        </div>

        <!-- Story Row 1: Visual Field Mapping -->
        <div class="feature-story-row">
            <div class="feature-story-content">
                <div class="story-badge wp">Feature 01 &bull; Visual Mapping</div>
                <h3 class="story-title">Visual Field Mapping with One-Click Smart Auto-Mapping</h3>
                <p class="story-desc">
                    Map any Contact Form 7 form field directly to your monday.com board columns. Our intelligent heuristics engine analyzes field names like <code>your-email</code>, <code>your-phone</code>, and <code>your-name</code>, automatically aligning them with matching board columns in a single click.
                </p>
                
                <div class="story-points-list">
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Supported Column Types:</strong> Text, Long Text, Email, Phone (E.164), Numbers, Status dropdowns, and Date columns.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Smart Auto-Match:</strong> Instantly connects tags to columns without tedious manual selection.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Custom Pulse Naming:</strong> Use dynamic tags like <code>{name} - {company}</code> to generate informative item titles.</div>
                    </div>
                </div>

                <div class="story-cta-box">
                    <span class="story-pill-highlight">Zero Code Required</span>
                    <span class="story-pill-muted">Works with all CF7 tags</span>
                </div>
            </div>

            <div class="feature-story-visual">
                <div class="story-window-frame">
                    <div class="window-topbar">
                        <span class="window-dot red"></span>
                        <span class="window-dot yellow"></span>
                        <span class="window-dot green"></span>
                        <span class="window-title">WordPress Admin &rsaquo; Elix Forms &rsaquo; Field Mapping</span>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/plugin-mapping-preview.svg' ); ?>" alt="Contact Form 7 to monday.com Visual Field Mapping Screen" width="900" height="540" loading="eager" class="story-img">
                </div>
            </div>
        </div>

        <!-- Story Row 2: Live monday.com Board (Reversed Layout) -->
        <div class="feature-story-row reverse">
            <div class="feature-story-content">
                <div class="story-badge monday">Feature 02 &bull; monday.com CRM Board</div>
                <h3 class="story-title">Submissions Appear Instantly as Structured Action Items</h3>
                <p class="story-desc">
                    When a visitor hits submit on your website, a new item is created immediately on your selected monday.com board. Status labels, emails, phone numbers, and lead notes populate flawlessly so your sales and support teams can take action right away.
                </p>
                
                <div class="story-points-list">
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Instant Notifications:</strong> Trigger monday.com automations, pulse updates, and team notifications upon creation.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Static Column Values:</strong> Inject constant values (e.g. <code>Lead Source = "Website"</code>, <code>Priority = "High"</code>) into every row.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Group Assignment:</strong> Direct form submissions into designated board groups (e.g., "Inbound Leads", "Support Tickets").</div>
                    </div>
                </div>

                <div class="story-cta-box">
                    <span class="story-pill-highlight" style="background: rgba(59, 130, 246, 0.1); color: #3b82f6; border-color: rgba(59, 130, 246, 0.25);">Average Dispatch: 118ms</span>
                    <span class="story-pill-muted">Bi-directional readiness</span>
                </div>
            </div>

            <div class="feature-story-visual">
                <div class="story-window-frame">
                    <div class="window-topbar">
                        <span class="window-dot red"></span>
                        <span class="window-dot yellow"></span>
                        <span class="window-dot green"></span>
                        <span class="window-title">monday.com Workspace &rsaquo; Leads CRM Board</span>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/monday-board-preview.svg' ); ?>" alt="monday.com Board Live Inbound Leads View" width="900" height="540" loading="lazy" class="story-img">
                </div>
            </div>
        </div>

        <!-- Story Row 3: API Settings & Schema Introspection -->
        <div class="feature-story-row">
            <div class="feature-story-content">
                <div class="story-badge wp">Feature 03 &bull; Enterprise Security</div>
                <h3 class="story-title">Official monday.com GraphQL API v2 Connection</h3>
                <p class="story-desc">
                    Authenticate securely using your personal monday.com API token. The plugin dynamically introspects your account schema &mdash; fetching all Workspaces, Boards, Groups, and Column types directly into your WordPress settings.
                </p>
                
                <div class="story-points-list">
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Encrypted Storage:</strong> API tokens are securely encrypted and stored locally in your WordPress options database.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Dynamic Workspace Retrieval:</strong> Switch between multiple workspaces and boards with instant dropdown population.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Direct TLS 1.3 Encryption:</strong> All requests travel over secure HTTPS POST channels straight to <code>https://api.monday.com/v2</code>.</div>
                    </div>
                </div>

                <div class="story-cta-box">
                    <span class="story-pill-highlight">GraphQL v2 Verified</span>
                    <span class="story-pill-muted">100% compliant with API quotas</span>
                </div>
            </div>

            <div class="feature-story-visual">
                <div class="story-window-frame">
                    <div class="window-topbar">
                        <span class="window-dot red"></span>
                        <span class="window-dot yellow"></span>
                        <span class="window-dot green"></span>
                        <span class="window-title">WordPress Admin &rsaquo; Elix Forms &rsaquo; API Connection</span>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/api-settings-preview.svg' ); ?>" alt="monday.com GraphQL API v2 Token Connection and Workspace Selector" width="900" height="540" loading="lazy" class="story-img">
                </div>
            </div>
        </div>

        <!-- Story Row 4: Transmission Logs & Privacy Retention (Reversed Layout) -->
        <div class="feature-story-row reverse">
            <div class="feature-story-content">
                <div class="story-badge monday">Feature 04 &bull; Audit & Privacy</div>
                <h3 class="story-title">Transmission Audit Ledger & Fail-Safe Retry Engine</h3>
                <p class="story-desc">
                    Never lose a sales lead to internet hiccups or API timeouts. Every transmission is logged in an administrative audit ledger with real-time status badges (Success, Pending, Failed), payload inspection, and one-click manual or automatic retries.
                </p>
                
                <div class="story-points-list">
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>One-Click Retries:</strong> Re-dispatch any failed submission to monday.com with a single click.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>GDPR & CCPA Compliant:</strong> Disable local payload logging anytime with a simple toggle switch.</div>
                    </div>
                    <div class="story-point-item">
                        <div class="point-check">&#10003;</div>
                        <div><strong>Configurable Retention:</strong> Automatically purge transmission logs after 7, 30, or 90 days to keep your database lean.</div>
                    </div>
                </div>

                <div class="story-cta-box">
                    <span class="story-pill-highlight" style="background: rgba(16, 185, 129, 0.1); color: #059669; border-color: rgba(16, 185, 129, 0.25);">Audit Trail Protected</span>
                    <span class="story-pill-muted">Auto-Purge Engine</span>
                </div>
            </div>

            <div class="feature-story-visual">
                <div class="story-window-frame">
                    <div class="window-topbar">
                        <span class="window-dot red"></span>
                        <span class="window-dot yellow"></span>
                        <span class="window-dot green"></span>
                        <span class="window-title">WordPress Admin &rsaquo; Elix Forms &rsaquo; Audit Ledger</span>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logs-preview.svg' ); ?>" alt="WordPress Submission Audit Ledger and Retry Engine" width="900" height="540" loading="lazy" class="story-img">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Full-Width Complete 10-Feature Catalog Section -->
<section class="section" id="features" style="background: #f8fafc; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); padding: 5.5rem 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 820px; margin: 0 auto 3.5rem;">
            <div class="section-badge" style="margin: 0 auto 0.75rem;">
                <span class="dot"></span>
                Everything Included
            </div>
            <h2 class="section-title">Built-In <span class="gradient-text-accent">Features Included</span></h2>
            <p class="section-desc">
                Everything required to automate CRM data capture, pipeline intake, and project ticketing from Contact Form 7 to monday.com.
            </p>
        </div>

        <div class="features-fullwidth-grid">
            
            <!-- Feature 1 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon monday">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">monday.com Connection</h3>
                        <span class="f-subtag">Official GraphQL v2</span>
                    </div>
                </div>
                <p class="f-desc">
                    Secure API token authentication using the official <strong>monday.com GraphQL API v2</strong>. Instant verification with encrypted token storage.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon wp">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Workspaces, Boards & Groups</h3>
                        <span class="f-subtag">Live Introspection</span>
                    </div>
                </div>
                <p class="f-desc">
                    Dynamic introspection and retrieval of your monday.com Workspaces, Boards, Groups, and Column schemas directly inside your WordPress dashboard.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon monday">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Form Integrations</h3>
                        <span class="f-subtag">Contact Form 7</span>
                    </div>
                </div>
                <p class="f-desc">
                    Dedicated, battle-tested support for <strong>Contact Form 7</strong>. Works seamlessly with text fields, dropdowns, radio buttons, checkboxes, and textareas.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon wp">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Visual Field Mapping</h3>
                        <span class="f-subtag">Multi-Column Types</span>
                    </div>
                </div>
                <p class="f-desc">
                    Map any form field to monday.com column types: Text, Long Text, Email, Phone (E.164), Numbers, Status, Dropdowns, and Date columns.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon monday">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Smart Auto-Mapping</h3>
                        <span class="f-subtag">1-Click Automation</span>
                    </div>
                </div>
                <p class="f-desc">
                    One-click automatic matching. The intelligent heuristics engine matches form fields like <code>your-email</code> to your board's Email column instantly.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon wp">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Item Name Templates</h3>
                        <span class="f-subtag">Dynamic Smart Tags</span>
                    </div>
                </div>
                <p class="f-desc">
                    Flexible smart tag support. Construct dynamic pulse titles like <code>{name} - {company} ({form_name})</code> to keep boards organized and readable.
                </p>
            </div>

            <!-- Feature 7 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon monday">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Static Column Values</h3>
                        <span class="f-subtag">Constant Metadata</span>
                    </div>
                </div>
                <p class="f-desc">
                    Add constant values to every item created. Automatically tag records with parameters like <code>Lead Source = "Website"</code> or <code>Priority = "High"</code>.
                </p>
            </div>

            <!-- Feature 8 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon wp">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Submission Logs & Retries</h3>
                        <span class="f-subtag">Delivery Resilience</span>
                    </div>
                </div>
                <p class="f-desc">
                    Monitor transmission status (Success / Failed / Pending) in a clean ledger. Easily re-dispatch failed transmissions with a single click.
                </p>
            </div>

            <!-- Feature 9 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon monday">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Privacy Controls</h3>
                        <span class="f-subtag">GDPR & CCPA Compliant</span>
                    </div>
                </div>
                <p class="f-desc">
                    Option to enable or disable local logs and set automatic log retention periods (7, 30, or 90 days) to comply with privacy laws.
                </p>
            </div>

            <!-- Feature 10 -->
            <div class="feature-card-full">
                <div class="feature-card-header">
                    <div class="f-icon wp">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m18 15-6-6-6 6"/></svg>
                    </div>
                    <div>
                        <h3 class="f-title">Extensible Architecture</h3>
                        <span class="f-subtag">Developer Hooks</span>
                    </div>
                </div>
                <p class="f-desc">
                    Built with modular WordPress actions, filters, and adapter interfaces for custom column payloads, data sanitization, and workflow automation.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Visual 3-Step Setup Guide Section -->
<section class="section" style="padding: 5.5rem 0; background: #ffffff;">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 820px; margin: 0 auto 3.5rem;">
            <div class="section-badge" style="margin: 0 auto 0.75rem;">
                <span class="dot"></span>
                Quick Setup
            </div>
            <h2 class="section-title">Up and Running in <span class="gradient-text-accent">3 Minutes</span></h2>
            <p class="section-desc">
                Follow these three simple steps to start streaming Contact Form 7 inquiries directly to your monday.com workspace.
            </p>
        </div>

        <div class="steps-cards-grid">
            <div class="step-process-card">
                <div class="step-number-pill">Step 01</div>
                <div class="step-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </div>
                <h3 class="step-card-title">Generate & Paste Token</h3>
                <p class="step-card-desc">
                    In monday.com, head to <strong>Profile &rsaquo; Developers &rsaquo; API</strong> and copy your personal API token. Paste it into the plugin settings in WordPress and click Verify.
                </p>
                <div class="step-meta-badge">&#10003; TLS 1.3 Verified</div>
            </div>

            <div class="step-process-card">
                <div class="step-number-pill">Step 02</div>
                <div class="step-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                </div>
                <h3 class="step-card-title">Select Target Board</h3>
                <p class="step-card-desc">
                    The plugin introspects your monday.com account schemas. Choose the target Workspace, Board, and Group where incoming form entries should land.
                </p>
                <div class="step-meta-badge">&#10003; Dynamic Dropdowns</div>
            </div>

            <div class="step-process-card">
                <div class="step-number-pill">Step 03</div>
                <div class="step-card-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3 class="step-card-title">Auto-Map & Stream</h3>
                <p class="step-card-desc">
                    Click <strong>Smart Auto-Map</strong> to link form fields to monday columns. Save your feed &mdash; every new form submission is now dispatched live in under 120ms!
                </p>
                <div class="step-meta-badge">&#10003; Ready in &lt; 60s</div>
            </div>
        </div>
    </div>
</section>

<!-- Developer Hooks & Extensibility Section (Full Width Dual-Pane) -->
<section class="section" style="padding: 5rem 0; background: #080a14; color: #f8fafc; border-top: 1px solid rgba(255, 255, 255, 0.08); border-bottom: 1px solid rgba(255, 255, 255, 0.08);">
    <div class="container">
        <div class="dev-showcase-grid">
            <div class="dev-showcase-info">
                <span class="partner-tag wp" style="margin-bottom: 1.25rem;">Developer Extensibility</span>
                <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 1.25rem; letter-spacing: -0.02em;">
                    Engineered with Clean <span class="gradient-text-accent">WordPress Hooks</span>
                </h2>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.75rem;">
                    Whether you need to enrich incoming payloads with Google Ads UTM parameters, compute custom formulas before dispatch, or notify third-party webhooks, our developer API provides clean filter hooks and action points.
                </p>

                <div class="dev-hooks-table">
                    <div class="dev-hook-row">
                        <code>elix_forms_monday_item_payload</code>
                        <span>Filter column values sent to monday.com</span>
                    </div>
                    <div class="dev-hook-row">
                        <code>elix_forms_monday_before_dispatch</code>
                        <span>Action fired immediately before API transmission</span>
                    </div>
                    <div class="dev-hook-row">
                        <code>elix_forms_monday_after_dispatch</code>
                        <span>Action fired on successful pulse creation</span>
                    </div>
                </div>
            </div>

            <div class="dev-showcase-code">
                <div class="code-terminal-box">
                    <div class="terminal-bar">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                        <span class="terminal-title">functions.php &mdash; Custom Payload Filter</span>
                    </div>
                    <pre class="terminal-code"><code><span class="token-comment">// Filter payload column values prior to transmission</span>
<span class="token-fn">add_filter</span>( <span class="token-str">'elix_forms_monday_item_payload'</span>, <span class="token-kw">function</span>( <span class="token-var">$columns</span>, <span class="token-var">$form_data</span>, <span class="token-var">$feed</span> ) {
    <span class="token-comment">// Attach dynamic marketing campaign attribution</span>
    <span class="token-kw">if</span> ( <span class="token-fn">isset</span>( <span class="token-var">$_GET</span>[<span class="token-str">'utm_campaign'</span>] ) ) {
        <span class="token-var">$columns</span>[<span class="token-str">'campaign_source'</span>] = <span class="token-fn">sanitize_text_field</span>( <span class="token-var">$_GET</span>[<span class="token-str">'utm_campaign'</span>] );
    }

    <span class="token-comment">// Inject constant website identifier</span>
    <span class="token-var">$columns</span>[<span class="token-str">'lead_source'</span>] = <span class="token-str">'Primary Web Portal'</span>;

    <span class="token-kw">return</span> <span class="token-var">$columns</span>;
}, 10, 3 );</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WordPress.org External Services & API Transparency Section (Full Width) -->
<section class="section" style="padding: 5rem 0; background: #ffffff;">
    <div class="container">
        <div class="compliance-banner-box">
            <div class="compliance-header-bar">
                <div style="display: flex; align-items: center; gap: 0.85rem;">
                    <div class="compliance-shield-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div>
                        <h2 style="font-size: 1.45rem; font-weight: 800; margin: 0; color: var(--text-primary);">External Services & API Compliance Disclosure</h2>
                        <div style="font-size: 0.82rem; color: var(--text-muted);">In compliance with official WordPress.org Plugin Guidelines</div>
                    </div>
                </div>
                <span class="partner-tag monday" style="font-size: 0.8rem;">Official GraphQL API v2</span>
            </div>

            <p style="color: var(--text-secondary); line-height: 1.8; font-size: 0.95rem; margin-bottom: 1.5rem;">
                This plugin relies on an external service, <strong>monday.com API</strong>, to process form submissions and transmit them to monday.com boards, as well as fetch account workspaces, boards, groups, and column structures during configuration.
            </p>

            <div class="compliance-grid-full">
                <div class="compliance-col-card">
                    <div class="compliance-col-title">Service Provider</div>
                    <div class="compliance-col-desc">
                        <strong>monday.com GraphQL API</strong> (<code>https://api.monday.com/v2</code>) provided by monday.com Ltd.
                    </div>
                </div>
                <div class="compliance-col-card">
                    <div class="compliance-col-title">Functionality</div>
                    <div class="compliance-col-desc">
                        Transmits Contact Form 7 form submission data into monday.com items on designated boards, and retrieves board, group, and column schemas in the WordPress admin panel.
                    </div>
                </div>
                <div class="compliance-col-card">
                    <div class="compliance-col-title">Data Sent</div>
                    <div class="compliance-col-desc">
                        Form submission payload data (such as names, email addresses, phone numbers, and custom field values) is sent via HTTPS POST requests upon form submission. Account workspace, board, group, and column schema information is fetched when configuring connections.
                    </div>
                </div>
                <div class="compliance-col-card">
                    <div class="compliance-col-title">Terms of Use & Privacy</div>
                    <div class="compliance-col-desc">
                        Service provided by monday.com Ltd.: <a href="https://monday.com/terms/tos" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600; text-decoration: underline;">Terms of Use</a> and <a href="https://monday.com/terms/privacy" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 600; text-decoration: underline;">Privacy Policy</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full-Width Specifications & Compatibility Matrix (Replaces Sidebar) -->
<section class="section" style="padding: 4.5rem 0; background: #f8fafc; border-top: 1px solid var(--border-color);">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 760px; margin: 0 auto 3rem;">
            <div class="section-badge" style="margin: 0 auto 0.75rem;">
                <span class="dot"></span>
                Compatibility Matrix
            </div>
            <h2 class="section-title">Technical <span class="gradient-text-accent">Specifications</span></h2>
            <p class="section-desc">
                Built strictly to WordPress core coding standards and modern PHP requirements.
            </p>
        </div>

        <div class="specs-fullwidth-grid">
            <div class="spec-matrix-card">
                <div class="spec-matrix-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div class="spec-matrix-label">Current Version</div>
                <div class="spec-matrix-value">1.0.4</div>
                <div class="spec-matrix-note">Stable Release</div>
            </div>

            <div class="spec-matrix-card">
                <div class="spec-matrix-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18.2A8.2 8.2 0 1 1 20.2 12 8.2 8.2 0 0 1 12 20.2z"/></svg>
                </div>
                <div class="spec-matrix-label">WordPress Compatibility</div>
                <div class="spec-matrix-value">5.8 &ndash; 6.5+</div>
                <div class="spec-matrix-note">Core Tested</div>
            </div>

            <div class="spec-matrix-card">
                <div class="spec-matrix-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg>
                </div>
                <div class="spec-matrix-label">PHP Requirements</div>
                <div class="spec-matrix-value">7.4 &ndash; 8.3</div>
                <div class="spec-matrix-note">Strict Types</div>
            </div>

            <div class="spec-matrix-card">
                <div class="spec-matrix-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </div>
                <div class="spec-matrix-label">Open Source License</div>
                <div class="spec-matrix-value">GPLv2 or later</div>
                <div class="spec-matrix-note">100% Free Forever</div>
            </div>

            <div class="spec-matrix-card">
                <div class="spec-matrix-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <div class="spec-matrix-label">Form Engine</div>
                <div class="spec-matrix-value">Contact Form 7</div>
                <div class="spec-matrix-note">Dedicated Integration</div>
            </div>

            <div class="spec-matrix-card">
                <div class="spec-matrix-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                </div>
                <div class="spec-matrix-label">API Architecture</div>
                <div class="spec-matrix-value">GraphQL v2</div>
                <div class="spec-matrix-note">Official monday.com Ltd</div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom High-Impact CTA Banner -->
<section class="cta-banner-section" style="padding: 5.5rem 0;">
    <div class="container">
        <div class="cta-banner-box">
            <h2 class="cta-banner-title">Ready to Automate Contact Form 7 with monday.com?</h2>
            <p class="cta-banner-desc">
                Download the free verified plugin today and have your first form inquiries streaming into your monday.com board in under 3 minutes.
            </p>
            <div style="display: flex; gap: 1.25rem; justify-content: center; flex-wrap: wrap;">
                <a href="https://wordpress.org/plugins/elix-forms-to-monday-com/" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="background: #ffffff; color: var(--primary-dark); font-weight: 700;">
                    <span>Download Free on WordPress.org</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                </a>
                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-secondary">
                    <span>Talk to an Engineer</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
