<?php
/**
 * Main Index / Blog Archive Template
 *
 * @package ElixApps
 */

get_header();
?>

<!-- Blog Archive Hero Banner -->
<section class="page-hero-section">
    <div class="container">
        <div class="section-badge" style="margin-bottom: 1.25rem;">
            <span class="dot"></span>
            Articles &amp; Changelog
        </div>
        <h1 class="page-hero-title">
            Latest Developer <span class="gradient-text-accent">Insights</span>
        </h1>
        <p class="page-hero-desc">
            Technical breakdowns, integration workflows, API updates, and release notes from the ElixApps engineering team.
        </p>
    </div>
</section>

<!-- Blog Posts Content Grid (Crisp White Canvas) -->
<section class="section">
    <div class="container">

        <?php if ( have_posts() ) : ?>
            <div class="products-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'product-card' ); ?>>
                        <div>
                            <div class="product-top">
                                <span class="category-tag wp-tag"><?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                            <h2 style="font-size: 1.35rem; margin-bottom: 0.75rem;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="product-meta">
                            <span style="font-size: 0.85rem; color: var(--text-muted);"><?php the_author(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">Read Article &rarr;</a>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <div style="margin-top: 3rem; text-align: center;">
                <?php
                the_posts_pagination( array(
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ) );
                ?>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 4rem 1rem;">
                <p style="color: var(--text-secondary); font-size: 1.1rem;">No articles found yet. Check back soon!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
