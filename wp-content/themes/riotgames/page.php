<?php get_header(); ?>

<div class="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
    else:
        echo '<p>Không có nội dung để hiển thị</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>