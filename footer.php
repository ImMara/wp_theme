
    </div>

    <?php wp_footer() ?>
    <footer>
        <hr>
        <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eius excepturi harum in sint soluta.</p>
        </div>
    <!-- call to put footer.php with index -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'footer',
                            'container' => false,
                            'menu_class' => 'navbar-nav mr-auto'
                        ])
                    ?>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div> <?= get_option('agence_horaire') ?> </div>
            </div>
        </nav>

    </footer>
</body>
</html>
