<?php


include('zp-core/functions-basic.php');

$iSig = installSignature();

mysql_connect("ss_dbhost", "ss_dbuser", "ss_dbpass") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("ss_dbname");

mysql_query("UPDATE ss_dbprefixoptions SET value = '$iSig'
WHERE name='zenphoto_install'");

unlink(__FILE__);

?>

