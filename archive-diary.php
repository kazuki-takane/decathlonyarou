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
                            <?php
                                $diary_query = new WP_Query(
                                    array(
                                        'post_type'      => 'diary',
                                        'posts_per_page' => 10,
                                    )
                                );
                                if($diary_query->have_posts()):
                                while($diary_query->have_posts()):
                                    $diary_query->the_post();
                            ?>
                            <div class="section__item">
                                <a href="<?php the_permalink(); ?>" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kuma_2.jpg" alt="">
                                        <span class="article-category">
                                            <?php
                                                $terms = get_the_terms($post->id, 'year_and_month');
                                                echo $terms[0]->name;
                                            ?>
                                        </span>
                                    </div>
                                    <p class="section__item--title"><?php the_title(); ?></p>
                                    <time class="section__item--datetime"><?php the_time('Y年m月d日'); ?></time>
                                </a>
                            </div>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                        </div>
                        <div class="pagination">
                        <?php if(paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
                        <?php
                        echo paginate_links(
                            array(
                            'end_size' => 1,
                            'mid_size' => 1,
                            'prev_next' => true,
                            )
                        );
                        ?>
                        <?php endif; ?>
                        </div>
                    </section>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
    
<?php get_footer(); ?>