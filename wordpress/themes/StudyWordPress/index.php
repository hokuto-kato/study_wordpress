<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part( 'includes/header' ); ?>
	<!-- Page Header-->
	<header class="masthead -home">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
		<div class="col-md-10 col-lg-8 col-xl-7">
			<div class="site-heading">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<span class="subheading"><?php bloginfo( 'description' ); ?></span>
			</div>
		</div>
		</div>
	</div>
	</header>
	<!-- Main Content-->
	<div class="container px-4 px-lg-5">
	<div class="row gx-4 gx-lg-5 justify-content-center">
		<div class="col-md-10 col-lg-8 col-xl-7">
		<!-- Post preview-->
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
			<div class="post-preview">
				<a href="<?php the_permalink(); ?>">
				<h2 class="post-title">
					<?php the_title(); ?>
				</h2>
				<h3 class="post-subtitle">
					<?php the_excerpt(); ?>
				</h3>
				</a>
				<p class="post-meta">
				Posted by
				<?php the_author(); ?> on <?php the_time( 'F j, Y' ); ?>
				</p>
			</div>
			<!-- Divider-->
			<hr class="my-4" />
			<?php endwhile ?>
			<!-- Pager-->
			<div class="d-flex justify-content-between mb-4">
			<?php
			$link = get_previous_posts_link( '← Newer Posts' );
			if ( $link ) {
				$link = str_replace( '<a', '<a class="btn btn-primary text-uppercase"', $link );
				echo $link;
			}
			?>
			<?php
			$link = get_next_posts_link( 'Older Posts →' );
			if ( $link ) {
				$link = str_replace( '<a', '<a class="btn btn-primary text-uppercase"', $link );
				echo $link;
			}
			?>
			</div>
		<?php else : ?>
			<p>Article Not Found</p>
		<?php endif ?>
		</div>
	</div>
	</div>
	<?php get_template_part( 'includes/footer' ); ?>
	<?php get_footer(); ?>
</body>

</html>
