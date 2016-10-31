<?php
/* Smarty version 3.1.30, created on 2016-10-31 12:14:34
  from "C:\wamp\www\BAE\myBand2\views\headerabout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5817279a321df3_64238206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978de67b78ffe75e3927d894a02d41359e802f8a' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\headerabout.tpl',
      1 => 1477912463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5817279a321df3_64238206 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result3']->value, 'oneMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenu']->value) {
?>
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="170" height="167">
			<h1>TIME PIECES</h1>
			<div class="line"></div>
		</div>
		<ul>
			<li><a href="?action=home"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page1'];?>
</a></li>
			<li><a href="?action=about"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page2'];?>
</a></li>
			<li><a href="#">NEW</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>

	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</header><?php }
}
