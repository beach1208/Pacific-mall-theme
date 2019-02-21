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