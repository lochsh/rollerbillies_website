<br clear="all"/>
<div id="footer">

<div id="unicorn-logo"></div>
<div id="unicorn-text">Powered by unicorns.
</div>

<div class="social">
<a href="https://www.facebook.com/Rollerbillies" class="logo fb-logo"
   title="Rollerbillies Facebook Page"></a>
<a href="https://twitter.com/_Rollerbillies_" class="logo twitter-logo"
   title="Rollerbillies Twitter Feed"></a>
</div>

<div id="copyright">
Copyright 2013 to current date. Cambridge Rollerbillies.
<span id="login-bottom">(
<?php if( !is_user_logged_in() ) { ?>
<a href="<?php echo wp_login_url(); ?>">Login</a>
<?php } else { ?>
<a href="<?php echo wp_logout_url(); ?>">Logout</a>
<?php } ?>)</span>

</div>

</div><!-- END main -->

</div>
</body>
</html>