<?php
/* Smarty version 3.1.30, created on 2016-11-07 15:12:33
  from "C:\wamp\www\Adressenboek\tpl\add.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58208bd1f3a264_86261083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d0e3b4ecfc3a29ca5ce6f957945b32c257b2671' => 
    array (
      0 => 'C:\\wamp\\www\\Adressenboek\\tpl\\add.tpl.html',
      1 => 1478527383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl.html' => 1,
    'file:footer.tpl.html' => 1,
  ),
),false)) {
function content_58208bd1f3a264_86261083 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="row">
      <div class="large-12 columns">
        <h1>Adres toevoegen</h1>
      </div>
    </div>

    <div class="row">
		<div class="large-12 columns">
			<div class="callout">
				<form method="POST" >
					<strong> Naam:</strong><br>
					<input type="text" name="naam" value="">

					<strong> Adres:</strong><br>
					<input type="text" name="adres" value="">

					<strong><p>Opmerking:</p></strong>
					<textarea name="opmerking" cols="50" rows="3" id="detail"></textarea>
					<input type="submit" name="submit" value="Submit" class="button"/>
				</form>
			</div>
		</div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
