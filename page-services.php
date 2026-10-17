<?php
/**
 * Template Name: Services Page
 * The services template for ElixApps Theme
 *
 * @package ElixApps
 */

get_header();
?>

<!-- Services Hero -->
<section class="hero-section service-hero-highlight">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <div class="section-badge">
                <span class="dot"></span>
                Engineering Capabilities
            </div>
            <h1 class="hero-title" style="font-size: clamp(2.5rem, 5vw, 3.6rem);">
                Full-Lifecycle <span class="gradient-text-accent">Monday.com App</span> & <span class="gradient-text">WordPress Plugin</span> Development
            </h1>
            <p class="hero-description" style="margin: 0 auto; max-width: 780px;">
                We turn complex business logic into intuitive, secure, and marketplace-ready software products. From single integration recipes to enterprise-grade apps used by thousands.
            </p>
        </div>
    </div>
</section>

<!-- Deep Dive Service Modules -->
<section class="section">
    <div class="container">
        <!-- Service 1: Monday.com Apps -->
        <div class="service-card-large">
            <div class="service-content">
                <span class="service-tag">Monday.com Marketplace</span>
                <h2 style="font-size: 2rem; margin-bottom: 1rem;">Custom Monday.com App Engineering</h2>
                <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.5rem;">
                    Unlock the full potential of Monday.com Work OS. We build custom applications that live directly inside Monday boards, item cards, and dashboards.
                </p>

                <div class="service-features-list">
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Board Views & Item Views:</strong> Interactive React-powered interfaces tailored to your team’s custom workflows.</span>
                    </div>
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Integration Recipes & Automations:</strong> Custom triggers and actions powered by GraphQL and webhooks.</span>
                    </div>
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Marketplace Submission & Verification:</strong> End-to-end guidance through security reviews, billing, and listing.</span>
                    </div>
                </div>

                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary">
                    <span>Discuss Monday App Project</span>
                </a>
            </div>

            <div class="service-media">
                <div class="mockup-window" style="box-shadow: none;">
                    <div class="mockup-header">
                        <div class="mockup-dots"><span></span><span></span><span></span></div>
                        <span style="font-size: 0.8rem; font-family: var(--font-mono); color: #94a3b8;">monday-app-config.json</span>
                    </div>
                    <div class="mockup-body" style="background: #0d1322;">
                        <div class="mockup-code-block" style="border: none;">
                            <span class="code-keyword">{</span><br>
                            &nbsp;&nbsp;<span class="code-str">"appName"</span>: <span class="code-str">"Elix Custom View"</span>,<br>
                            &nbsp;&nbsp;<span class="code-str">"views"</span>: [<span class="code-str">"BoardView"</span>, <span class="code-str">"ItemView"</span>],<br>
                            &nbsp;&nbsp;<span class="code-str">"oauth"</span>: { <span class="code-str">"scopes"</span>: [<span class="code-str">"boards:read"</span>, <span class="code-str">"boards:write"</span>] },<br>
                            &nbsp;&nbsp;<span class="code-str">"webhooks"</span>: { <span class="code-str">"listen"</span>: <span class="code-keyword">true</span> }<br>
                            <span class="code-keyword">}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 2: WordPress Plugin Dev -->
        <div class="service-card-large reverse">
            <div class="service-content">
                <span class="service-tag" style="color: var(--primary-light);">WordPress Development</span>
                <h2 style="font-size: 2rem; margin-bottom: 1rem;">Bespoke WordPress Plugin Development</h2>
                <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.5rem;">
                    We build bulletproof WordPress plugins engineered for high speed, zero memory bloat, and maximum security following WordPress VIP coding benchmarks.
                </p>

                <div class="service-features-list">
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Custom Gutenberg Blocks:</strong> Modern React-based editor blocks with seamless server-side rendering.</span>
                    </div>
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>WooCommerce Extensions:</strong> Complex pricing rules, custom checkout flows, and automated inventory sync.</span>
                    </div>
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Custom REST API Endpoints:</strong> Fast JSON endpoints with nonce verification and OAuth tokens.</span>
                    </div>
                </div>

                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary">
                    <span>Discuss Plugin Project</span>
                </a>
            </div>

            <div class="service-media">
                <div class="mockup-window" style="box-shadow: none;">
                    <div class="mockup-header">
                        <div class="mockup-dots"><span></span><span></span><span></span></div>
                        <span style="font-size: 0.8rem; font-family: var(--font-mono); color: #94a3b8;">class-elix-plugin.php</span>
                    </div>
                    <div class="mockup-body" style="background: #0d1322;">
                        <div class="mockup-code-block" style="border: none;">
                            <span class="code-keyword">&lt;?php</span><br>
                            <span class="code-keyword">namespace</span> ElixApps\Engine;<br><br>
                            <span class="code-keyword">class</span> <span class="code-fn">PluginManager</span> {<br>
                            &nbsp;&nbsp;<span class="code-keyword">public function</span> <span class="code-fn">register_hooks</span>() {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-fn">add_action</span>(<span class="code-str">'rest_api_init'</span>, [<span class="code-keyword">$this</span>, <span class="code-str">'endpoints'</span>]);<br>
                            &nbsp;&nbsp;}<br>
                            }
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 3: Two-way sync & API Integration -->
        <div class="service-card-large">
            <div class="service-content">
                <span class="service-tag">Integration Architecture</span>
                <h2 style="font-size: 2rem; margin-bottom: 1rem;">WordPress &times; Monday.com API Bridges</h2>
                <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.5rem;">
                    Connect your WordPress digital presence with Monday.com boards seamlessly. We bridge CRM data, lead generation forms, e-commerce transactions, and team task queues in real time.
                </p>

                <div class="service-features-list">
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Bi-Directional Synchronization:</strong> Changes in Monday reflect on WordPress, and vice versa.</span>
                    </div>
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Asynchronous Queue Processing:</strong> Heavy requests are queued so site visitors never experience slowdowns.</span>
                    </div>
                    <div class="service-feature-row">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        <span><strong>Error Handling & Resiliency:</strong> Automatic retries and webhook logging for enterprise dependability.</span>
                    </div>
                </div>

                <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary">
                    <span>Build Integration Bridge</span>
                </a>
            </div>

            <div class="service-media">
                <div class="mockup-window" style="box-shadow: none;">
                    <div class="mockup-header">
                        <div class="mockup-dots"><span></span><span></span><span></span></div>
                        <span style="font-size: 0.8rem; font-family: var(--font-mono); color: #94a3b8;">sync-telemetry.log</span>
                    </div>
                    <div class="mockup-body" style="background: #0d1322;">
                        <div class="mockup-code-block" style="border: none;">
                            [2026-10-06 18:24:01] <span class="code-str">[SUCCESS]</span> Webhook payload dispatched<br>
                            [2026-10-06 18:24:02] <span class="code-fn">[MONDAY API]</span> GraphQL pulse_id #89281 created<br>
                            [2026-10-06 18:24:02] <span class="code-str">[STATUS: 200]</span> Execution time: 142ms
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our 4-Step Engineering Process -->
<section class="section" style="background: #f8fafc; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <span class="dot"></span>
                How We Build
            </div>
            <h2 class="section-title">Our <span class="gradient-text-accent">4-Step Development Lifecycle</span></h2>
            <p class="section-desc">
                From initial schema design to ongoing marketplace releases, our agile process ensures rapid delivery without cutting corners.
            </p>
        </div>

        <div class="workflow-grid">
            <div class="workflow-card">
                <div class="workflow-step-num">01</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Discovery & Architecture</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                    We map out your data models, determine Monday.com scopes, define WordPress hooks, and construct the system architecture.
                </p>
            </div>

            <div class="workflow-card">
                <div class="workflow-step-num">02</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Sprint Prototyping</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                    Fast two-week sprints building modern UI components in React, backend endpoints in PHP/Node, and integration webhooks.
                </p>
            </div>

            <div class="workflow-card">
                <div class="workflow-step-num">03</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Rigorous Testing & Security</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                    Automated unit testing, static analysis, token vulnerability auditing, and real-world stress testing under heavy load.
                </p>
            </div>

            <div class="workflow-card">
                <div class="workflow-step-num">04</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Marketplace Launch</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                    We manage the Monday Marketplace app submission, review feedback with the Monday team, and publish with complete docs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <span class="dot"></span>
                Common Questions
            </div>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-desc">
                Everything you need to know about our development process, tech stack, and support model.
            </p>
        </div>

        <div class="faq-accordion">
            <div class="faq-item active">
                <button class="faq-trigger">
                    <span>How long does it take to develop a custom Monday.com app?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-content">
                    Most focused Monday.com apps or custom view widgets take between 2 to 4 weeks from specification to deployment. For complex enterprise apps with multi-platform synchronization and marketplace monetization, typical timelines range from 4 to 8 weeks.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-trigger">
                    <span>Do you assist with Monday.com Marketplace review and approval?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-content">
                    Yes! We guide your app through the entire official Monday.com App Marketplace submission process. This includes fulfilling security guidelines, OAuth documentation, test board setup, and collaborating directly with Monday’s app review team.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-trigger">
                    <span>Can you integrate existing WordPress plugins like WooCommerce or Elementor?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-content">
                    Absolutely. We frequently build bridges for WooCommerce, Gravity Forms, Contact Form 7, Elementor Pro, MemberPress, and custom post types, routing critical data directly to Monday.com boards with custom field mappings.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-trigger">
                    <span>Who owns the source code upon project completion?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-content">
                    You do! For all custom client builds, you retain 100% intellectual property ownership of the source code, repository, and design assets upon project delivery.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner-box">
            <h2 class="cta-banner-title">Ready to Build Your App or Plugin?</h2>
            <p class="cta-banner-desc">
                Contact our engineering team today for an architecture consultation and detailed technical roadmap.
            </p>
            <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary">
                <span>Start Your Project</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
