<?php
require('Smarty/Smarty.class.php');
require 'inc/connection.php'; 
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('Smarty/templates_c');   // compiled templates. we don't use them yet.
$smarty->setCacheDir('Smarty/cache');           // cached templates. not necessary yet.
$smarty->setConfigDir('Smarty/configs');

// sql to delete a record
$sql = "DELETE FROM adressen WHERE name=$name";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}

$link->close();

$smarty->assign('Title', 'Adressenboek');
$smarty->display('tpl/index.tpl.html');
?>