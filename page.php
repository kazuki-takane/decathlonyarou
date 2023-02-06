<?php get_header(); ?>

    <div class="mv">
        <p class="mv-title">十種競技野郎BLOG</p>
    </div>
    <main>
        <div class="grid-container">
            <div class="grid-main">
                <div class="main-container">
                    <section class="main__section">
                        <h2 class="section__heading">プロフィール</h2>
                        <div class="profile-contents">
                            <div class="profile__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/portfolio.jpg" alt="プロフィール"></div>
                            <div class="profile__text">
                                <div class="profile__block">
                                    <h3 class="profile__heading">競技歴</h3>
                                    <p class="profile__description">
                                        中学から陸上競技を始め、中学は走高跳、高校は走高跳と三段跳、大学2年からは十種競技に取り組む。
                                    </p>
                                    <p class="profile__description">
                                        現在は会社員としてコーダーのお仕事を行いながら、十種競技に取り組んでいる。
                                    </p>
                                    <p class="profile__description">
                                        Web制作ポートフォリオ↓
                                    </p>
                                    <a class="btn profile__btn" href="https://decathlonyarou.com/portfolio/" target="_blank" rel="noopener noreferrer">portfolio</a>
                                    <p class="profile__description">
                                        YouTube↓
                                    </p>
                                    <a class="btn profile__btn" href="https://www.youtube.com/channel/UCy-bOGF9tJRKprD2YhbfNFA" target="_blank" rel="noopener noreferrer">YouTube</a>
                                </div>
                                <div class="profile__block">
                                    <h3 class="profile__heading">記録</h3>
                                    <p class="profile__description">十種競技自己ベスト：6448点</p>
                                    <p class="profile__description">種目別自己ベスト：</p>
                                    <p class="profile__description">100m　10"78(+1.1)</p>
                                    <p class="profile__description">走幅跳　6m75(+1.3)</p>
                                    <p class="profile__description">砲丸投　11m06</p>
                                    <p class="profile__description">走高跳　190cm</p>
                                    <p class="profile__description">400m　49"77</p>
                                    <p class="profile__description">110mH　14"99(0.0)</p>
                                    <p class="profile__description">円盤投　35m46</p>
                                    <p class="profile__description">棒高跳　3m80</p>
                                    <p class="profile__description">やり投　48m91</p>
                                    <p class="profile__description">1500m　4'57"58</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>

<?php get_footer(); ?>