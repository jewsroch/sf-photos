<?php
 if (!defined('WEBPATH')) die(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

	<head>
	
		<title><?php echo $conf['website_title']; ?></title>
		
		<link rel="stylesheet" href="<?php echo  $_zp_themeroot ?>/css/zen.css" type="text/css" />
		
		<script type="text/javascript" src="<?php echo $_zp_themeroot ?>/js/reflection.js"></script>
		<?php zenJavascript(); ?>
		
	</head>
	
	<body>
    
    	<?php printAdminToolbox(); ?>
	
		<div id="header">
			<a href="<?php echo $conf['website_url']; ?>" title="<?php echo $conf['website_title']; ?>"><?php echo $conf['website_title']; ?></a>
		</div>
		
		<div id="wrap">
		
			<div id="content">
				
				<div class="imgnav">
					<?php if (hasPrevImage()) { ?>
					<div class="imgprevious"><a href="<?php echo getPrevImageURL();?>" title="Previous Image">&laquo; prev</a></div>
					<?php } if (hasNextImage()) { ?>
					<div class="imgnext"><a href="<?php echo getNextImageURL();?>" title="Next Image">next &raquo;</a></div>
					<?php } ?>
				</div>
			
				<div id="gallerytitle">
					<h2><span><a href="<?php echo getGalleryIndexURL();?>" title="Gallery Index"><?php echo getGalleryTitle();?></a>
					  | <a href="<?php echo getAlbumLinkURL();?>" title="Gallery Index"><?php echo getAlbumTitle();?></a>
					  | </span> <?php printImageTitle(true); ?></h2>
				</div>
	
				<div id="image">
					<a href="<?php echo getFullImageURL();?>" title="<?php echo getImageTitle();?>"> <?php printDefaultSizedImage(getImageTitle()); ?></a> 
				</div>

			</div>
		
		</div>
	
	</body>

</html>
