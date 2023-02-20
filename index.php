<?php get_header(); ?>


    <div class="mv">
        <p class="mv-title">十種競技野郎BLOG</p>
    </div>
    <main>
        <div class="grid-container">
            <div class="grid-main">
                <div class="main-container">
                    <section class="main__section">
                        <h2 class="section__heading">記事一覧</h2>
                        <div class="section__items">
                            <?php
                            if ( have_posts() ) :
                            while ( have_posts() ) :
                            the_post();
                            ?>
                            <div class="section__item">
                                <a href="<?php the_permalink(); ?>" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <?php
                                        if(has_post_thumbnail()):
                                            the_post_thumbnail();
                                        ?>
                                        <?php else :?>
                                        <img src="<? echo esc_url(get_template_directory_uri()); ?>/img/kuma_2.jpg" alt="">
                                        <?php endif; ?>
                                        <span class="article-category">
                                            <?php
                                            $cat = get_the_category();
                                            $cat = $cat[0];
                                            echo get_cat_name($cat->term_id);
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
                            ?>
                        </div>
                        <a class="btn" href="<?php echo esc_url(home_url()); ?>/articles">もっと見る</a>
                    </section>
                    <section class="main__section">
                        <h2 class="section__heading">練習日誌</h2>
                        <div class="section__items">
                            <?php
                            $diary_query = new WP_Query(
                                array(
                                    'post_type'      => 'diary',
                                    'posts_per_page' => 4,
                                )
                            );
                            if($diary_query->have_posts()):
                            while($diary_query->have_posts()):
                                $diary_query->the_post();
                            ?>
                            <div class="section__item">
                                <a href="<?php the_permalink(); ?>" class="section__item--wrapper">
                                    <div class="section__item--img">
                                        <img src="<? echo esc_url(get_template_directory_uri()); ?>/img/kuma_2.jpg" alt="">
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
                        <a class="btn" href="<?php echo esc_url(home_url()); ?>/diary">もっと見る</a>
                    </section>
                </div>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </main>
    

<?php get_footer(); ?>