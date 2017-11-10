<?php

/*
Template Name: accueil.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package understrap
*/
get_header();
 include(locate_template("includes/loop-infos-generales.php"));
$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
    <?php get_template_part('global-templates/hero', 'none'); ?>
<?php endif; ?>
    <main class="site-main" id="main">
        <div class="" id="wrapper-index">

            <!-- .row -->


            <!-- Wrapper end -->


            <div class="wrapper-menu">
                <div class="row">
                    <section class="col-lg-12 entre-section">
                        <h1 class="titre-section">
                            on mange
                        </h1>
                    </section>
                </div>
                <div id="tabs" class="tabs row">
                    <nav class=" col-lg-2" id="fixedNav">
                        <ul>
                            <li><a href="#section-1"><span>Entrées</span></a></li>
                            <li><a href="#section-2"><span>Plats</span></a></li>
                            <li><a href="#section-3"><span>Desserts</span></a></li>
                            <li><a href="#section-4"><span>Menu enfants</span></a></li>
                            <li><a href="#section-5"><span>Menu midi</span></a></li>
                            <li><a href="#section-6"><span>Table d'hôte</span></a></li>
                        </ul>
                    </nav>

                    <div class="content col-offset-lg-2 col-lg-8" id="menu">
                        <section id="section-1">
                               <?php include(locate_template("includes/loop-entrees.php")); ?>

                        </section>
                        <section id="section-2">
                            <?php include(locate_template("includes/loop-plats.php")); ?>

                        </section>
                        <section id="section-3">
                            <?php include(locate_template("includes/loop-desserts.php")); ?>

                        </section>
                        <section id="section-4">
                            <?php include(locate_template("includes/loop-enfants.php")); ?>

                        </section>
                        <section id="section-5">
                            <?php include(locate_template("includes/loop-midi.php")); ?>

                        </section>
                        <section id="section-6">
                            <?php include(locate_template("includes/loop-th.php")); ?>

                        </section>
                    </div><!-- /content -->
                </div><!-- /tabs -->
                <div class="col-lg-4">

                </div>
            </div>
            <div class="wrapper-who">
                <div class="row">
                    <section class="col-lg-12 entre-section">
                        <h1 class="titre-section">
                            c'est qui
                        </h1>
                    </section>
                </div>
                <div class="container-equipe ">
                    <div class="row equipe">
                        <?php include(locate_template("includes/loop-equipe.php")); ?>

                    </div>
                </div>

            </div>
        </div>
    </main>

<?php get_footer(); ?>