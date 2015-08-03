<?php 
get_header();
?>

<div id="main" class="normal">

<?php rb_show_top(); ?>

<div id="column-main" class="content">

<div class="content-block">
<div id="logo-block"></div>

<?php rb_show_posts(); ?>

</div> <!-- END content-block -->
</div> <!-- END content -->

<div id="column-right" class="sidebar">
<div class="content-wrapper">
   <?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>
</div>

