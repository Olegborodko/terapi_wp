<?php

function create_custom_post_type_doctors()
{
  $labels = array(
    'name'               => 'Doctors',
    'singular_name'      => 'Doctor',
    'menu_name'          => 'Doctors',
    'name_admin_bar'     => 'Doctor',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Doctor',
    'new_item'           => 'New Doctor',
    'edit_item'          => 'Edit Doctor',
    'view_item'          => 'View Doctor',
    'all_items'          => 'All Doctors',
    'search_items'       => 'Search Doctors',
    'parent_item_colon'  => 'Parent Doctors:',
    'not_found'          => 'No Doctors found.',
    'not_found_in_trash' => 'No Doctors found in Trash.',
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'doctors'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array('post_tag'),
  );

  register_post_type('doctors', $args);
}

add_action('init', 'create_custom_post_type_doctors');
