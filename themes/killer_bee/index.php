<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title><?php
 printGalleryTitle(); ?></title>
  <link rel="stylesheet" href="<?= $_zp_themeroot ?>/killer_bee.css" type="text/css" />
  <?php zenJavascript(); ?>
  <script type="text/javascript" src="<?= $_zp_themeroot ?>/killer_bee.js"></script>
</head>

<body onload="IB_preload('<?= $_zp_themeroot ?>/images/logo-on.gif')">
<div id="main">
  <?php printAdminToolbox(); ?>
  <div id="title">
	<h1>
	  <?php echo getGalleryTitle(); ?>
	</h1>
    <a href="http://imagebaker.com/" onmouseout="IB_restore()" onmouseover="IB_swap('logo','','<?= $_zp_themeroot ?>/images/logo-on.gif',1)"  title="Home">
	  <img src="<?= $_zp_themeroot ?>/images/logo-off.gif" alt="Home" id="logo" width="25" height="25" />
	</a> 	
  </div><!--#title-->
  <hr /> 

  <?php printPageListWithNav("&laquo; prev", "next &raquo;"); ?>

  <div id="index">

    <?php while (next_album()): ?>
    <div class="indexcell">
      <div class="indexthumb">
	    <a href="<?=getAlbumLinkURL();?>" title="<?=getAlbumTitle();?>">
          <?php printAlbumThumbImage(getAlbumTitle()); ?>
	    </a>
	  </div><!--.indexthumb-->
      <h2>
	    <a href="<?=getAlbumLinkURL();?>" title="<?=getAlbumTitle();?>">
          <?php printAlbumTitle(); ?>
		</a>
	    <?php printAlbumDate(); ?>
	  </h2>
      <div id="albumDescEditable">
	    <?php printAlbumDesc(); ?>
	  </div><!--#albumDescEditable-->

    </div><!--.indexcell-->
    <?php endwhile; ?>

  </div><!--#index-->
  <?php printPageNav("&laquo; prev", "|", "next &raquo;"); ?>
</div><!--#main-->

<div id="footer">
</div><!--#footer-->

<div class="footnote">
  Powered by 
  <a href="http://zenphoto.org/" onmouseout="IB_restore()" onmouseover="IB_swap('zp_button','','<?= $_zp_themeroot ?>/images/zp_button-on.gif',1)"  title="zenphoto.org">
	<img src="<?= $_zp_themeroot ?>/images/zp_button-off.gif" alt="ZenPhoto" id="zp_button" width="78" height="13" />
  </a>
  <br />

  template by 
  <a href="http://imagebaker.com/">ImageBaker</a> 
  licensed under a 
  <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/">Creative Commons License</a>
  <br /> 

  checked for valid 
  <a href="http://validator.w3.org/check?uri=referer">XHTML</a> 
  and 
  <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
</div><!--.footnote-->
</body>
</html>
