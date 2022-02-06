<!--ref to header.php-->
<?php get_header() ?>

<h1><?= esc_html(get_queried_object()->name) ?></h1>
<p><?= esc_html(get_queried_object()->description) ?></p>

<?php $sports = get_terms(['taxonomy' => 'sport']); ?>
<?php if (is_array($sports)) : ?>
<ul class="nav nav-pills mt-4">
    <?php foreach($sports as $sport): ?>
    <li class="nav-item">
        <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport',$sport->term_id) ? 'active' : '' ?>">
            <?= $sport->name ?>
        </a>
    </li>
    <?php endforeach ; ?>
</ul>
<?php endif; ?>

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
