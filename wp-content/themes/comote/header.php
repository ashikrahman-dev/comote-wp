<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<!--[if gte IE 9] <style type="text/css"> .gradient {filter: none;}</style><![endif]-->
<!--[if !IE]><html lang="en"><![endif]-->
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
<meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <!-- Required meta tags for responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

</head>

<body  <?php body_class();  ?>>
    <!-- Main Coding Start Here -->




    <!-- header -->
    <header class="header py-2 py-lg-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php 
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo "<h1>".get_bloginfo('name')."</h1>";
                        }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggle"
                    aria-controls="navbar-toggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ni ni-menu fs-1"></span>
                </button>
                <div class="collapse navbar-collapse px-4" id="navbar-toggle">
                    <div class="toggle-bar my-3 d-flex d-lg-none justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="ni ni-cross fs-1"></span>
                        </button>
                    </div>
                    <div class="navbar-logo d-block d-lg-none mb-3">
                        <a class="navbar-brand d-inline-block d-lg-none" href="<?php echo home_url(); ?>">
                            <?php 
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                    echo "<h1>".get_bloginfo('name')."</h1>";
                                }
                            ?>
                        </a>
                    </div>
                    <div class="ms-auto my-2 my-lg-0 header-menu-wrap">
                        <?php wp_nav_menu(array('theme_location' => 'header_top_menu', 'menu_class' => 'navbar-nav ms-auto mb-2 align-items-lg-center mb-lg-0')) ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--/ header -->