<?php
/* Smarty version 3.1.30, created on 2016-11-07 16:58:37
  from "C:\wamp\www\Adressenboek\tpl\index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5820a4ada64451_60115062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd372463a0140e68275ddafc0f2637433f5179c0f' => 
    array (
      0 => 'C:\\wamp\\www\\Adressenboek\\tpl\\index.tpl.html',
      1 => 1478534316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl.html' => 1,
    'file:footer.tpl.html' => 1,
  ),
),false)) {
function content_5820a4ada64451_60115062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="row">
      <div class="large-12 columns">
        <h1>Uw Adressenboek</h1>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="callout">
			<ul>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adres_array']->value, 'adres');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adres']->value) {
?>
				<div class="row">
					
					<div class="large-1 columns cell">
					<?php echo $_smarty_tpl->tpl_vars['adres']->value['id'];?>

					</div>
					
					<div class="large-2 columns cell">
					<?php echo $_smarty_tpl->tpl_vars['adres']->value['naam'];?>

					</div>

					<div class="large-2 columns cell">
					<?php echo $_smarty_tpl->tpl_vars['adres']->value['adres'];?>

					</div>	

					<div class="large-3 columns cell">
					<?php echo $_smarty_tpl->tpl_vars['adres']->value['opmerking'];?>

					</div>
					
					<div class="large-2 columns cell">
					<a href="delete.php" class="button small">Verwijderen</a>
					</div>
					
					<div class="large-2 columns cell">
					<a href=#" class="button small">Edit</a>
					</div>
				
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
			</ul>
        </div>
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
