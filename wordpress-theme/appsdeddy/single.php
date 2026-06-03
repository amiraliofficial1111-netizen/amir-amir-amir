<?php
/**
 * Single blog post
 */
get_header();
?>

<section class="page-header">
    <div class="page-header-bg"></div>
    <div class="container">
        <div class="page-header-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p class="blog-meta" style="margin-top: 1rem; opacity: 0.9;">
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                    <?php if (has_category()) : ?>
                        &nbsp;&bull;&nbsp;<?php the_category(', '); ?>
                    <?php endif; ?>
                </p>
            <?php endwhile;
            rewind_posts();
            endif; ?>
        </div>
    </div>
</section>

<section class="blog-content blog-single">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-post-thumb" style="margin-bottom: 2rem;">
                        <?php the_post_thumbnail('large', ['loading' => 'lazy']); ?>
                    </div>
                <?php endif; ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <p style="margin-top: 3rem;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <span>&larr; Back to Blog</span>
                </a>
            </p>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php
get_footer();
