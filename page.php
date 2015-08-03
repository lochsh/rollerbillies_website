<?php
/**
 * The template for displaying all pages.
 */

get_header(); 
?>

<div id="main" class="normal">

<?php rb_show_top(); ?>

<div id="column-main" class="content">

<div class="content-block">
<div id="logo-block"></div>

<?php rb_show_posts( FALSE ); ?>

</div> <!-- END content-block -->
</div> <!-- END content -->

<?php get_footer(); ?>
</div>
