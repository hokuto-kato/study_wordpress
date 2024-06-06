<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Clean Blog - Start Bootstrap Theme</title>
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="//use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
<!-- Core theme CSS (includes Bootstrap)-->
<?php
	global $root;
	global $css_ext;
	global $js_ext;
?>
<?php
// if ( WP_DEBUG ) {
// $root    = 'http://localhost:5173';
// $css_ext = 'scss';
// $js_ext  = 'ts';
// echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
// } else {
	$root    = get_template_directory_uri();
	$css_ext = 'css';
	$js_ext  = 'js';
// }
?>
<link rel="stylesheet" href="<?php echo $root; ?>/assets/style/style.<?php echo $css_ext; ?>">
<!--必須テンプレートタグ-->
<?php wp_head(); ?>
