<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('Riot Games'); ?> | <?php bloginfo('description'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>../assets/images/riotfav.png" type="image/x-icon">

    <?php wp_head(); ?>
    <!-- Gọi hàm wp_head() của WordPress để nạp các script, stylesheet và meta tags cần thiết trước khi kết thúc thẻ <head>. -->
</head>

<body <?php body_class(); ?>>
    <!-- Thẻ <body> mở với hàm PHP body_class() của WordPress để thêm các class CSS động vào thẻ <body>, dựa trên các điều kiện hoặc ngữ cảnh của trang. -->

    <?php wp_body_open(); ?>
    <!-- Gọi hàm wp_body_open() của WordPress, có chức năng hỗ trợ các plugin chèn nội dung ngay sau khi thẻ <body> mở. -->