<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/var/www/vhosts/graffersid.com/httpdocs/renaissa/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/var/www/vhosts/graffersid.com/httpdocs/renaissa/wp-content/wflogs/');
	include_once '/var/www/vhosts/graffersid.com/httpdocs/renaissa/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>