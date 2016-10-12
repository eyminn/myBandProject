<?php
/* Smarty version 3.1.30, created on 2016-10-10 12:25:05
  from "C:\wamp\www\BAE\myBand2\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb6c812a5124_93065944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb10915452cb215e328e0545fbae1098e0c4053' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\header.tpl',
      1 => 1476095096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fb6c812a5124_93065944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>	
	<div id="menu">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result3']->value, 'oneMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenu']->value) {
?>
		<ul>
			<li><a href="?action=about"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page2'];?>
</a></li>
			<li><a href="?action=home"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page1'];?>
</a></li>
		</ul>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</header><?php }
}
