<!DOCTYPE html> 
<html> 
 
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
  <meta name="format-detection" content="telephone=no">
	<?php print $node->pwm_meta_robot; ?>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title><?php print $head_title; ?></title>
  
	<?php print $styles; ?>
  <?php print $head; ?>
	<?php print $scripts; ?>
  
	<?php //if (!empty($jqm_scripts)) { print $jqm_scripts; } ?>
  
	<link rel="shortcut icon" href="/<?php print path_to_theme(); ?>/images/favicon.png" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="144x144" href="/<?php print path_to_theme(); ?>/images/apple-touch-icon.png" /> 
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUMhJvT883PZZDXxRhJMcMc5aBkzdsdnk&sensor=true">
    </script>
	
	<script>
google.bookmarkbubble.Bubble.prototype.getIconUrl_ = function() {
  if (!this.iconUrl_) {
    var link = this.getLink(this.REL_ICON_);
    if (!link || !(this.iconUrl_ = link.href)) {
      this.iconUrl_ = '/<?php print path_to_theme(); ?>/images/apple-touch-icon.png';
    }
  }
  return this.iconUrl_;
};
	

	</script>
</head> 
 
<body class="panel-nav <?php if ($section_title) : print $section_title; endif; ?>">

<div data-role="page" class="<?php print $node_classes; ?>" id="main-page-content">

	<div id="header" data-role="header" data-theme="a" data-position="<?php print $pw_mobile_header_position; ?>" data-tap-toggle="false"> 
		<div id="logo"><a href="<?php print $front_page; ?>mobile" title="<?php print $site_name . ' ' . t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name . ' ' . t('Logo'); ?>"></a></div>
		<a href="#" data-icon="back" data-direction="reverse" title="Back" data-rel="back" data-iconpos="notext">Back</a>
		<a href="#nav" data-icon="bars" data-iconpos="notext">Menu</a>
	</div><!-- /header -->   

	<?php if($pw_mobile_telephone || $pw_mobile_email): ?>
		<div id="navbar" data-role="content" data-theme="<?php print $pw_mobile_callout_swatch ; ?>">
			<div data-role="navbar" data-iconpos="top">
				<ul>
					<?php if($pw_mobile_email): ?><li><a href="mailto:<?php print $pw_mobile_email; ?>" data-icon="pw-email" data-theme="<?php print $pw_mobile_callout_swatch ; ?>">Email us</a></li><?php endif; ?>
					<?php if($pw_mobile_telephone): ?><li><a href="tel:<?php print $pw_mobile_telephone; ?>" data-icon="pw-tel" data-theme="<?php print $pw_mobile_callout_swatch ; ?>">Call us</a></li><?php endif; ?>
					<li><a href="/mobile/contact" data-icon="pw-location" data-theme="<?php print $pw_mobile_callout_swatch ; ?>">Find us</a></li>
				</ul>
			</div>
		</div>
	<?php endif; ?>
	
	
  
	<div data-role="content" data-theme="a">
		<?php if($content_top) : ?>
			<div id="content-top">
				<?php print $content_top; ?>
			</div>
		<?php endif; ?>
		<div class="content-primary">
			<?php print $messages; ?>
			<?php print $content; ?>
		</div>
		<div class="content-secondary">
			<?php if ($first): ?>
				<div class="first-sidebar">
					<?php print $first; ?>
				</div>
			<?php endif; ?>
		
			<?php /* Not needed if usin Panels 
			<?php if ($second): ?>
				<div class="second-sidebar">
					<?php print $second; ?>
				</div>
			<?php endif; ?>
			*/ ?>
		</div>
	</div><!-- /data-role="content" -->
    
	<?php /*if ($footer): ?>
		<div data-role="footer" data-theme="a" data-position="inline"> 
			<?php print $footer; ?>
		</div><!-- /footer --> 
	<?php endif;*/ ?>

  
	<div id="footer" data-role="footer" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" data-position="inline">
		<div data-role="navbar">
			<ul>
				<?php if($pw_mobile_twitter): ?><li><a href="<?php print $pw_mobile_twitter ; ?>" data-icon="pw-twitter" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" target="_blank">Twitter</a></li><?php endif; ?>
				<?php if($pw_mobile_linkedin): ?><li><a href="<?php print $pw_mobile_linkedin ; ?>" data-icon="pw-linkedin" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" target="_blank">Linkedin</a></li><?php endif; ?>
				<?php if($pw_mobile_facebook): ?><li><a href="<?php print $pw_mobile_facebook ; ?>" data-icon="pw-facebook" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" target="_blank">Facebook</a></li><?php endif; ?>
				<?php if($pw_mobile_googleplus): ?><li><a href="<?php print $pw_mobile_googleplus ; ?>" data-icon="pw-googleplus" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" target="_blank">Google+</a></li><?php endif; ?>
				<?php if($pw_mobile_youtube): ?><li><a href="<?php print $pw_mobile_youtube ; ?>" data-icon="pw-youtube" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" target="_blank">Youtube</a></li><?php endif; ?>
				<li><a href="<?php print $front_page; ?>?noredirection=true" data-icon="plus" data-theme="<?php print $pw_mobile_footer_swatch ; ?>" target="_blank">Full site</a></li>
			</ul>
		</div>
	</div>

	<div data-role="panel" id="nav" data-theme="a" data-position-fixed="true" data-position="right" data-display="push">
		<h2>Menu</h2>
		<a class="close" href="#nav" data-role="button" data-rel="close" data-icon="delete" data-iconpos="notext" data-theme="a">Close</a>
		<?php print $nav; ?>
	</div><!-- /panel -->

</div><!-- /page --> 



<?php print $closure; ?>
  
</body> 
</html> 