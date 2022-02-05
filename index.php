<!--ref to header.php-->
<?php get_header() ?>
<!--    wp title ll get the title -->
<!--    <h1>Bonjour tout le monde : --><?php //wp_title(); ?><!--</h1>-->
    <div class="row">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('card-header',['class' => 'card-img-top','alt'=> '','style' => 'height:auto;']) ?>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php the_title() ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php the_category() ?>
                        </h6>
                        <p class="card-text">
        <!--short description-->
                            <?php the_excerpt()  ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">voir plus</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
        <nav aria-label="Page navigation example">
            <?php \App\montheme_pagination() ?>
        </nav>

        <?php else: ?>
            <p>Aucun article :(</p>
        <?php endif; ?>

<!--ref to footer.php-->
<?php get_footer() ?>
