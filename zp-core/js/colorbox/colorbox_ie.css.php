<link rel="stylesheet" href="<?php
 echo FULLWEBPATH . "/" . ZENFOLDER ?>/js/colorbox/colorbox.css" type="text/css" />
<?php 
/*
    The following fixes png-transparency for IE6.  
    It is also necessary for png-transparency in IE7 & IE8 to avoid 'black halos' with the fade transition
    
    Since this method does not support CSS background-positioning, it is incompatible with CSS sprites.
    Colorbox preloads navigation hover classes to account for this.
    
    !! Important Note: AlphaImageLoader src paths are relative to the HTML document,
    while regular CSS background images are relative to the CSS document.
*/
$navigator_user_agent = ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) ? strtolower( $_SERVER['HTTP_USER_AGENT'] ) : '';
if (stristr($navigator_user_agent, "msie")) {
	?>
	<style>
	.cboxIE #cboxTopLeft{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderTopLeft.png, sizingMethod='scale');}
	.cboxIE #cboxTopCenter{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderTopCenter.png, sizingMethod='scale');}
	.cboxIE #cboxTopRight{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderTopRight.png, sizingMethod='scale');}
	.cboxIE #cboxBottomLeft{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderBottomLeft.png, sizingMethod='scale');}
	.cboxIE #cboxBottomCenter{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderBottomCenter.png, sizingMethod='scale');}
	.cboxIE #cboxBottomRight{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderBottomRight.png, sizingMethod='scale');}
	.cboxIE #cboxMiddleLeft{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderMiddleLeft.png, sizingMethod='scale');}
	.cboxIE #cboxMiddleRight{background:transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo WEBPATH.'/'.ZENFOLDER?>/js/colorbox/images/internet_explorer/borderMiddleRight.png, sizingMethod='scale');}
	</style>
	<?php
}
?>