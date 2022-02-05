<?php
    /**
     * Template Name : Page with banner
     * Template Post Type : page,post
     */
    ?>

<!--ref to header.php-->
<?php get_header() ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <p>ici la banniere</p>

    <h1><?php the_title() ?></h1>
    <p>
        <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width: 100%;height: auto">
    </p>
    <?php the_content() ?>

<?php endwhile; endif; ?>

<!--ref to footer.php-->
<?php get_footer() ?>
