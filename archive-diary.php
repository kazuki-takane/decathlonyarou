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
                <div class="main-container">
                    <section class="main__section">
                        <h2 class="section__heading">練習日誌</h2>
                        <div class="section__items">
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma_2.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">1月</p>
                                    <time class="section__item--datetime">2023.02</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">2月</p>
                                    <time class="section__item--datetime">2022.02</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma_2.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">今年の振り返り</p>
                                    <time class="section__item--datetime">2022.12.20</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">今年の振り返り</p>
                                    <time class="section__item--datetime">2022.12.20</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma_2.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">今年の振り返り</p>
                                    <time class="section__item--datetime">2022.12.20</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">今年の振り返り</p>
                                    <time class="section__item--datetime">2022.12.20</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma_2.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">今年の振り返り</p>
                                    <time class="section__item--datetime">2022.12.20</time>
                                </a>
                            </div>
                            <div class="section__item">
                                <a href="" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="../img/kuma.jpg" alt="">
                                        <span class="category">練習</span>
                                    </div>
                                    <p class="section__item--title">今年の振り返り</p>
                                    <time class="section__item--datetime">2022.12.20</time>
                                </a>
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