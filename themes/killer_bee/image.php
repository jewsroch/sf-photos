<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title><?php
 printGalleryTitle(); ?> | <?=getAlbumTitle();?> | <?=getImageTitle();?></title>
  <link rel="stylesheet" href="<?= $_zp_themeroot ?>/killer_bee.css" type="text/css" />
  <?php zenJavascript(); ?>
  <script language="Javascript" type="text/javascript" src="<?= $_zp_themeroot ?>/killer_bee.js"></script>
</head>

<body onload="IB_preload('<?= $_zp_themeroot ?>/images/logo-on.gif')">
<div id="main">
  <?php printAdminToolbox(); ?>
  <div id="title">
    <h1>
	  <a href="<?=getGalleryIndexURL();?>" title="Gallery Index"><?=getGalleryTitle();?></a> | <a href="<?=getAlbumLinkURL();?>" title="Gallery Index"><?=getAlbumTitle();?></a> | <?php printImageTitle(true); ?>
	</h1>
    <a href="http://imagebaker.com/" onmouseout="IB_restore()" onmouseover="IB_swap('logo','','<?= $_zp_themeroot ?>/images/logo-on.gif',1)"  title="Home">
	  <img src="<?= $_zp_themeroot ?>/images/logo-off.gif" alt="Home" id="logo" width="25" height="25" border="0" />
	</a>
  </div><!--#title-->
  <hr />

  <div id="imgcontent">
    <div id="imgnav">
	  <?php if (hasPrevImage()) { ?> 
		<a href="<?=getPrevImageURL();?>" title="Previous Image">&laquo; prev</a> |
	  <?php } else { ?> 
	    <span class="current">&laquo; prev</span> |
	  <?php if (hasNextImage()) echo ""; } if (hasNextImage()) { ?> 
	    <a href="<?=getNextImageURL();?>" title="Next Image">next &raquo;</a>
	  <?php } else { ?> 
	    <span class="current">next &raquo;</span>
	  <?php } ?>
    </div><!--#imgnav-->
	
    <div class="image">  
      <a href="<?=getFullImageURL();?>" title="<?=getImageTitle();?>">
        <?php printCustomSizedImage(getImageTitle(), null, 470); ?>
	  </a>
	  <div id="imageDescEditable">
        <?php printImageDesc(true); ?>
      </div><!--imageDescEditable-->
    </div><!--.image-->
  </div><!--#imgcontent-->	
</div><!--#main-->
<div id="footer">
</div><!--#footer-->

<div id="header">
</div><!--#header-->
<div id="comments" style="clear: both; padding-top: 10px;">
  <div class="commentcount">
    <?php $num = getCommentCount(); echo ($num == 0) ? "No comments" : (($num == 1) ? "<strong>One</strong> comment" : "<strong>$num</strong> comments"); ?> 
	on this image:
  </div><!--.commentcount-->

  <?php while (next_comment()):  ?>
  <div class="comment">
    <div class="commentmeta">
      <span class="commentauthor"><?php printCommentAuthorLink(); ?></span> | 
      <span class="commentdate"><?=getCommentDate();?>, <?=getCommentTime();?> PST</span>
    </div><!--.commentdata-->
    <div class="commentbody">
	  <?=getCommentBody();?>
	</div><!--.commentbody-->
  </div><!--.comment-->
  <?php endwhile; ?>
          
  <div class="imgcommentform">
    <!-- If comments are on for this image AND album... -->
    Add a comment:
    <form name="commentform" id="commentform" action="#comments" method="post">
      <input type="hidden" name="comment" value="1" />
      <input type="hidden" name="remember" value="1" />
      <?php if (isset($error)) { ?>
        <tr>
	      <td>
            <div class="error">
			  There was an error submitting your comment. Name, a valid e-mail address, and a comment are required.
            </div>
          </td>
		</tr>
      <?php } ?>
      <table border="0">
        <tr>
          <td>
	        <label for="name">Name:</label>
		  </td>
		  <td>
		    <input type="text" name="name" size="20" value="<?=$stored[0];?>" />
		  </td>
		</tr>
        <tr>
		  <td>
		    <label for="email">E-Mail: <br />(won't be public)</label>
		  </td>
		  <td>
			<input type="text" name="email" size="20" value="<?=$stored[1];?>" />
		  </td>
		</tr>
        <tr>
		  <td>
			<label for="website">Site:</label>
		  </td>
		  <td>
			<input type="text" name="website" size="20" value="<?=$stored[2];?>" />
		  </td>
		</tr>
        <!--<tr><td colspan="2"><label><input type="checkbox" name="remember" <?=($stored[3]) ? "checked=\"1\"" : ""; ?>> Save my information</label></td></tr>-->
      </table>
      <textarea name="comment" rows="6" cols="42">
      </textarea>
	  <br />
	  <div class="button">
        <input type="submit" value="Add Comment" />
      </div><!--.button-->
    </form>
  </div><!--.imgcommentform-->
</div><!--#comments-->

<div id="footer">
</div><!--.footer-->

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
