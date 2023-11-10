<?php
/* Template Name:コーポレートサイトのお問い合わせページ */
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CG-BIM Studio|お問い合わせページ</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<?php get_header(); ?>
    <div class="form-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/form-main.webp" alt="">
    </div>
    <section id="contact-form">
        <h2>お問い合わせ</h2>
        <!-- ここにcontact-formのコードを入れる -->
        <?php the_content(); ?>
    </section>
    <div class="footer-img form-page">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer.webp" alt="">
    </div>
    <?php get_footer(); ?>
</body>
</html>

