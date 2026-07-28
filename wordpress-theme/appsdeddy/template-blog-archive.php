<?php
/**
 * Blog archive — posts list (used for /blog/, categories, tags, search).
 */
get_header();
?>

<section class="page-header">
    <div class="page-header-bg"></div>
    <div class="container">
        <div class="page-header-content">
            <?php if (is_search()) : ?>
                <h1>Search: <?php echo esc_html(get_search_query()); ?></h1>
            <?php elseif (is_category()) : ?>
                <h1><?php single_cat_title(); ?></h1>
            <?php else : ?>
                <h1>Blog</h1>
                <p>Insights on enterprise software, AI, FinTech, healthcare, and SaaS from the AppsDeddy team.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="blog-content">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('blog-post-card'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="blog-post-thumb">
                            <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                        </a>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="blog-meta">
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        <?php if (has_category()) : ?>
                            &nbsp;&bull;&nbsp;<?php the_category(', '); ?>
                        <?php endif; ?>
                    </p>
                    <div class="blog-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary blog-read-more">
                        <span>Read More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </article>
            <?php endwhile; ?>

            <nav class="blog-pagination" aria-label="Blog pagination">
                <?php
                the_posts_pagination([
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                    'mid_size'  => 2,
                ]);
                ?>
            </nav>
        <?php else : ?>
            <div class="blog-empty">
                <h2>No posts yet</h2>
                <p>Publish your first post in WordPress admin: Posts → Add New.</p>
                <a href="<?php echo esc_url(admin_url('post-new.php')); ?>" class="btn btn-primary">
                    <span>Create a Post</span>
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
