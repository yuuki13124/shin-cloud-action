<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<?php get_header(); ?>
    <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/main-1.webp" alt="">
    </div>
    <main class="post-page">
        <?php
        if ( have_posts() ):
        while ( have_posts() ): the_post();
        ?>

        <h2><?php the_title(); ?></h2>
        <div class="content-box">
            <?php the_content(); ?>
        </div><!-- /.content-box -->

        <?php
        endwhile;
        endif;
        ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>