<?php
get_template_part('parts/header');
?>
<main id="site-content">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->

                <!--custom breadcrumbs -->
                <?php custom_breadcrumbs(); ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    // Hiển thị phân trang nếu bài viết có nhiều trang (sử dụng thẻ <!--nextpage--> trong trình soạn thảo).
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __('Pages:', 'your-theme-textdomain'),
                            'after' => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
        endwhile;
    else:
        ?>

        <p><?php _e('Sorry, no pages matched your criteria.', 'your-theme-textdomain'); ?></p>

        <?php
    endif;
    ?>

</main><!-- #site-content -->
<?php
get_template_part('parts/footer');
?>