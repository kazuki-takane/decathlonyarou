<?php

    /**
     * WordPress標準機能
     *
     * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
     */
    function my_setup() {
        add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
        add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
        add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
        add_theme_support( 'html5', array( /* HTML5のタグで出力 */
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    }
    add_action( 'after_setup_theme', 'my_setup' );

    /**
     * CSSとJavaScriptの読み込み
     *
     * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
     */

    function my_script_init() {
        wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Zen+Antique+Soft&display=swap", array(), '1.0.0', 'all' );
        wp_enqueue_style( 'drawer-css', "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css", array(), '1.0.0', 'all' );
        wp_enqueue_script( 'iscroll-js', "https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js", array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'drawer-js', "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js", array('jquery'), '1.0.0', false );
        wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/reset.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'css', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_script_init' );


    //archiveページの表示
    function post_has_archive( $args, $post_type ) {
        if ( 'post' == $post_type ) {
            $args['rewrite'] = true;
            $args['label'] = '記事一覧'; //アーカイブページのラベル名
            $args['has_archive'] = 'articles'; //アーカイブページのスラッグ名
        }
        return $args;
        }
        add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


        //archive.phpのパンくずリストに記事一覧を表示する

        // function my_static_breadcrumb_adder( $breadcrumb_trail ) {

        //     if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合
          
        //       $item = new bcn_breadcrumb('任意の名前', null, array('post'));
          
        //     } elseif (get_post_type() === 'post') { // デフォルトの投稿ページの場合
          
        //       $item = new bcn_breadcrumb('任意の名前', null, array('post'), home_url('archives.phpのスラッグ名/'), null, true);
          
        //     }
          
        //     $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // HOME 一時退避
        //     $breadcrumb_trail->breadcrumbs[] = $item; // 任意の名前 追加
        //     $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す
          
        //   }
        //   add_action('bcn_after_fill', 'my_static_breadcrumb_adder');
?>