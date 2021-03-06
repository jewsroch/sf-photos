<?php
 if(function_exists("printAllNewsCategories")) { ?>
<div class="menu">
	<h3><?php echo gettext("News articles"); ?></h3>
	<?php printAllNewsCategories(gettext("All news"),TRUE,"","menu-active"); ?>
</div>
<?php } ?>

<?php if(function_exists("printAlbumMenu")) { ?>
<div class="menu">
	<h3><?php echo gettext("Gallery"); ?></h3>
	<?php 
	if(!getOption("zenpage_zp_index_news") OR !getOption("zenpage_homepage")) {
		$allalbums = "";
	} else {
		$allalbums = gettext("Gallery index");
	}
	printAlbumMenu("list",NULL,"","menu-active","submenu","menu-active",$allalbums,false,false); 
	?>
</div>
<?php } ?>

<?php if(function_exists("printPageMenu")) { ?>
<div class="menu">
	<h3><?php echo gettext("Pages"); ?></h3>
	<?php	printPageMenu("list","","menu-active","submenu","menu-active"); ?>
</div>
<?php } ?>

<div class="menu">
<h3><?php echo gettext("Archive"); ?></h3>
	<ul>
	<?php
	  if($_zp_gallery_page == "archive.php") {
	  	echo "<li class='menu-active'>".gettext("Gallery And News")."</li>";
 	 	} else {
			echo "<li>"; printCustomPageURL(gettext("Gallery and News"),"archive"); echo "</li>";
		} 
		?>
	</ul>
</div>

<?php
if (getOption('RSS_album_image') || getOption('RSS_articles')) {
	?>
	<div class="menu">
	<h3><?php echo gettext("RSS"); ?></h3>
		<ul>
		<?php if(!is_null($_zp_current_album)) { ?>
		<?php printRSSLink('Album', '<li>', gettext('Album RSS'), '</li>'); ?>
		<?php } ?>
			<?php printRSSLink('Gallery','<li>','Gallery', '</li>'); ?>
			<?php if(function_exists("printZenpageRSSLink")) { ?>
			<?php printZenpageRSSLink("News","","<li>",gettext("News"),'</li>'); ?>
			<?php printZenpageRSSLink("NewsWithImages","","<li>",gettext("News and Gallery"),'</li>'); ?>
			<?php } ?>
		</ul>
	</div>
	<?php
}
?>

	<?php
	if (getOption("zenpage_contactpage") && function_exists('printContactForm')) {
		?>
		<div class="menu">
			<ul>
				<li>
				<?php
				if($_zp_gallery_page != 'contact.php') {
					printCustomPageURL(gettext('Contact us'), 'contact', '', '');
				} else {
					echo gettext("Contact us");
				}
				?></li>
				</ul>
			</div>
		<?php
	}
	?>
	<?php
	if (!zp_loggedin() && function_exists('printRegistrationForm')) {
		?>
		<div class="menu">
			<ul>
				<li>
				<?php	
				if($_zp_gallery_page != 'register.php') {
					printCustomPageURL(gettext('Register for this site'), 'register', '', '');
				} else {
					echo gettext("Register for this site");
				}
				?></li>
				</ul>
			</div>
		<?php
	}
	?>
	<?php
	if(function_exists("printUserLogin_out")) {
		?>
		<?php
		if (zp_loggedin()) {
			?>
			<div class="menu">
				<ul>
					<li>
			<?php
		}
		printUserLogin_out("","");
		if (zp_loggedin()) {
			?>
				</li>
			</ul>
		</div>
		<?php
		}
	}
	?>
<?php if (function_exists('printLanguageSelector')) {
	printLanguageSelector("langselector");
	}
?>