<?php

/**
 * Provides extensions to the admin toolbox.
 * This is intended as an example only.
 *
 * @author Stephen Billard (sbillard)
 * @package plugins
 */

$plugin_is_filter = 5;
$plugin_description = gettext("An example of how to create extensions to the administrative toolbox on your theme pages.");
$plugin_author = "Stephen Billard (sbillard)";
$plugin_version = '1.2.9'; 
$plugin_URL = "http://www.zenphoto.org/documentation/plugins/_".PLUGIN_FOLDER."---flter-admin_toolbox.php.html";

zp_register_filter('admin_toolbox_global', 'toolbox_global_extensions');
zp_register_filter('admin_toolbox_gallery', 'toolbox_gallery_extensions');
/* enable these registrations if you have album, image, search, or news specific extensions.
 * 
 *
zp_register_filter('admin_toolbox_album', 'toolbox_album_extensions');
zp_register_filter('admin_toolbox_image', 'toolbox_image_extensions');
zp_register_filter('admin_toolbox_search', 'toolbox_search_extensions');
zp_register_filter('admin_toolbox_news', 'toolbox_news_extensions');
 */

function toolbox_global_extensions() {
	if (zp_loggedin(ADMIN_RIGHTS)) {
		echo "<li>";
		printLink(WEBPATH."/".ZENFOLDER . '/admin-plugins.php', gettext("Plugins"), NULL, NULL, NULL);
		echo "</li>\n";
	}
	if (zp_loggedin(ADMIN_RIGHTS | THEMES_RIGHTS)) {
		echo "<li>";
		printLink(WEBPATH."/".ZENFOLDER . '/admin-themes.php', gettext("Themes"), NULL, NULL, NULL);
		echo "</li>\n";
	}
}

function toolbox_gallery_extensions() {
	if (zp_loggedin(ADMIN_RIGHTS | COMMENT_RIGHTS)) {
		echo "<li>";
		printLink(WEBPATH."/".ZENFOLDER . '/admin-comments.php', gettext("Comments"), NULL, NULL, NULL);
		echo "</li>\n";
	}
}

function toolbox_album_extensions() {
	
}

function toolbox_image_extensions() {
	
}

function toolbox_search_extensions() {
	
}

function toolbox_news_extensions() {
	
}

?>