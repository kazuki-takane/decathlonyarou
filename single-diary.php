<?php get_header(); ?>

    <div class="mv mv-practice">
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
                            <h2 class="section__heading"><?php the_title(); ?></h2>
                            <dl class="diary__list">
                                <div class="diary__list--item">
                                    <dt class="practice-place">練習場所</dt>
                                    <dd>
                                        <?php
                                            if(get_field('practice-place')) {
                                                the_field('practice-place');
                                            }
                                        ?>
                                    </dd>
                                </div>
                                <div class="diary__list--item">
                                    <dt class="practice-start">練習開始時間</dt>
                                    <dd>
                                        <?php
                                            if(get_field('practice-start-time')) {
                                                the_field('practice-start-time');
                                            }
                                        ?>
                                    </dd>
                                </div>
                                <div class="diary__list--item">
                                    <dt class="practice-end">練習終了時間</dt>
                                    <dd>
                                        <?php
                                            if(get_field('practice-end-time')) {
                                                the_field('practice-end-time');
                                            }
                                        ?>
                                    </dd>
                                </div>
                                <div class="diary__list--item">
                                    <dt class="practice-menu">メニュー</dt>
                                    <dd>
                                        <?php
                                            if(get_field('practice-menu')) {
                                                the_field('practice-menu');
                                            }
                                        ?>
                                    </dd>
                                </div>
                            </dl>
                            <div class="diary__feedback">
                                <h3 class="feedback">振り返り</h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
    

    <?php get_footer(); ?>