<?php
/**
 * Single Post Template
 * High-Tech SaaS & Developer Aesthetic
 *
 * @package ElixApps
 */

get_header();

while ( have_posts() ) :
    the_post();

    // Calculate reading time
    $word_count = str_word_count( strip_tags( get_the_content() ) );
    $reading_time = max( 1, ceil( $word_count / 200 ) );
    ?>

    <!-- Reading Progress Bar -->
    <div class="reading-progress-container">
        <div class="reading-progress-bar"></div>
    </div>

    <!-- Post Hero Banner -->
    <section class="page-hero-section">
        <div class="container">
            <nav class="doc-breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'elixapps' ); ?>">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                    <span>Home</span>
                </a>
                <span class="sep">/</span>
                <a href="<?php echo esc_url( home_url( '/#blog' ) ); ?>">Articles</a>
                <span class="sep">/</span>
                <span class="current"><?php echo esc_html( wp_trim_words( get_the_title(), 6 ) ); ?></span>
            </nav>

            <div class="section-badge" style="margin-bottom: 1.25rem;">
                <span class="dot"></span>
                <?php
                $categories = get_the_category();
                echo ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Engineering Insight';
                ?>
            </div>

            <h1 class="page-hero-title">
                <?php the_title(); ?>
            </h1>

            <div class="doc-meta-bar">
                <div class="doc-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    </svg>
                    <span>Author: <strong><?php echo esc_html( get_the_author() ); ?></strong></span>
                </div>

                <span class="doc-meta-divider"></span>

                <div class="doc-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <span>Published: <strong><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></strong></span>
                </div>

                <span class="doc-meta-divider"></span>

                <div class="doc-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <span>Reading Time: <strong><?php echo esc_html( $reading_time ); ?> min read</strong></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Post Article Content -->
    <section class="section" style="padding-top: 0;">
        <div class="container" style="max-width: 900px;">
            <div class="doc-card" style="padding: 3.5rem;">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail" style="margin-bottom: 2.5rem; border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-color); box-shadow: var(--shadow-card);">
                            <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: auto; display: block;' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links" style="margin-top: 2rem;">' . esc_html__( 'Pages:', 'elixapps' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>

                    <footer class="post-footer" style="margin-top: 3.5rem; padding-top: 1.75rem; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: gap;">
                        <div style="color: var(--text-muted); font-size: 0.9rem;">
                            Category: <?php the_category( ', ' ); ?>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-secondary btn-sm">&larr; Return to Home</a>
                    </footer>
                </article>
            </div>
        </div>
    </section>

    <?php
endwhile;

get_footer();
