<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header() ?>
</head>

<body>
    <?php get_template_part("includes/header") ?>
    <!-- Page Header-->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $featuredImage = get_featured_image_url();
            ?>
            <header class="masthead" style="background-image: url('<?php echo $featuredImage ?>')">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="page-heading">
                                <h1><?php the_title() ?></h1>
                                <h2><span class="subheading">Have questions? I have answers.</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main Content-->
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </main>
        <?php endwhile ?>
    <?php endif ?>
    <?php get_template_part("includes/footer") ?>
    <?php get_footer() ?>
</body>

</html>