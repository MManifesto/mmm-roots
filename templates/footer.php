<?php
global $MMM_Roots;
$footerText = $MMM_Roots->get_setting("footer_text");

?>

<div class="footer-wrapper">
	<footer class="content-info container" role="contentinfo">
	  <div class="row sidebar">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
	  </div>
	  <div class="row sitedetails">
	  	<div class="col-lg-12">
		<p class="pull-right">
			<?php
				echo stripslashes($footerText);
			?>
		</p>
		<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> - All rights reserved</p>
	</div>
	  </div>
	</footer>
</div>

<?php wp_footer(); ?>