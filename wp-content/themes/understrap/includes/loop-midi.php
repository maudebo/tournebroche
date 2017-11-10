<?php


$champs_custom = get_fields();

$args = array(
    'post_type' => 'menumidi',
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
        <div class="mediabox">
            <h3><?php echo($champs['nom']['value']); ?></h3>
            <?php echo($champs['description']['value']); ?>
            <?php echo($champs['prix']['value']); ?>

        </div>
        <?php
    }
}

?>


<?php wp_reset_query();
