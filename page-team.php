<?php
/**
 * Template Name: Team Page
 * The team page template for ElixApps Theme
 *
 * @package ElixApps
 */

get_header();
?>

<!-- Team Hero -->
<section class="hero-section service-hero-highlight">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <div class="section-badge">
                <span class="dot"></span>
                The Builders
            </div>
            <h1 class="hero-title" style="font-size: clamp(2.5rem, 5vw, 3.6rem);">
                Meet The <span class="gradient-text-accent">Engineering Minds</span> At ElixApps
            </h1>
            <p class="hero-description" style="margin: 0 auto; max-width: 760px;">
                We are a distributed team of full-stack developers, WordPress core contributors, and Monday.com marketplace certified builders passionate about workflow automation.
            </p>
        </div>
    </div>
</section>

<!-- Team Members Grid -->
<section class="section">
    <div class="container">
        <div class="team-grid">
            <!-- Member 1 -->
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <div class="team-avatar" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                        <span>AV</span>
                    </div>
                </div>
                <h3 class="team-name">Alex Vance</h3>
                <div class="team-role">Lead Monday Apps Architect</div>
                <p class="team-bio">
                    Monday.com certified developer with 6+ years building custom views, board widgets, and marketplace automation recipes.
                </p>
                <div class="team-tags">
                    <span class="team-tag">React</span>
                    <span class="team-tag">GraphQL</span>
                    <span class="team-tag">Monday SDK</span>
                    <span class="team-tag">Node.js</span>
                </div>
                <div class="team-socials">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="GitHub">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <div class="team-avatar" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                        <span>ER</span>
                    </div>
                </div>
                <h3 class="team-name">Elena Rostova</h3>
                <div class="team-role">Principal WordPress Engineer</div>
                <p class="team-bio">
                    WordPress core contributor specializing in high-load WooCommerce plugins, custom Gutenberg blocks, and REST API architecture.
                </p>
                <div class="team-tags">
                    <span class="team-tag">PHP 8+</span>
                    <span class="team-tag">Gutenberg</span>
                    <span class="team-tag">WooCommerce</span>
                    <span class="team-tag">MySQL</span>
                </div>
                <div class="team-socials">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="GitHub">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <div class="team-avatar" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                        <span>MC</span>
                    </div>
                </div>
                <h3 class="team-name">Marcus Chen</h3>
                <div class="team-role">Lead Integration Engineer</div>
                <p class="team-bio">
                    Expert in distributed synchronization, real-time webhooks, retry pipelines, and high-concurrency API gateways.
                </p>
                <div class="team-tags">
                    <span class="team-tag">Webhooks</span>
                    <span class="team-tag">OAuth 2.0</span>
                    <span class="team-tag">Redis</span>
                    <span class="team-tag">TypeScript</span>
                </div>
                <div class="team-socials">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="GitHub">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <div class="team-avatar" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                        <span>SJ</span>
                    </div>
                </div>
                <h3 class="team-name">Sarah Jenkins</h3>
                <div class="team-role">Head of Product Design</div>
                <p class="team-bio">
                    Designs clean, accessible, and high-converting user interfaces adhering to Monday.com Vibe Design System and WordPress conventions.
                </p>
                <div class="team-tags">
                    <span class="team-tag">Figma</span>
                    <span class="team-tag">Vibe DS</span>
                    <span class="team-tag">UI/UX</span>
                    <span class="team-tag">CSS3</span>
                </div>
                <div class="team-socials">
                    <a href="https://dribbble.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="Dribbble">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M19.13 5.09C15.22 9.14 10 10.44 2.25 10.94"/><path d="M21.75 12.84c-6.62-1.41-12.14 1-16.38 6.32"/><path d="M8.56 2.75c4.37 6 6 9.42 8 17.72"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Member 5 -->
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <div class="team-avatar" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                        <span>DM</span>
                    </div>
                </div>
                <h3 class="team-name">David Morales</h3>
                <div class="team-role">Security & Compliance Lead</div>
                <p class="team-bio">
                    Dedicated to marketplace security audits, automated penetration testing, OAuth token lifecycle security, and SOC2 compliance.
                </p>
                <div class="team-tags">
                    <span class="team-tag">Security</span>
                    <span class="team-tag">SOC2</span>
                    <span class="team-tag">Cryptography</span>
                    <span class="team-tag">AWS</span>
                </div>
                <div class="team-socials">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="GitHub">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Member 6 -->
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <div class="team-avatar" style="background: linear-gradient(135deg, #1e293b, #0f172a);">
                        <span>ML</span>
                    </div>
                </div>
                <h3 class="team-name">Maya Lin</h3>
                <div class="team-role">QA & DevRel Engineer</div>
                <p class="team-bio">
                    Maintains test coverage, writes comprehensive developer documentation, and coordinates rapid patch deployments for apps.
                </p>
                <div class="team-tags">
                    <span class="team-tag">Playwright</span>
                    <span class="team-tag">Jest</span>
                    <span class="team-tag">DevRel</span>
                    <span class="team-tag">CI/CD</span>
                </div>
                <div class="team-socials">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="GitHub">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="team-social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Engineering Culture & Values -->
<section class="section" style="background: #f8fafc; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">
                <span class="dot"></span>
                Our DNA
            </div>
            <h2 class="section-title">The Principles That Guide Us</h2>
            <p class="section-desc">
                We believe that software should be robust, transparent, and built to stand the test of time.
            </p>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;">Craftsmanship First</h3>
                <p style="color: var(--text-secondary); line-height: 1.6; font-size: 0.95rem;">
                    No quick hacks or technical debt. Every line of code is reviewed, typed, tested, and documented to ensure long-term stability.
                </p>
            </div>

            <div class="value-card">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;">Speed & Performance</h3>
                <p style="color: var(--text-secondary); line-height: 1.6; font-size: 0.95rem;">
                    Every millisecond counts. We engineer plugins and apps that load instantly without clogging browser tabs or server memory.
                </p>
            </div>

            <div class="value-card">
                <div class="bento-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;">Transparent Collaboration</h3>
                <p style="color: var(--text-secondary); line-height: 1.6; font-size: 0.95rem;">
                    No black boxes. We communicate openly in shared channels, provide regular sprint demos, and welcome constructive feedback.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Work with Us CTA -->
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner-box">
            <h2 class="cta-banner-title">Want to Collaborate With Our Team?</h2>
            <p class="cta-banner-desc">
                Whether you need dedicated developers for an upcoming marketplace launch or want to join our studio, we’d love to hear from you.
            </p>
            <a href="<?php echo esc_url( elixapps_get_page_link( 'contact' ) ); ?>" class="btn btn-primary">
                <span>Connect With The Team</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
