<div class="content">
<div class="content-block">

<?php 
if( !dynamic_sidebar( 'sidebar-top' ) ) { 
   ?><h2><?php _e('Categories'); ?></h2>
   <ul>
   <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
   </ul>
   <h2 ><?php _e('Archives'); ?></h2>
   <ul>
   <?php wp_get_archives('type=monthly'); ?>
   </ul><?php
} 

if( is_user_logged_in() ) {
   ?>
   <div class="widget">
   <h3>Rollerbillies Website</h3>
   <ul>
   <li><a href="<?php echo admin_url( "post-new.php" ); ?>">New Post</a></li>
   <li><a href="<?php echo get_admin_url(); ?>">Manage the site</a></li>
   <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
   </ul>
   </div>
   <?php 
}
?>
</div>
</div>