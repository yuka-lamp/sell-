<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->

<!-- フッター -->
<footer id="footer" class="">
    <div class="wrap">
      <ul>
        <li><a class="https://garnet-estate.com/" target="_blank">運営会社</a></li>
        <li><a class="drawer-menu-item" href="<?php echo $home; ?>">プライバシーポリシー</a></li>
      </ul>
      <small class="d-block">Copyright© GARNET Co., Ltd. All Rights Reserved.</small>
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
