<?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
    <header>
        <div class="header-inner">
            <h1>CG-BIM Studio</h1>
            <p class="tag-line">建築の可能性を広げるCGパース</p>
        </div>
        <nav id="drop-menu">
            <ul>
                <li <?php if( is_front_page()) echo ' class="current"'; ?>>
                    <a href="<?php echo esc_url( home_url() ); ?>/#top">トップ</a>
                    <div class="drop-outer">
                        <div class="drop-inner">
                            <p>
                                <a href="<?php echo esc_url( home_url() ); ?>/#service">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drop-menu-1.jpg" alt="">
                                    事業内容
                                </a>
                            </p>
                            <p>
                                <a href="<?php echo esc_url( home_url() ); ?>/#perform">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drop-menu-2.jpg" alt="">
                                    実績紹介
                                </a>
                            </p>
                            <p>
                                <a href="<?php echo esc_url( home_url() ); ?>/#about">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drop-menu-3.jpg" alt="">
                                    会社について
                                </a>
                            </p>
                            <p>
                                <a href="<?php echo esc_url( home_url() ); ?>/#voice">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/drop-menu-4.jpg" alt="">
                                    利用者の声
                                </a>
                            </p>
                        </div><!-- /.drop-inner -->
                    </div><!-- /.drop-inner -->
                </li>
                
                <li <?php if( is_page('works') ) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>/works">Works</a></li>
                <li <?php if( is_page('form') ) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>/wp-content/themes/corporate-site/form">お問い合わせ</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">X</a></li>
            </ul>
        </nav>
        <p id="ham-btn"><span></span></p>
        <nav id="sp-nav">
            <ul>
                <li><a href="<?php echo esc_url( home_url() ); ?>">トップ</a></li>
                <li><a href="<?php echo esc_url( home_url() ); ?>/works">Works</a></li>
                <li><a href="<?php echo esc_url( home_url() ); ?>/form">お問い合わせ</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">X</a></li>
            </ul>
        </nav>
    </header>