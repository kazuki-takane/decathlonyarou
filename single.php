<?php get_header(); ?>

    <div class="mv">
        <p class="mv-title">十種競技野郎BLOG</p>
    </div>
    <main>
        <div class="grid-container">
            <div class="grid-main">
                <div class="breadcrumb">
                <?php
                    if ( function_exists( 'bcn_display' ) ) {
                        bcn_display();
                    }
                ?>
                </div>
                <div class="main-container article-container">
                    <section class="main__section">
                        <div class="diary__block">
                            <h2 class="section__heading">1月21日</h2>
                            <dl class="diary__list">
                                <div class="diary__list--item">
                                    <dt class="practice-place">練習場所</dt>
                                    <dd>競技場</dd>
                                </div>
                                <div class="diary__list--item">
                                    <dt class="practice-start">練習開始時間</dt>
                                    <dd>15:00</dd>
                                </div>
                                <div class="diary__list--item">
                                    <dt class="practice-end">練習終了時間</dt>
                                    <dd>18:00</dd>
                                </div>
                                <div class="diary__list--item">
                                    <dt class="practice-menu">メニュー</dt>
                                    <dd>
                                        <ul class="diary__menu">
                                            <li>立ち五段跳び*5</li>
                                            <li>800m + 400m*2 + 200m*2    2:42  78 79 35 34</li>
                                        </ul>
                                    </dd>
                                </div>
                            </dl>
                            <div class="diary__feedback">
                                <h3 class="feedback">振り返り</h3>
                                <p>棒高跳</p>
                                <video src="../../video/IMG_3462.mov"></video>
                                <p>もう少しポールを曲げたい。もう少しポールを曲げたい。もう少しポールを曲げたい。もう少しポールを曲げたい。もう少しポールを曲げたい。もう少しポールを曲げたい。</p>
                                <video src="../../video/IMG_3463.mov"></video>
                                <p>もう少しポールを曲げたい</p>
                                <h3 class="memo">メモ</h3>
                                <p>次から振り上げを意識する</p>
                            </div>
                        </div>
                        <div class="pagination">pagination</div>
                    </section>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
    

    <?php get_footer(); ?>