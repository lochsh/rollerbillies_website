<?php 

add_filter('show_admin_bar', '__return_false');

/*
 * Register our top navigation menu
*/
function rb_init()
{
   register_nav_menu( 'topbar_menu', __( 'Top Bar Menu' ) );
}
add_action( 'init', 'rb_init' );

/*
 * Register the sidebar.
 */
function rb_sidebar_init()
{
   register_sidebar( array(
      'name' => __( 'Top Sidebar' ),
      'id' => 'sidebar-top',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
   ) );
}
add_action( 'widgets_init', 'rb_sidebar_init' );

/*
 * Register our Javascript code.
 */
function rb_load_javascript()
{
   wp_enqueue_script(
   'rb-main-javascript',
   get_stylesheet_directory_uri() . '/main.js',
   array( 'jquery' )
   );
   wp_enqueue_script("myUi","https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/jquery-ui.min.js");
}
add_action( 'wp_enqueue_scripts', 'rb_load_javascript' );

function rb_show_top()
{
?>
   <a href="<?php echo home_url(); ?>" id="main-logo"
         title="Cambridge Rollerbillies"></a>
   
         <div id="topbar">
         <?php
         wp_nav_menu( array(
               'theme_location' => 'topbar_menu'
         ) );
   ?>
   <div class="social">
   <a href="https://www.facebook.com/Rollerbillies" class="logo fb-logo"
      title="Rollerbillies Facebook Page"></a>
   <a href="https://twitter.com/_Rollerbillies_" class="logo twitter-logo"
      title="Rollerbillies Twitter Feed"></a>
   </div>
   
   </div>
<?php 
}

function rb_show_posts( $show_dates = TRUE )
{
   if( have_posts() ) {
      while ( have_posts() ) {
         the_post();
         ?>
   <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="blog-title"><?php the_title(); ?></h2>
      <?php 
         if( $show_dates ) {
      ?>
      <h4 class="blog-time">Posted on <?php the_time('F jS, Y') ?></h4>
      <?php 
         }
      ?>
      <div class="blog-content">
   <?php
         the_content(__('Read more...')); 
   ?>
      </div>
      <?php edit_post_link( 'Edit this post', '<div class="edit-link">', '</div>' ); ?>
   </div>
   <?php
         if( more_posts() ) { 
   ?>
   </div> <!-- END content-block -->
   <div class="content-split"></div>
   <div class="content-block">
   <?php
         }
      }
      
      if( has_previous_posts() || has_next_posts() ) {
         ?>
         <div class="nav">
            <div class="nav-previous"><?php next_posts_link( '&laquo; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>
         </div><?php
      }
   } else { 
   ?>
      <div class="blog-no-posts">
         <?php _e('Sorry, no posts matched your criteria.'); ?>
      </div>
   <?php 
   }
   
}

/*!
 * Utility that allows checking of more posts within Wordpress' "The Loop" 
 * without side effects like advancing the loop.
 */
function more_posts() 
{
  global $wp_query;
  return $wp_query->current_post + 1 < $wp_query->post_count;
}

function has_previous_posts() {
   ob_start();
   previous_posts_link();
   $result = strlen(ob_get_contents());
   ob_end_clean();
   return $result;
}

function has_next_posts() {
   ob_start();
   next_posts_link();
   $result = strlen(ob_get_contents());
   ob_end_clean();
   return $result;
}

?>