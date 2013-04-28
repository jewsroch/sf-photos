<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title><?php
 printGalleryTitle(); ?> | <?php echo getAlbumTitle();?> | <?php echo getImageTitle();?></title>
	<link rel="stylesheet" href="<?php echo  $_zp_themeroot ?>/zen.css" type="text/css" />
	<script type="text/javascript">
	  function toggleComments() {
      var commentDiv = document.getElementById("comments");
      if (commentDiv.style.display == "block") {
        commentDiv.style.display = "none";
      } else {
        commentDiv.style.display = "block";
      }
	  }
	</script>
	<?php zenJavascript(); ?>

</head>

<body>
<?php printAdminToolbox(); ?>
<div>
	<div class="spiffy_content">
		
		<div class="imgnav">
			<?php if (hasPrevImage()) { ?>
			<a href="<?php echo getPrevImageURL();?>" title="Previous Image">&laquo; prev</a>
			<?php } if (hasNextImage()) { ?>
			<a href="<?php echo getNextImageURL();?>" title="Next Image">next &raquo;</a>
			<?php } ?>
		</div>

		<h1><span><a href="<?php echo getGalleryIndexURL();?>" title="Gallery Index"><?php echo getGalleryTitle();?></a>
		  | <a href="<?php echo getAlbumLinkURL();?>" title="Gallery Index"><?php echo getAlbumTitle();?></a>
		  | </span> <?php printImageTitle(true); ?></h1>
		
	</div>
	<b class="spiffy">
		<b class="spiffy5"></b>
		<b class="spiffy4"></b>
		<b class="spiffy3"></b>
		<b class="spiffy2"><b></b></b>
		<b class="spiffy1"><b></b></b>
	</b>
</div> 

<div>
	<b class="contentbox">
		<b class="contentbox1"><b></b></b>
		<b class="contentbox2"><b></b></b>
		<b class="contentbox3"></b>
		<b class="contentbox4"></b>
		<b class="contentbox5"></b>
	</b> 
	<div class="contentbox_content">

	<div id="image">
		<MAP NAME = "imagenav">
		<?php if (hasPrevImage()) { ?>
		<AREA SHAPE="rect" COORDS="0,0 297,297" href="<?=getPrevImageURL();?>">
		<?php } if (hasNextImage()) { ?>
		<AREA SHAPE="rect" COORDS="299,0 595,595" href="<?=getNextImageURL();?>">
		<?php } ?>
		</MAP>
		<IMG src="<?php echo getDefaultSizedImage();?>" USEMAP="#imagenav">
	</div>

	
	<div id="narrow">
	
		<p class="imgdesc"><?php printImageDesc(true); ?></p>

		<p class="imgdesc"><a href="<?php echo getFullImageURL();?>" title="view original full size" target="_blank">view original size</a></p>
		
		<div id="comments">
		<?php $num = getCommentCount(); echo ($num == 0) ? "" : ("<h3>Comments ($num)</h3>"); ?>
			<?php while (next_comment()):  ?>
			<div class="comment">
				<div class="commentmeta">
					<h4><?php printCommentAuthorLink(); ?> says:</h4> 
					<?php echo getCommentDate();?>, <?php echo getCommentTime();?><?php printEditCommentLink('Edit', ' | ', ''); ?>
				</div>
				<div class="commentbody">
					<?php echo getCommentBody();?>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="imgcommentform">
				<!-- If comments are on for this image AND album... -->
				<h3>Add a comment:</h3>
				<form id="commentform" action="#" method="post">
				<div><input type="hidden" name="comment" value="1" />
          		<input type="hidden" name="remember" value="1" />
          <?php if (isset($error)) { ?><tr><td><div class="error">There was an error submitting your comment. Name, a valid e-mail address, and a comment are required.</div></td></tr><?php } ?>

					<table border="0">
						<tr>
							<td><label for="name">Name:</label></td>
							<td><input type="text" id="name" name="name" size="20" value="<?php echo $stored[0];?>" class="inputbox" />
							</td>
						</tr>
						<tr>
							<td><label for="email">E-Mail:</label></td>
							<td><input type="text" id="email" name="email" size="20" value="<?php echo $stored[1];?>" class="inputbox" />
							</td>
						</tr>
						<tr>
							<td><label for="website">Site:</label></td>
							<td><input type="text" id="website" name="website" size="40" value="<?php echo $stored[2];?>" class="inputbox" /></td>
						</tr>
            
					</table>
					<textarea name="comment" rows="6" cols="40"></textarea>
					<br />
					<input type="submit" value="Add Comment" class="pushbutton" /></div>
				</form>
			</div>
		</div>
	</div>
	</div>

	<b class="contentbox">
		<b class="contentbox5"></b>
		<b class="contentbox4"></b>
		<b class="contentbox3"></b>
		<b class="contentbox2"><b></b></b>
		<b class="contentbox1"><b></b></b>
	</b>
</div> 

</div>
</body>
</html>
