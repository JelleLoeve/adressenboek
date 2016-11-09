<?php
require('Smarty/Smarty.class.php');
require 'inc/connection.php'; 
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('Smarty/templates_c');   // compiled templates. we don't use them yet.
$smarty->setCacheDir('Smarty/cache');           // cached templates. not necessary yet.
$smarty->setConfigDir('Smarty/configs');

if ( isset ($_POST['submit'])){
	$naam = mysqli_real_escape_string($link, $_POST['naam']);
	$adres = mysqli_real_escape_string($link, $_POST['adres']);
	$opmerking = mysqli_real_escape_string($link, $_POST['opmerking']);
	$error = false;

	if ( empty($naam) )
	{
	echo "<span style='color:red;'>Voeg een naam toe!</span><br>";
	$error = true;
	}
	
	if ( empty($adres) )
	{
	echo "<span style='color:red;'>Voeg een adres toe!</span><br>";
	$error = true;
	}
	
	if ( $error == false )
	{
		$stmt = mysqli_prepare($link, "INSERT INTO adressen (naam, adres, opmerking) VALUES (?, ?, ?)");
		
		mysqli_stmt_bind_param($stmt, "sss", $naam, $adres, $opmerking);

		// decide what to do
		if (mysqli_stmt_execute($stmt)){
			echo "<span style='color:green;'>Adres toegevoegd.</span><br>";
		}
		else{
			echo "<span style='color:red;'>Whoops! Er is iets mis gegaan.</span><br>";
		}
		// close link
		
		mysqli_stmt_close($stmt);
	}
}

$smarty->assign('Title', 'Adres toevoegen');
$smarty->display('tpl/add.tpl.html');



?> 