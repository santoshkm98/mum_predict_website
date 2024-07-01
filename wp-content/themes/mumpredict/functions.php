<?php 

function create_teamposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Team'),



      'singular_name' => __('team'),



      'all_items' => __('All teams'),



      'add_new_item' => __('Add New Team'),



      'edit_item' => __('Edit team'),



      'view_item' => __('View team'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'teams'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'team',



    'graphql_plural_name' => 'teams',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('team', $args);



}



add_action('init', 'create_teamposttype');



add_action('init', 'jss_create_teams_taxonomies', 0);



function jss_create_teams_taxonomies()

{



  register_taxonomy(



    'team_cat',

    'team',



    array(



      'hierarchical' => true,



      'label' => 'team Category',



      'singular_label' => 'team Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'teamCategory',



      'graphql_plural_name' => 'teamCategory',

      



    )

  );

}



// advisory group
function create_advisorygroupposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('AdvisoryGroup'),



      'singular_name' => __('advisorygroup'),



      'all_items' => __('All advisorygroup'),



      'add_new_item' => __('Add New advisory group'),



      'edit_item' => __('Edit advisory group'),



      'view_item' => __('View advisory group'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'advisorygroup'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'advisorygroup',



    'graphql_plural_name' => 'advisorygroups',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('advisorygroup', $args);



}



add_action('init', 'create_advisorygroupposttype');



add_action('init', 'jss_create_advisorygroup_taxonomies', 0);



function jss_create_advisorygroup_taxonomies()

{



  register_taxonomy(



    'advisorygroup_cat',

    'advisorygroup',



    array(



      'hierarchical' => true,



      'label' => 'advisorygroup Category',



      'singular_label' => 'advisorygroup Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'advisorygroupCategory',



      'graphql_plural_name' => 'advisorygroupCategory',

      



    )

  );

}


// meeting minutes

function create_meetingminuteposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('MeetingMinutes'),



      'singular_name' => __('meetingminutes'),



      'all_items' => __('All meetingminutes'),



      'add_new_item' => __('Add New meeting minutes'),



      'edit_item' => __('Edit meeting Minutes'),



      'view_item' => __('View meeting Minutes'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'meetingminutes'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'meetingminute',



    'graphql_plural_name' => 'meetingminutes',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('meetingminute', $args);



}



add_action('init', 'create_meetingminuteposttype');



add_action('init', 'jss_create_meetingminute_taxonomies', 0);



function jss_create_meetingminute_taxonomies()

{



  register_taxonomy(



    'meetingminute_cat',

    'meetingminute',



    array(



      'hierarchical' => true,



      'label' => 'meetingminute Category',



      'singular_label' => 'meetingminute Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'meetingminuteCategory',



      'graphql_plural_name' => 'meetingminuteCategory',

      



    )

  );

}


// research documents

function create_researchdocumentposttype()

{



  $args = array(



    'labels' => array(



      'name' => __('Research Documents'),



      'singular_name' => __('Research Documents'),



      'all_items' => __('All researchdocuments'),



      'add_new_item' => __('Add New research document'),



      'edit_item' => __('Edit research document'),



      'view_item' => __('View research document'),



      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','tags'),





    ),



    'public' => true,



    'has_archive' => true,



    'rewrite' => array('slug' => 'researchdocuments'),



    'show_ui' => true,



    'show_in_menu' => true,



    'show_in_nav_menus' => true,



    'capability_type' => 'page',



    'supports' => array('title'),



    'exclude_from_search' => true,



    'menu_position' => 30,



    'show_in_graphql' => true,



    'graphql_single_name' => 'researchdocument',



    'graphql_plural_name' => 'researchdocuments',



    'menu_icon' => 'dashicons-groups'



  );



  register_post_type('researchdocument', $args);



}



add_action('init', 'create_researchdocumentposttype');



add_action('init', 'jss_create_researchdocument_taxonomies', 0);



function jss_create_researchdocument_taxonomies()

{



  register_taxonomy(



    'researchdocument_cat',

    'researchdocument',



    array(



      'hierarchical' => true,



      'label' => 'researchdocument Category',



      'singular_label' => 'researchdocument Category',



      'rewrite' => true,



      'show_in_graphql' => true,



      'graphql_single_name' => 'researchdocumentCategory',



      'graphql_plural_name' => 'researchdocumentCategory',

      



    )

  );

}

function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'post' );
};