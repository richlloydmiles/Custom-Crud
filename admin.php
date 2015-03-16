<?php
$crud_single = 'App';
$crud_plural = 'Apps';
$crud_dir = plugin_dir_path(__FILE__);
require $crud_dir . 'includes/crud-functions.php';
require $crud_dir . 'includes/router.php';
?>
<?php crud_form('Back' , 'Back'); ?>