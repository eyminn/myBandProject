<?php
/* Smarty version 3.1.30, created on 2016-10-31 13:41:09
  from "C:\wamp\www\BAE\myBand2\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58173be545a579_11683576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb10915452cb215e328e0545fbae1098e0c4053' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\header.tpl',
      1 => 1477917667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58173be545a579_11683576 (Smarty_Internal_Template $_smarty_tpl) {
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

	<div class="headerimg">

			<img src="img/headerimg.jpg" id="slide1">	
	</div>
	<input type="button" value="forward" id="forward" />
    <input type="button" value="back" id="backward" />

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</header>

<?php }
}
