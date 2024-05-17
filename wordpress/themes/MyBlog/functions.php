<?php
// アイキャッチ画像をサポートする
// 変更後はログアウト → ログインが必要
add_action("init", function () {
    add_theme_support("post-thumbnails");
});

// 行の最後がphpの閉じに当たる場合は閉じタグを省略できる