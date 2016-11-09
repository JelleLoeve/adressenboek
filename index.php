<?php
require('Smarty/Smarty.class.php');
require 'inc/connection.php'; 
$smarty = new Smarty();

function get_adres_from_db($link) {
    // voer de query uit of toon een foutbericht
    $query = "SELECT * FROM adressen";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('<br>Invalid query: ' . mysqli_error($link));
    }
	
    // Start looping table row
    while ($rows = mysqli_fetch_array($result)) {
		$adres_array[] = $rows;
	// Exit looping and close connection 
    }
    mysqli_close($link);
	return $adres_array;
}

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('Smarty/templates_c');   // compiled templates. we don't use them yet.
$smarty->setCacheDir('Smarty/cache');           // cached templates. not necessary yet.
$smarty->setConfigDir('Smarty/configs');

$adres_array = get_adres_from_db($link);
$smarty->assign( "adres_array", $adres_array );

if (isset($_POST['button1'])) 
{ 
   echo "button 1 has been pressed"; 
}  

$smarty->assign('Title', 'Adressenboek');
$smarty->display('tpl/index.tpl.html');

?> 