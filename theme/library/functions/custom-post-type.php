<?php

/**
 * Custom Post Type Example
 * (http://codex.wordpress.org/Function_Reference/register_post_type)
 * This page walks you through creating
 * a custom post type and taxonomies. You
 * can edit this one or copy the following code
 * to create another one.
 *
 * I put this in a separate file so as to
 * keep it organized. I find it easier to edit
 * and change things if they are concentrated
 * in their own file.
 */

// let's create the function for the custom type
function ocupop_projects_post_type()
{
    // creating (registering) the custom type

    register_post_type(
        'projects',
        array(
          'labels' => array(
            'name' => __('Projects', 'ocupop'), /* This is the Title of the Group */
            'singular_name' => __('Project', 'ocupop'), /* This is the individual type */
            'all_items' => __('All Projects', 'ocupop'), /* the all items menu item */
            'add_new' => __('Add New', 'ocupop'), /* The add new menu item */
            'add_new_item' => __('Add New Project', 'ocupop'), /* Add New Display Title */
            'edit' => __('Edit', 'ocupop'), /* Edit Dialog */
            'edit_item' => __('Edit Projects', 'ocupop'), /* Edit Display Title */
            'new_item' => __('New Project', 'ocupop'), /* New Display Title */
            'view_item' => __('View Project', 'ocupop'), /* View Display Title */
            'search_items' => __('Search Projects', 'ocupop'), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.', 'ocupop'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash', 'ocupop'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
          ), /* end of arrays */
          'description' => __('This is an example of a custom post type', 'ocupop'), /* Custom Type Description */
          'public' => true,
          'publicly_queryable' => true,
          'exclude_from_search' => false,
          'show_ui' => true,
          'query_var' => true,
          'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
          'menu_icon'      => 'dashicons-book',
          'rewrite'  => array('slug' => 'project', 'with_front' => true), /* you can specify its url slug */
          'has_archive' => 'projects', /* you can rename the slug here */
          'capability_type' => 'post',
          'hierarchical' => false,
          'show_in_rest' => true,
          /* the next one is important, it tells what's enabled in the post editor */
          'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt','custom-fields', 'revisions', 'sticky'),

          'template' => array(
            array( 'core/group',array(
              "className" => "prose",
              "layout"=> array(
                "type"=> "constrained"
              )
            ),
            array(
              array( 'core/columns', array(
                "style"=> array(
                  "spacing"=> array(
                    "blockGap"=> array(
                      "left"=>"var:preset|spacing|60"
                    )
                  )
                )
              ),
              array(
                array( 'core/column', array(), array(
                    array( 'core/heading', array(
                        'placeholder' => 'Secondary heading can go here.'
                    ) ),
                    array( 'core/paragraph', array(
                        'placeholder' => 'Add your title at the top of this page where it says "Add Title". In this section you may enter any content you like. Please follow this pre-defined layout with text on the left and images on the right for consistancy. '
                    ) ),
                    array( 'core/paragraph', array(
                        'placeholder' => 'Make sure you add a featured Image by clicking "Project" in the column on the right, and then adding an image under "Featured Image"'
                    ) ),
                    array( 'core/separator'),
                    array( 'core/paragraph', array(
                        'placeholder' => 'Feel free to add other block elements such as separators and buttons'
                    ) ),
                ) ),
                array( 'core/column', array(), array(
                  array( 'core/image', array(
                      "id" => 53601,
                      "sizeSlug"=> "large",
                      "linkDestination"=> "none",
                      "style" => array (
                        "border" => array(
                          "radius" => "1rem"
                        )
                      )
                    )
                  ),

                ) ),
              ) )
            ) )
          ),
        ) /* end of options */
    ); /* end of register post type */
}
add_action('init', 'ocupop_projects_post_type');



/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// Add Project categories
register_taxonomy(
    'project_category',
    array('projects'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    array(
    'hierarchical' => true,     /* if this is true, it acts like categories */
    'labels' => array(
      'name' => __('Project Categories', 'ocupop'), /* name of the custom taxonomy */
      'singular_name' => __('Project Category', 'ocupop'), /* single taxonomy name */
      'search_items' =>  __('Search Project Categories', 'ocupop'), /* search title for taxomony */
      'all_items' => __('All Project Categories', 'ocupop'), /* all title for taxonomies */
      'parent_item' => __('Parent Project Category', 'ocupop'), /* parent title for taxonomy */
      'parent_item_colon' => __('Parent Project Category:', 'ocupop'), /* parent taxonomy title */
      'edit_item' => __('Edit Project Category', 'ocupop'), /* edit custom taxonomy title */
      'update_item' => __('Update Project Category', 'ocupop'), /* update title for taxonomy */
      'add_new_item' => __('Add New Project Category', 'ocupop'), /* add new title for taxonomy */
      'new_item_name' => __('New Project Category Name', 'ocupop') /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
    // 'rewrite' => array('slug' => 'project_category'),
    'show_in_rest' => true,
    )
);

// Add project tags (these act like categories)
register_taxonomy(
    'project_tag',
    array('projects'),
    array(
    'hierarchical' => false,
    'labels' => array(
      'name' => __('Project Tags', 'ocupop'),
      'singular_name' => __('Project Tag', 'ocupop'),
      'search_items' =>  __('Search Project Tags', 'ocupop'),
      'all_items' => __('All Project Tags', 'ocupop'),
      'parent_item' => __('Parent Project Tag', 'ocupop'),
      'parent_item_colon' => __('Parent Project Tag:', 'ocupop'),
      'edit_item' => __('Edit Project Tag', 'ocupop'),
      'update_item' => __('Update Project Tag', 'ocupop'),
      'add_new_item' => __('Add New Project Tag', 'ocupop'),
      'new_item_name' => __('New Project Tag Name', 'ocupop')
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
    )
);





