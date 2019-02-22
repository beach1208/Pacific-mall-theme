<?php 

//custome header
add_theme_support(
    'custom-header',
    array(
        'width' => 950,
        'height' => 295,
        'header-text' => false,
      
    )
);

//custom menu
register_nav_menus(
    array(
        'place_global' => 'Global',
        'place_utility' => 'Utility'
    )
);

//add eye catch images
add_theme_support('post-thumbnails');

//set size of thumbnails
set_post_thumbnail_size(90,90,true);

//side bar image size
add_image_size('small_thumbnail',61,61,true);

//archive thumbnail size
add_image_size('large_thumbnail',120,120,true);

//sub header image size
add_image_size('category_image',658,113,true);

//mall image size
add_image_size('pickup_thumbnail',302,123,true);