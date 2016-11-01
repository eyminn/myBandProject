<?php
/* Smarty version 3.1.30, created on 2016-11-01 22:58:42
  from "C:\wamp\www\BAE\myBand2\new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58191012d8d915_30710046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e46a1156e7ec9ccc3dfc5425e2dd1699e9fd493' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\new.tpl',
      1 => 1478037520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58191012d8d915_30710046 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.date_format.php';
?>
<div class="events">
	<div class="newwrapper">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultevents']->value, 'oneEvents');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneEvents']->value) {
?>
		<article>
			<img src="img/<?php echo $_smarty_tpl->tpl_vars['oneEvents']->value['img'];?>
">
			<h2><?php echo $_smarty_tpl->tpl_vars['oneEvents']->value['title'];?>
</h2>
			<h3><em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneEvents']->value['datum'],"%d %B, %Y");?>
</em></h3>
			<p><?php echo $_smarty_tpl->tpl_vars['oneEvents']->value['locatie'];?>
</p>
		</article>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</div><?php }
}
