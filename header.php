<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/jquery.fatNav.min.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/style.css">
<link rel="stylesheet" href="<?php echo $wp_url ?>/lib/css/common.css">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>

<!-- ヘッダー -->
<header id="header">
  <div class="logo-wrap">
    <img src="<?php echo $wp_url; ?>/lib/images/logo.svg" alt="SELL+のロゴ">
  </div>
  <nav class="">
    <ul>
      <li><a href="<?php echo $home; ?>#about">ABOUT<span>SELL+について</span></a></li>
      <li><a href="<?php echo $home; ?>#system">SYSTEM<span>仕組み</span></a></li>
      <li><a href="<?php echo $home; ?>#case">CASE<span>運用事例</span></a></li>
      <li><a href="<?php echo $home; ?>#voice">VOICE<span>お客様の声</span></a></li>
      <li><a href="<?php echo $home; ?>#faq">FAQ<span>よくあるご質問</span></a></li>
      <li><a href="<?php echo $home; ?>#message">MESSAGE<span>メッセージ</span></a></li>
      <li><a href="<?php echo $home; ?>#flow">FLOW<span>流れ</span></a></li>
    </ul>
  </nav>
  <div class="btn_fix">
    <a href="<?php echo $home; ?>#form">
    <img src="<?php echo $wp_url; ?>/lib/images/btn_fix.png" alt="相談する">
    </a>
  </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
