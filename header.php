<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
    <?php if ( is_page(7) || is_page(36) || is_page(34) || is_page(38) ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/menu.css">
    <?php elseif ( is_page(9) ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dogs.css">
    <?php elseif ( is_page(11) ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/access.css">
    <?php elseif ( is_page(133) ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/booking-thanks.css">
    <?php elseif ( is_page(138) ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/booking.css">
    <?php endif; ?>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<?php if ( is_page(11) ) : ?>
  <?php remove_filter ('the_content', 'wpautop'); ?>
<?php endif; ?>

<?php if (  is_front_page() ||  is_home() ) : ?>
  <canvas style="position:fixed;z-index:-1;left:0;top:0;min-width:100vw;min-height:100vh;" width="800" height="300"></canvas>
<?php endif; ?>
  
  <header>
        <div class="container">
            <img class="nikukyu" src="<?php echo get_template_directory_uri() ?>/img/nikukyu2.png" alt="肉球">
            <div class="hamburger-menu" ontouchstart="">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
              <nav class  class="nav_2">
                <ul class="menu__second-level">
                  <li><a href="<?php echo home_url(); ?>" id="link-1">トップ</a></li>
                  <li><a href="<?php echo get_page_link(7); ?>" id="link-2">メニュー</a></li>
                  <li><a href="<?php echo get_page_link(9); ?>" id="link-3">ワンコ紹介</a></li>
                  <li><a href="<?php echo get_page_link(11); ?>" id="link-4">アクセス</a></li>
                  <li><a href="<?php echo get_page_link(138); ?>" id="link-4">来店予約</a></li>
                </ul>
              </nav>
            </div>
            <nav class="nav_1">
                <ul>
                  <li><a href="<?php echo home_url(); ?>" id="link-1">トップ</a></li>
                  <li><a href="<?php echo get_page_link(7); ?>" id="link-2">メニュー</a></li>
                  <li><a href="<?php echo get_page_link(9); ?>" id="link-3">ワンコ紹介</a></li>
                  <li><a href="<?php echo get_page_link(11); ?>" id="link-4">アクセス</a></li>
                  <li><a href="<?php echo get_page_link(138); ?>" id="link-4">来店予約</a></li>
                </ul>
            </nav>
        </div>
    </header>