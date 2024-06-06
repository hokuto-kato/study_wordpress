<!-- Bootstrap core JS-->
<script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Theme JS -->
<?php
	global $root;
	global $js_ext;
?>
<script src="<?php echo $root; ?>/assets/js/script.<?php echo $js_ext; ?>" type="module"></script>
<!--必須テンプレートタグ-->
<?php wp_footer(); ?>
