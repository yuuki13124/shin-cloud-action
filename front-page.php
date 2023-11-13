<?php
/* Template Name:コーポレートサイトのトップページ */
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CG-BIM Studio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
<?php get_header(); ?>
    <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/main-1.webp" alt="">
    </div>
    <main>
        <section id="news">
            <h2>お知らせ</h2>
            <div class="news-wrapper">
                <?php
                    $arg = array(
                        'posts_per_page' => 4, // 表示する件数
                        'orderby' => 'date', // 日付でソート
                        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                        'category_name' => 'news', // 表示したいカテゴリーのスラッグを指定
                        //'tag' => 'post'//表示したいタグをスラッグ指定
                    );
                    $posts = get_posts( $arg );
                    if( $posts ): 
                ?>
                <!-- ループ開始 -->
                <?php
                foreach ( $posts as $post ) :
                setup_postdata( $post );
                ?>
                <div class="news-box">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p class="post-img"><img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt=""></p>
                        <p class="post-date"><?php the_time('Y年m月d日'); ?></p>
                    </a>
                </div><!-- /.news-box -->
                <?php endforeach; ?>
                <!-- ループ終了 -->
                <?php
                /// 必ずクエリをリセット
                endif;
                wp_reset_postdata();
                ?>
            </div><!-- /.news-wrapper -->
        </section>
        <section id="main-copy">
            <h2><span class="line-1">”ビジョンを形にする”</span><span class="line-2">建築CGパースで新たな未来を描こう。</span></h2>
            <p class="lead">
                BIMを活用し建築の未来をデジタルモデルで描き出します。高品質なCGパースを通じて、リアルな建築イメージを再現し、設計変更の迅速な反映や効率化されたプロジェクト管理を実現します。<br>豊富なBIM技術を駆使し、クリエイティブな視点で建築デザインを最適化し、顧客満足度を高めます。<br>卓越したCGパース制作により、お客様のビジョンを実現するために最先端のBIM技術を駆使し、革新的な建築CGパースを提供します。
            </p>
        </section><!-- /#main-copy -->
        <section id="service">
            <h2>事業内容</h2>
            <div class="service-wrapper">
                <div class="service-box">
                    <h3 data-num="1">外観CGパース</h3>
                    <p class="illust">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content-1.svg" alt="">
                    </p>
                    <p class="text">
                        建物の外観をCG技術を使用してリアルに再現し、建物の外見や材質、環境などを視覚的に表現します。<br>建物のデザインや色彩、光の表現などを調整して、建築物の魅力を引き出します。
                    </p>
                </div><!-- /.service-box -->
                <div class="service-box">
                    <h3 data-num="2">内観CGパース</h3>
                    <p class="illust">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content-2.svg" alt="">
                    </p>
                    <p class="text">
                        建物の内部空間をCG技術を使用して表現し、部屋のレイアウトや家具、照明、素材などを再現します。<br>クライアントの要望に応じた内装デザインをビジュアル化し、イメージの共有やプレゼンテーションに活用されます。
                    </p>
                </div><!-- /.service-box -->
                <div class="service-box">
                    <h3 data-num="3">BIMを使ったCGモデリング</h3>
                    <p class="illust">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content-3.svg" alt="">
                    </p>
                    <p class="text">
                        IMを活用することで、3Dモデリングによる空間情報だけでなく、時間情報や費用情報などの情報も統合的に扱い、建築プロジェクト全体を最適化することができます。
                    </p>
                </div><!-- /.service-box -->
                <div class="service-box">
                    <h3 data-num="4">VR・ARコンテンツ</h3>
                    <p class="illust">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content-4.svg" alt="">
                    </p>
                    <p class="text">
                        建物や空間のVR（仮想現実）やAR（拡張現実）コンテンツを制作します。<br>クライアントや顧客が建物や空間を仮想的に体験し、リアルなイメージを得ることができます
                    </p>
                </div><!-- /.service-box -->
            </div><!-- /.service-wrapper -->
        </section><!-- /#service -->
        <section id="perform">
            <h2>実績紹介</h2>
            <div class="perform-wrapper">
                <div class="perform-text">
                    <h3>Lorem ipsum dolor<br>sit amet consectetur.</h3>
                    <p class="perform-lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt officia unde dolores aut asperiores.</p>
                    <div class="btn">
                        <button class="to-works"><a href="<?php echo esc_url( home_url() ); ?>/works">制作実績一覧</a></button>
                    </div>
                </div><!-- /.perform-text -->
                <div class="perform-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ach-top-1.webp" alt="">
                    <div class="caption">
                        <h4>東京都南池袋：フェリカビル</h4>
                        <p>プロジェクトの概要を2～3行で</p>
                    </div>
                </div><!-- /.perform-box -->
                <div class="perform-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ach-top-2.webp" alt="">
                    <div class="caption">
                        <h4>愛知県名古屋：フェリカ第２ビル</h4>
                        <p>プロジェクトの概要を2～3行で</p>
                    </div>
                </div><!-- /.perform-box -->
            </div><!-- /.perform-wrapper -->
        </section><!-- /#perform -->
        <section id="about">
            <div class="message-wrapper">
                <div class="message-box">
                    <h2>代表挨拶</h2>
                    <p class="message">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum quis ipsum cumque temporibus. Quaerat corporis doloremque deleniti praesentium repellendus perspiciatis vero itaque, placeat odio reprehenderit animi obcaecati laudantium delectus molestias!</p>
                </div><!-- /.message-box -->
                <p class="president-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/peep-standing-18.svg" alt="">
                </p>
            </div><!-- /.message-wrapper -->
        </section><!-- /#about -->
        <section id="voice">
            <h2>利用者の声</h2>
            <div class="voice-wrapper">
                <div class="voice-box">
                    <div class="customer">
                        <p class="customer-photo male"></p><!-- /.customer-photo -->
                        <div class="customer-text">
                            <h3><?php echo get_post_meta(20,'name',true) ?></h3>
                            <p class="date"><?php echo get_post_meta(20,'date',true) ?></p>
                        </div><!-- /.customer-text -->
                    </div>
                    <div class="voice-text">
                        <h4><?php echo get_post_meta(20,'title',true) ?></h4>
                        <p><?php echo get_post_meta(20,'text',true) ?></p>
                    </div><!-- /.voice-text -->
                </div><!-- /.voice-box -->
                <div class="voice-box">
                    <div class="customer">
                        <p class="customer-photo female"></p><!-- /.customer-photo -->
                        <div class="customer-text">
                            <h3><?php echo get_post_meta(24,'name',true) ?></h3>
                            <p class="date"><?php echo get_post_meta(24,'date',true) ?></p>
                        </div><!-- /.customer-text -->
                    </div>
                    <div class="voice-text">
                        <h4><?php echo get_post_meta(24,'title',true) ?></h4>
                        <p><?php echo get_post_meta(24,'text',true) ?></p>
                    </div><!-- /.voice-text -->
                </div><!-- /.voice-box -->
                <div class="voice-box">
                    <div class="customer">
                        <p class="customer-photo male"></p><!-- /.customer-photo -->
                        <div class="customer-text">
                            <h3><?php echo get_post_meta(27,'name',true) ?></h3>
                            <p class="date"><?php echo get_post_meta(27,'date',true) ?></p>
                        </div><!-- /.customer-text -->
                    </div>
                    <div class="voice-text">
                        <h4><?php echo get_post_meta(27,'title',true) ?></h4>
                        <p><?php echo get_post_meta(27,'text',true) ?></p>
                    </div><!-- /.voice-text -->
                </div><!-- /.voice-box -->
            </div><!-- /.voice-wrapper -->
        </section><!-- /#voice -->
    </main>
    <div class="contact-wrapper">
        <div class="contact-inner">
            <h2>Contact</h2>
            <p>ご質問等ありましたら、お問い合わせフォームより<br>お気軽にお問い合わせください</p>
        </div><!-- /.contact-inner -->
        <p class="to-form-btn"><a href="form.html">お問い合わせフォーム</a></p>
    </div><!-- /.contact-wrapper -->
    <div class="footer-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer.webp" alt="">
    </div>
    <?php get_footer(); ?>
    
</body>
</html>

