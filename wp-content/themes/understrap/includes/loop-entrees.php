<?php


$champs_custom = get_fields();

$argsEntrees = array(
    'post_type' => 'entrees',
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => '999'

);
?>

<?php

$my_queryEntrees = new WP_Query($argsEntrees);

if ($my_queryEntrees->have_posts()) {


while ($my_queryEntrees->have_posts()) {

$my_queryEntrees->the_post();
$champs_Entrees = get_field_objects();
//        echo "<pre>123";
//        print_r($champs_actualites);
//        echo "</pre>";
//        var_dump($champs_actualites);


?>
    <div class="mediabox">
        <h3><?php echo($champs_Entrees['nom']['value']); ?></h3>
        <?php echo($champs_Entrees['description']['value']); ?>
        <?php echo($champs_Entrees['prix']['value']); ?>

    </div>
    <?php
}
}

?>



<?php wp_reset_query();
