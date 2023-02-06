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
                <ul class="header__list">
                    <li><a href="<?php echo esc_url(home_url()); ?>/articles">記事</a></li>
                    <li><a href="diary/index.html">練習日誌</a></li>
                    <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/profile">プロフィール</a></li>
                </ul>
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