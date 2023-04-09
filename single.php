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
                <div class="main-container article-container">
                    <section class="main__section">
                        <h2 class="section__heading"><?php the_title(); ?></h2>
                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array("alt" => get_the_title()));
                            }
                        ?>
                        <?php the_content(); ?>
                    </section>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
    

    <?php get_footer(); ?>