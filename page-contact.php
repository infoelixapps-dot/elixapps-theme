<?php
/**
 * Template Name: Contact Page
 * The contact page template for ElixApps Theme
 *
 * @package ElixApps
 */

get_header();
?>

<!-- Contact Hero -->
<section class="hero-section service-hero-highlight">
    <div class="container">
        <div class="section-header" style="margin-bottom: 2rem;">
            <div class="section-badge">
                <span class="dot"></span>
                Get In Touch
            </div>
            <h1 class="hero-title" style="font-size: clamp(2.5rem, 5vw, 3.6rem);">
                Let's Build Something <span class="gradient-text-accent">Extraordinary</span>
            </h1>
            <p class="hero-description" style="margin: 0 auto; max-width: 760px;">
                Have a Monday.com app concept, need an enterprise WordPress plugin, or looking to integrate systems seamlessly? Talk directly to our engineering team.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="section">
    <div class="container">
        <div class="contact-layout">
            <!-- Left: Interactive Contact Form -->
            <div class="contact-card-box">
                <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem;">Send a Project Inquiry</h2>
                <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 2rem;">
                    Fill out the form below. We will review your technical requirements and respond with initial feedback within 24 hours.
                </p>

                <!-- Feedback alert box -->
                <div id="contact-form-alert" class="form-alert" style="margin-bottom: 1.5rem;"></div>

                <form id="elixapps-contact-form" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-name">Your Full Name *</label>
                            <input type="text" id="contact-name" name="name" class="form-control" placeholder="e.g. Sarah Connor" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-email">Work Email *</label>
                            <input type="email" id="contact-email" name="email" class="form-control" placeholder="s.connor@company.com" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-company">Company / Organization</label>
                            <input type="text" id="contact-company" name="company" class="form-control" placeholder="e.g. Acme Tech Studio">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-app-type">Project Category *</label>
                            <select id="contact-app-type" name="app_type" class="form-control" required>
                                <option value="Monday App Development">Monday.com App Development</option>
                                <option value="WordPress Plugin Development">WordPress Plugin Development</option>
                                <option value="Two-Way Sync & API Integration">Two-Way Sync &amp; API Integration</option>
                                <option value="Marketplace Code Review & Audit">Marketplace Code Review &amp; Audit</option>
                                <option value="Support / Other">General Inquiry &amp; Support</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-subject">Project Summary / Subject *</label>
                            <input type="text" id="contact-subject" name="subject" class="form-control" placeholder="e.g. Custom Monday Board View for WooCommerce orders" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-budget">Estimated Budget</label>
                            <select id="contact-budget" name="budget" class="form-control">
                                <option value="Not Specified">Select budget range</option>
                                <option value="$3,000 - $7,000">$3,000 &ndash; $7,000</option>
                                <option value="$7,000 - $15,000">$7,000 &ndash; $15,000</option>
                                <option value="$15,000 - $30,000">$15,000 &ndash; $30,000</option>
                                <option value="$30,000+">$30,000+</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-message">Technical Details &amp; Objectives *</label>
                        <textarea id="contact-message" name="message" class="form-control" placeholder="Describe the workflow you want to automate, the desired user interface, or existing technical setup..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="align-self: flex-start; padding: 0.95rem 2.25rem;">
                        <span>Submit Inquiry</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </form>
            </div>

            <!-- Right: Direct Developer Channels -->
            <div>
                <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem;">Direct Developer Channels</h2>
                <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6;">
                    Prefer talking directly with a lead architect before filling out forms? Reach us through these direct channels.
                </p>

                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); font-weight: 700;">Direct Email</div>
                            <a href="mailto:dev@elixapps.com" style="font-size: 1.1rem; font-weight: 700; color: #fff;">dev@elixapps.com</a>
                            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 2px;">Reviewed directly by our engineering leads</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); font-weight: 700;">Response Guarantee</div>
                            <div style="font-size: 1.1rem; font-weight: 700; color: #fff;">Within 24 Hours</div>
                            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 2px;">Monday to Friday, standard business hours</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); font-weight: 700;">Confidentiality Guarantee</div>
                            <div style="font-size: 1.1rem; font-weight: 700; color: #fff;">Mutual NDA Available</div>
                            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 2px;">Your app concepts and proprietary source code remain 100% confidential</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); font-weight: 700;">Verified Credentials</div>
                            <div style="font-size: 1.1rem; font-weight: 700; color: #fff;">Monday &amp; WP Certified</div>
                            <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 2px;">Official marketplace experience with 50k+ active installs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
