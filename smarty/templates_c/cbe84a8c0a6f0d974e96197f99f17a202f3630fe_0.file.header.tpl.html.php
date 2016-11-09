<?php
/* Smarty version 3.1.30, created on 2016-11-07 16:30:38
  from "C:\wamp\www\Adressenboek\tpl\header.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58209e1e78fa05_88680890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe84a8c0a6f0d974e96197f99f17a202f3630fe' => 
    array (
      0 => 'C:\\wamp\\www\\Adressenboek\\tpl\\header.tpl.html',
      1 => 1478532637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58209e1e78fa05_88680890 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>

	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
			<li class="menu-text">Adressenboek</li>
			<!-- Verticale menu:
			<li>
				<a href="#">One</a>
				<ul class="menu vertical">
					<li><a href="#">One</a></li>
					<li><a href="#">Two</a></li>
					<li><a href="#">Three</a></li>
				</ul>
			</li>
			-->
			<li><a href="index.php">Adressen bekijken</a></li>
			<li><a href="add.php">Adressen toevoegen</a></li>
			</ul>
		</div>
		
		<div class="top-bar-right">
			<p>Gemaakt door Jelle Loeve</p>
		</div>
	</div><?php }
}
