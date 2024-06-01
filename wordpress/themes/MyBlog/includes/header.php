<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="/">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php
      // メニューが設定されているか確認し、設定されていれば表示する
      if (has_nav_menu('global-nav')) {
        wp_nav_menu(array(
          'theme_location' => 'global-nav',
          'menu_class'     => 'navbar-nav ms-auto py-4 py-lg-0',
          'container'      => false,
          'depth'          => 2,
          'fallback_cb'    => false,
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'walker'         => new WP_Bootstrap_Navwalker() // Bootstrap用のカスタムウォーカークラスが必要な場合
        ));
      }
      ?>
    </div>
  </div>
</nav>