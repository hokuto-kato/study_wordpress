<?php
// アイキャッチ画像をサポートする
// 変更後はログアウト → ログインが必要
add_action("init", function () {
    add_theme_support("post-thumbnails");
});

// PHPでコンソールにログを出力する関数
function console_log($data)
{
    if (is_array($data) || is_object($data)) {
        echo ("<script>console.log('PHP: " . json_encode($data) . "');</script>");
    } else {
        echo ("<script>console.log('PHP: " . $data . "');</script>");
    }
}

// アイキャッチ画像がなければ空の文字列を返す
function get_featured_image_url()
{
    if (has_post_thumbnail()) {
        $featuredImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
    } else {
        // アイキャッチ画像がない場合は空
        $featuredImage = "";
    }
    return $featuredImage;
}

// Contact Form 7が挿入するpタグを無効にする
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

// 行の最後がphpの閉じに当たる場合は閉じタグを省略できる