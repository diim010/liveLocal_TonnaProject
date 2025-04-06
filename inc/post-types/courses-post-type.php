<?php
/**
 * The post type class.
 *
 * @package live-local
 **/

namespace Live_Local;

/**
 * Registers the Course Course Post Type post type.
 */
class Course_Post_Type extends Post_Type {

  public function register() {
    // Modify all the i18ized strings here.
    $generated_labels = [
      // The Post_Type ask__ function wraps the air-helper ask__, and automatically registers the keys to Polylang!
      // self::ask__( 'Key', 'Default value' )
      // -> Key: Default value => 'Default value'
      'menu_name'          => self::ask__( 'Course', 'Course' ),
      'name'               => self::ask__( 'Course', 'Courses' ),
      'singular_name'      => self::ask__( 'Course', 'Course' ),
      'name_admin_bar'     => self::ask__( 'Course', 'Course' ),
      'add_new'            => self::ask__( 'Course', 'Add New' ),
      'add_new_item'       => self::ask__( 'Course', 'Add New Course' ),
      'new_item'           => self::ask__( 'Course', 'New Course' ),
      'edit_item'          => self::ask__( 'Course', 'Edit Cours' ),
      'view_item'          => self::ask__( 'Course', 'View Cours' ),
      'all_items'          => self::ask__( 'Course', 'All Courses' ),
      'search_items'       => self::ask__( 'Course', 'Search Courss' ),
      'parent_item_colon'  => self::ask__( 'Course', 'Parent Courss:' ),
      'not_found'          => self::ask__( 'Course', 'No Courses found.' ),
      'not_found_in_trash' => self::ask__( 'Course', 'No Courses found in Trash.' ),
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
        'with_front'  => false,
        'slug'        => 'course-post-type',
      ],
      'supports'            => [ 'title', 'editor', 'thumbnail', 'revisions' ],
      'taxonomies'          => [],
    ];

    $this->register_wp_post_type( $this->slug, $args );
  }
}
