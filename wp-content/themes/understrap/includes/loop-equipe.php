<?php


$champs_custom = get_fields();

$args = array(
    'post_type' => 'equipe',
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => '999'

);
?>

<?php

$wp_query = new WP_Query($args);

if ($wp_query->have_posts()) {


    while ($wp_query->have_posts()) {

        $wp_query->the_post();
        $champs = get_field_objects();
//        echo "<pre>123";
//        print_r($champs_actualites);
//        echo "</pre>";
//        var_dump($champs_actualites);


        ?>
        <div class="equipe-row ">
            <div class="col-lg-6 image-equipe yellow" style="background: url()  ">
                <img src="<?php echo $champs['image']['value']['url'] ?>" alt="">
            </div>
            <div class="col-lg-6">
                <h2><?php echo($champs['nom']['value']); ?></h2>
                <h3>
                    <?php echo($champs['titre']['value']); ?>

                </h3>
                <?php echo($champs['description']['value']); ?>
                <?php echo($champs['url']['value']); ?>

            </div>
        </div>
        <?php
    }
}

?>


<?php wp_reset_query();
