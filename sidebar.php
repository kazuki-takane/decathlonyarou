<aside class="grid-aside">
    <div class="aside-container">
        <ul class="aside__list">
            <li class="aside__list--item">
                <a class="aside__list--title" href="<?php echo esc_url(home_url()); ?>/articles">記事</a>
                <ul class="aside__list--menu">
                <?php
                $categories = get_categories();
                foreach($categories as $category) {
                    echo '<li><a href="'.get_category_link($category).'">'.$category->name.'</a></li>';
                }
                ?>
                </ul>
            </li>
            <li class="aside__list--item">
                <a class="aside__list--title" href="<?php echo esc_url(home_url()); ?>/diary">練習日誌</a>
                <ul class="aside__list--menu">
                <?php
                    $terms = get_terms('year_and_month');
                    foreach($terms as $term){
                        echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                    }
                ?>
                </ul>
            </li>
            <li class="aside__list--item"><a class="aside__list--title" href="<?php echo esc_url(home_url()); ?>/profile">プロフィール</a></li>
        </ul>
    </div>
</aside>