<?php get_template_part(slug: 'parts/header'); ?>

<div class="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div><?php the_content(); ?></div>
        <?php endwhile;
    else:
        echo '<p>No content found</p>';
    endif;
    ?>
</div>

<?php get_template_part('parts/footer.php') ?>