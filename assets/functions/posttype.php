<?php
//Put Shortcode in this section//
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Create Projects
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
/*add_action('init','create_projects' );
function create_projects() {
  $labels = array(
    'name' => _x('Projects', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'Project'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'view_item' => __('View Project'),
    'search_items' => __('Search Project'),
    'not_found' =>  __('No Projects found'),
    'not_found_in_trash' => __('No Projects found in Trash'),
    'parent_item_colon' => ''
  );
  $supports = array('title','page-attributes');
  register_post_type('project',
    array(
    'show_in_nav_menus' => true,
    'labels' => $labels,
    'public' => true,
    'supports' => $supports,
    'has_archive' => true,
    )
  );
}
function template_override($template)
{
  global $wp_query;
  //Get the post type of the query object
  $post_type = get_query_var('post_type');
  if($post_type == 'project' )
  {

  if ( is_archive() || is_search() ) {
      return locate_template('components/project/archive.php');
    }
    else{
    //die('here');
    // replace the normal results with my custom archive page
    return locate_template('components/project/single.php');
   }
  }
  return $template;
}
add_filter('template_include', 'template_override');
*/

/*
<?php get_header(); ?>
<?php $args = array(
        'posts_per_page'   => -1,
        'offset'           => 0,
        'orderby'          => 'menu_order',
        'order'            => 'ASC',
        'post_type'        => 'project',
        'post_status'      => 'publish',
        'suppress_filters' => true
        );
        $projects = get_posts( $args );
?>

*/

?>