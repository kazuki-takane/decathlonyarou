<footer>
        <div class="footer__container">
            <div class="footer__left">
                <?php
                    wp_nav_menu(
                        array(
                            'depth' => 1,  //出力するメニュー階層の上限。0で全階層を表示
                            'theme_location' => 'footer', // register_nav_menusで定義したメニュー位置の識別子
                            'container' => false,  //メニューのulタグを囲むタグを指定できる(divかnav)。falseでなし。
                            'menu_class' => 'footer__nav'  //メニューのulに割り当てるクラス名
                        )
                    );
                ?>
                <p class="copyright">copyright 2023 十種競技野郎BLOG</p>
            </div>
            <div class="footer__right">
                <div class="footer__sns"><a href="https://www.youtube.com/channel/UCy-bOGF9tJRKprD2YhbfNFA" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/youtube.png" alt="YouTube" width="30" height="30"></a></div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>

</html>