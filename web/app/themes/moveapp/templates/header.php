<header class="banner" role="banner">
    <div class="container login-container">
        <div class="row">
            <a class="brand col-sm-4" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/logga_symbol.png" class="img-responsive"/>
            </a>

            <div id="button-wrapper" class="col-sm-6 pull-right hidden-xs">

                <?php
                $id = Roots\Sage\Utils\get_page_id_by_slug('profil');
                $url = get_permalink($id);
                ?>
                <a href="<?php echo $url; ?>">
                    <button id="logged-in" class="btn btn-primary logged-in"></button>
                </a>
                <a href="http://app.moveapp.se/register/" class="hidden-xs hidden-sm hidden-md hidden-lg">
                    <button class="register btn btn-primary"><?= __('Nytt konto', 'sage'); ?></button>
                </a>
                <button class="login btn btn-primary" data-toggle="modal" data-target="#loginModal"><?= __('Logga in', 'sage'); ?></button>
            </div>
        </div>
    </div>

    <nav role="navbar navbar-default">
        <div class="container">
            <div class="social">
                <i class="fa fa-facebook-official"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img
                        src="<?php bloginfo('stylesheet_directory'); ?>/dist/images/logga_symbol.png"
                        class="img-responsive"/></a>
            </div>
            <?php
            if (has_nav_menu('primary_navigation')) :
                //wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary_navigation',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                );
            endif;
            ?>
        </div>
    </nav>
    <div class="mobile-buttons text-center">
        <a href="<?php echo $url; ?>">
            <button id="logged-in" class="logged-in"></button>
        </a>
        <a href="http://app.moveapp.se/register/">
            <button class="register"><?= __('Nytt konto', 'sage'); ?><i class="fa fa-chevron-right"></i></button>
        </a>
        <button class="login" data-toggle="modal" data-target="#loginModal"><?= __('Logga in', 'sage'); ?><i class="fa fa-chevron-right"></i></button>
    </div>
</header>

