<!--ref to header.php-->
<?php get_header() ?>

<h1>Voir tous nos biens</h1>

<div class="row">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="col-sm-4">
            <?php get_template_part('parts/card','post') ?>
        </div>
    <?php endwhile; ?>
</div>
    <nav aria-label="Page navigation example">
        <?php montheme_pagination() ?>
    </nav>

<?php else: ?>
    <p>Aucun article :(</p>
<?php endif; ?>

<!--ref to footer.php-->
<?php get_footer() ?>