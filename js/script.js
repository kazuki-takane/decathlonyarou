jQuery(document).ready(function() {
    jQuery('.drawer').drawer();
    jQuery('.drawer-nav').on('click', function() {  //ページ内リンククリック時にメニューを閉じる
        jQuery('.drawer').drawer('close');
    });
  });