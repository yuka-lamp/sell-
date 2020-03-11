<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- フッター -->
<footer class="py-4 bg-dark text-white">
  <div class="container">
    <small class="d-block">©2019 .inc</small>
  </div>
</footer>
<!-- フッター終了 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/iscroll.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/drawer.min.js"></script>
<script src="<?php echo $wp_url ?>/lib/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>
