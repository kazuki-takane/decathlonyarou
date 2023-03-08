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
                        <?php the_content(); ?>
                    </section>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </main>
    

    <?php get_footer(); ?>