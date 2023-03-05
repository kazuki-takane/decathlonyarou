<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>十種競技野郎BLOG</title>

    <?php wp_head(); ?>
</head>

<body class="drawer drawer--right">
<header>
    <div class="header__container">
        <div class="header__left">
            <h1 class="my-logo"><a href="<?php echo esc_url(home_url()); ?>">十種競技野郎BLOG</a></h1>
        </div>
        <div class="header__right">
            <nav class="header__nav">
            <?php
                wp_nav_menu(
                    array(
                        'depth' => 1,  //出力するメニュー階層の上限。0で全階層を表示
                        'theme_location' => 'global', // register_nav_menusで定義したメニュー位置の識別子
                        'container' => false,  //メニューのulタグを囲むタグを指定できる(divかnav)。falseでなし。
                        'menu_class' => 'header__list'  //メニューのulに割り当てるクラス名
                    )
                );
            ?>
            </nav>
        </div>
    </div>
    <!-- ハンバーガーボタン -->
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
    </button>
    <!-- ナビゲーションの中身 -->
    <nav class="drawer-nav">
        <ul class="drawer-menu">
            <li><a class="drawer-brand" href="articles/index.html">記事</a></li>
            <li><a class="drawer-brand" href="diary/index.html">練習日誌</a></li>
            <li><a class="drawer-brand" href="profile/index.html">プロフィール</a></li>
        </ul>
    </nav>
</header>