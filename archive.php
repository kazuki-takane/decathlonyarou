<?php get_header(); ?>

    <div class="mv mv-article">
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
                        <h2 class="section__heading"><?php echo get_the_archive_title(); ?></h2>
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
                                                the_post_thumbnail('post-thumbnail', array("alt" => get_the_title()));
                                        ?>
                                        <?php else :?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mv-article.jpg" alt="<?php the_title(); ?>">
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