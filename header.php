<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/drawer.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/modal.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/headerfooter.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/style.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/readmore.css">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>

<body class="drawer drawer--right">

<!-- ヘッダー -->
<header id="header">
  <div class="logo-wrap">
    <img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="SELL+のロゴ">
  </div>
  <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="drawer-nav" role="navigation">
    <ul class="drawer-menu">
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#about">ABOUT<span>SELL+について</span></a></li>
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#system">SYSTEM<span>仕組み</span></a></li>
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#case">CASE<span>運用事例</span></a></li>
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#voice">VOICE<span>お客様の声</span></a></li>
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#faq">FAQ<span>よくあるご質問</span></a></li>
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#message">MESSAGE<span>メッセージ</span></a></li>
      <li><a class="drawer-menu-item" href="<?php echo $home; ?>#flow">FLOW<span>流れ</span></a></li>
    </ul>
  </nav>
  <div class="btn_fix">
    <a href="<?php echo $home; ?>#form">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_fix.png" alt="相談する">
    </a>
  </div>
  <div class="btn_top">
    <a href="<?php echo $home; ?>#header">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_top.png" alt="トップへ戻る">
    </a>
  </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
