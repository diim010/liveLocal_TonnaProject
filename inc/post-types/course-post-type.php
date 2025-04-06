<?php
/**
 * The post type class.
 *
 * @package live-local
 **/

namespace Live_Local;

/**
 * Registers the Your Post Type post type.
 */
class Course_Post_Type extends Post_Type {

  public function register() {
    // Modify all the i18ized strings here.
    $generated_labels = [
      // The Post_Type ask__ function wraps the air-helper ask__, and automatically registers the keys to Polylang!
      // self::ask__( 'Key', 'Default value' )
      // -> Key: Default value => 'Default value'
      'menu_name'          => self::ask__( 'Course Post Type', 'Courses' ),
      'name'               => self::ask__( 'Course Post Type', 'Course' ),
      'singular_name'      => self::ask__( 'Course Post Type', 'Course' ),
      'name_admin_bar'     => self::ask__( 'Course Post Type', 'Course' ),
      'add_new'            => self::ask__( 'Course Post Type', 'Add New' ),
      'add_new_item'       => self::ask__( 'Course Post Type', 'Add New course' ),
      'new_item'           => self::ask__( 'Course Post Type', 'New course' ),
      'edit_item'          => self::ask__( 'Course Post Type', 'Edit course' ),
      'view_item'          => self::ask__( 'Course Post Type', 'View course' ),
      'all_items'          => self::ask__( 'Course Post Type', 'All courses' ),
      'search_items'       => self::ask__( 'Course Post Type', 'Search courses' ),
      'parent_item_colon'  => self::ask__( 'Course Post Type', 'Parent courses:' ),
      'not_found'          => self::ask__( 'Course Post Type', 'No courses found.' ),
      'not_found_in_trash' => self::ask__( 'Course Post Type', 'No courses found in Trash.' ),
    ];

    // Definition of the post type arguments. For full list see:
    // http://codex.wordpress.org/Function_Reference/register_post_type
    $args = [
      'labels'              => $generated_labels,
      'menu_icon'           => null,
      'public'              => true,
      'show_ui'             => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'show_in_rest'        => false,
      'pll_translatable'    => true,
      'rewrite'             => [
        'with_front'  => true,
        'slug'        => 'course-post-type',
      ],
      'supports'            => [ 'title', 'editor', 'thumbnail', 'revisions' ],
      'taxonomies'          => [],
    ];

    $this->register_wp_post_type( $this->slug, $args );
  }
}
