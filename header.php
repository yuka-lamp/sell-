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
<header id="header" class="sp-only">
  <div class="logo-wrap">
    <img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="SELL+のロゴ">
  </div>
  <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="drawer-nav" role="navigation">
    <ul class="drawer-menu">
      <li><a class="drawer-menu-item" href="#sec-01">ABOUT<span>SELL+について</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-02">SYSTEM<span>仕組み</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-05">CASE<span>運用事例</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-06">VOICE<span>お客様の声</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-07">FLOW<span>流れ</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-08">FAQ<span>よくあるご質問</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-09">MESSAGE<span>メッセージ</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-0"><img src="<?php echo $wp_url; ?>/lib/images/btn_header.png" alt="お問い合わせ"></a></li>
    </ul>
  </nav>
  <div class="btn_fix">
    <a href="#form">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_fix.png" alt="相談する">
    </a>
  </div>
  <div class="btn_top">
    <a href="#header">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_top.png" alt="トップへ戻る">
    </a>
  </div>
</header>

<header id="header" class="pc-only">
  <div class="logo-wrap">
    <img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="SELL+のロゴ">
  </div>
  <nav class="" role="navigation">
    <ul class="">
      <li><a class="drawer-menu-item" href="#sec-01">ABOUT<span>SELL+について</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-02">SYSTEM<span>仕組み</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-05">CASE<span>運用事例</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-06">VOICE<span>お客様の声</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-07">FLOW<span>流れ</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-08">FAQ<span>よくあるご質問</span></a></li>
      <li><a class="drawer-menu-item" href="#sec-09">MESSAGE<span>メッセージ</span></a></li>
    </ul>
  </nav>
  <div class="btn_fix">
    <a href="#form">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_fix.png" alt="相談する">
    </a>
  </div>
  <div class="btn_top">
    <a href="#header">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_top.png" alt="トップへ戻る">
    </a>
  </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
