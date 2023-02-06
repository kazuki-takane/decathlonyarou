<footer>
        <div class="footer__container">
            <div class="footer__left">
                <ul class="footer__nav">
                    <li><a href="<?php echo esc_url(home_url()); ?>/articles">記事</a></li>
                    <li><a href="diary/index.html">練習日誌</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/profile">プロフィール</a></li>
                </ul>
                <p class="copyright">copyright 2022 十種競技野郎BLOG</p>
            </div>
            <div class="footer__right">
                <div class="footer__sns"><a href="https://www.youtube.com/channel/UCy-bOGF9tJRKprD2YhbfNFA" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/youtube.svg" alt="YouTube"></a></div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>

</html>