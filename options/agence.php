<?php
class AgenceMenuPage{

    const GROUP = 'agence_options';

    public static function register(){
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class,'registerSettings']);
    }

    public static function addMenu(){
        add_options_page("Gestion de l'agence", "Agence", "manage_options",self::GROUP, [self::class, 'render']);
    }

    public static function registerSettings(){
        register_setting(self::GROUP,'agence_horaire',['default' => 'salut']);
//        declaration of section
        add_settings_section('agence_options_section','Paramétres' , function (){
            echo 'Vous pouverze ici gerer les parametres';
        },self::GROUP);
         add_settings_field('agence_options_horaire','horraires d ouverture', function(){
             ?>
             <textarea name="agence_horaire" id="" cols="30" rows="10" style="width: 100%"><?= get_option('agence_horaire') ?></textarea>
             <?php
         },self::GROUP,'agence_options_section');
    }

    public static function render(){
        ?>
        <h1>Gestion de l'agence</h1>
<!--            --><?//= get_option('agence_horaire') ?>
            <form action="options.php" method="post">
                <?php
                    settings_fields(self::GROUP);
                    do_settings_sections(self::GROUP);
                    submit_button()
                ?>
            </form>
        <?php
    }
}