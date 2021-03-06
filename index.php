<!--ref to header.php-->
<?php get_header() ?>
<!--    wp title ll get the title -->
<!--    <h1>Bonjour tout le monde : --><?php //wp_title(); ?><!--</h1>-->

<?php //wp_list_categories(['taxonomy'=> 'sport','title_li' => '']); ?>
<?php $sports = get_terms(['taxonomy' => 'sport']); ?>

<ul class="nav nav-pills mt-4">
    <?php foreach($sports as $sport): ?>
    <li class="nav-item">
        <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport',$sport->term_id) ? 'active' : '' ?>">
            <?= $sport->name ?>
        </a>
    </li>
    <?php endforeach ; ?>
</ul>

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
