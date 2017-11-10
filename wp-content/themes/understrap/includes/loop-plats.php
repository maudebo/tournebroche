<?php


$champs_custom = get_fields();

$argsPlats = array(
    'post_type' => 'plat',
    'cat' => array(-3, -4) ,

    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => '999'

);
?>

<div class="row">
<?php

$wp_query = new WP_Query($argsPlats);

if ($wp_query->have_posts()) {


    while ($wp_query->have_posts()) {

        $wp_query->the_post();
        $champs_Plats = get_field_objects();
//        echo "<pre>123";
//        print_r($champs_Plats[$category->cat_ID]);
//        echo "</pre>";
//        var_dump($champs_actualites);


        ?>
        <div class="mediabox">
            <h3><?php echo($champs_Plats['nom']['value']); ?></h3>
            <?php echo($champs_Plats['description']['value']); ?>
            <p></p><?php echo($champs_Plats['prix']['value']); ?></p>
            <p><?php echo($champs_Plats['prix_2']['value']); ?>


        </div>
        <?php
    }
}

?>
</div>
<?php wp_reset_query();


$champs_custom = get_fields();

$argsPlats = array(
    'post_type' => 'plat',
    'cat' => 4,
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => '999'

);
?>
    <div class="row">
        <div class="col-lg-12">
            <h2>salades</h2>
        </div>
    </div>
    <div class="row">

        <?php

        $wp_query = new WP_Query($argsPlats);

        if ($wp_query->have_posts()) {


            while ($wp_query->have_posts()) {

                $wp_query->the_post();
                $champs_Plats = get_field_objects();
//        echo "<pre>123";
//        print_r($champs_Plats[$category->cat_ID]);
//        echo "</pre>";
//        var_dump($champs_actualites);


                ?>
                <div class="mediabox">
                    <h3><?php echo($champs_Plats['nom']['value']); ?></h3>
                    <?php echo($champs_Plats['description']['value']); ?>
                    <p></p><?php echo($champs_Plats['prix']['value']); ?></p>
                    <p><?php echo($champs_Plats['prix_2']['value']); ?>


                </div>
                <?php
            }
        }

        ?>
    </div>

<?php wp_reset_query();

$champs_custom = get_fields();

$argsPlats = array(
    'post_type' => 'plat',
    'cat' => 3,
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => '999'

);
?>
<div class="row">
    <div class="col-lg-12">
       <h2>végétarien</h2>
    </div>
</div>
    <div class="row">

<?php

$wp_query = new WP_Query($argsPlats);

if ($wp_query->have_posts()) {


    while ($wp_query->have_posts()) {

        $wp_query->the_post();
        $champs_Plats = get_field_objects();
//        echo "<pre>123";
//        print_r($champs_Plats[$category->cat_ID]);
//        echo "</pre>";
//        var_dump($champs_actualites);


        ?>
        <div class="mediabox">
            <h3><?php echo($champs_Plats['nom']['value']); ?></h3>
            <?php echo($champs_Plats['description']['value']); ?>
            <p></p><?php echo($champs_Plats['prix']['value']); ?></p>
            <p><?php echo($champs_Plats['prix_2']['value']); ?>


        </div>
        <?php
    }
}

?>
</div>

<?php wp_reset_query();
