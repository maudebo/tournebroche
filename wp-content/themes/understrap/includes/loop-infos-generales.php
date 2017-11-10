<?php

$argsOptions = array(
    'post_type'   => 'options_generales',
    'post_status' => 'publish',
    'posts_per_page' => '999',
);

query_posts($argsOptions);
$my_query = new WP_Query($argsOptions);

while(have_posts()){
    the_post();
    $fieldsOptionsgeneral = get_field_objects();
}

wp_reset_query();