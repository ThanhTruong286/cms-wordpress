<?php get_template_part(slug: 'parts/header'); ?>
<!-- 
  Gọi phần template `header` từ thư mục `parts`. 
  File `parts/header.php` sẽ được nạp vào đây, nơi chứa phần header (đầu trang) của trang web.
-->

<div class="content">
    <?php
    // Kiểm tra xem có bài viết nào không.
    if (have_posts()):
        // Nếu có bài viết, bắt đầu vòng lặp (loop) để lấy từng bài.
        while (have_posts()):
            // Thiết lập bài viết hiện tại, chuẩn bị dữ liệu để hiển thị.
            the_post(); ?>
            <!-- Hiển thị tiêu đề bài viết và tạo liên kết đến trang chi tiết của bài viết -->
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <!-- Hiển thị nội dung bài viết -->
            <div><?php the_content(); ?></div>
        <?php endwhile; // Kết thúc vòng lặp khi không còn bài viết nào.
    else:
        // Nếu không có bài viết nào, hiển thị thông báo "No content found".
        echo '<p>No content found</p>';
    endif;
    ?>
</div>

<?php get_template_part('parts/footer.php') ?>
<!-- 
  Gọi phần template `footer` từ thư mục `parts`. 
  File `parts/footer.php` sẽ được nạp vào đây, nơi chứa phần footer (cuối trang) của trang web.
-->