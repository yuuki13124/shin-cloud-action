<?php
/* Template Name:コーポレートサイトのworksページ */

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CG-BIM Studio|実績紹介</title>
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
        <img src="img/main-1.webp" alt="">
    </div>
    <section id="works-list">
        <h2>実績紹介</h2>
        <div class="works-wrapper">
            <input type="radio" name="category" id="all" checked><label for="all">全部</label>
            <input type="radio" name="category" id="cg"><label for="cg">CGパース</label>
            <input type="radio" name="category" id="bim"><label for="bim">BIM</label>
            <input type="radio" name="category" id="vr"><label for="vr">VR/AR</label>
            <input type="checkbox" name="sort" id="best" ><label for="best" class="sort-btn">お問い合わせ件数トップ3</label>
            <div class="filter-wrapper">
            <?php
                $arg = array(
                'posts_per_page' => 8, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'works',  // 表示したいカテゴリーのスラッグを指定
                );
                $posts = get_posts( $arg );
                if( $posts ): 
            ?>
            <!-- ループ開始 -->
            <?php
                foreach ( $posts as $post ) :
                setup_postdata( $post );
            ?>
                <div class="filter-box" 
                data-category="<?php $posttags = get_the_tags(); 
                                    if ( $posttags ) { 
                                        foreach ( $posttags as $tag ) { 
                                            echo $tag->slug . ' ';
                                        } 
                                    } ?>" 
                data-sort="3">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p class="filter-img"><?php the_post_thumbnail(); ?></p>
                        <p class="post-categories">
                            <?php
                                $posttags1 = get_the_tags();
                                if ( $posttags1 ) {
                                    foreach ( $posttags1 as $tag1 ) {
                                        echo $tag1->name; 
                                        echo '　'; 
                                    }
                                }
                            ?>
                        </p>
                    </a>
                </div><!-- /.filter-box -->
            <?php endforeach; ?>
            <!-- ループ終了 -->
            <?php
            /// 必ずクエリをリセット
            endif;
            wp_reset_postdata();
                ?>
            </div><!-- /.filter-wrapper -->
        </div><!-- /.works-wrapper -->
    </section>
    <div class="contact-wrapper">
        <div class="contact-inner">
            <h2>Contact</h2>
            <p>ご質問等ありましたら、お問い合わせフォームより<br>お気軽にお問い合わせください</p>
        </div><!-- /.contact-inner -->
        <p class="to-form-btn"><a href="form.php">お問い合わせフォーム</a></p>
    </div><!-- /.contact-wrapper -->
    <div class="footer-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer.webp" alt="">
    </div>
    <?php get_footer(); ?>
</body>
</html>