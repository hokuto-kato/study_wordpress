<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php get_header(); ?>
</head>

<body>
<?php get_template_part( 'includes/header' ); ?>
<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
	<!-- Page Header-->
		<?php
		// アイキャッチ画像が設定されているか確認し、あれば変数に保存
		$featuredImageUrl = get_featured_image_url();
		?>
	<header class="masthead" style="background-image: url('<?php echo $featuredImageUrl; ?>')">
		<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
			<div class="post-heading">
				<h1><?php the_title(); ?></h1>
				<span class="meta">
					Posted by
					<?php the_author(); ?>
					<!-- the_date the_time　どちらも投稿日時を表示する関数 -->
				<!-- the_dateだと同じ投稿日時に複数の投稿があった場合は1件しか表示されないという不具合があったので -->
				<!-- 一覧ではthe_time()で日付を取得している -->
				<!-- 投稿詳細では1件のみの表示なので、the_date()で日付を取得している -->
					on <?php the_date(); ?>
				</span>
			</div>
			</div>
		</div>
		</div>
	</header>
	<!-- Post Content-->
	<article class="mb-4">
		<div class="container px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
			<?php the_content(); ?>
			</div>
		</div>
		</div>
	</article>
	<?php endwhile ?>
<?php endif ?>
<?php get_template_part( 'includes/footer.php' ); ?>
<?php get_footer(); ?>
</body>

</html>
