<?php
get_template_part('parts/header');

while (have_posts()):
    the_post();

    the_content();
endwhile;

get_template_part('parts/footer');
?>