<?php
/* Smarty version 3.1.30, created on 2016-11-01 20:49:43
  from "C:\wamp\www\BAE\myBand2\views\headernew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5818f1d7015c70_71490449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4dc61b31a708f77727aa6be663460eff4a9374' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\headernew.tpl',
      1 => 1478029764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5818f1d7015c70_71490449 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result3']->value, 'oneMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenu']->value) {
?>
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="250" height="187">
		</div>
		<div class="socailicons">
				<img src="img/fb.png" width="50" height="50">
				<img src="img/twit.png" width="50" height="50">
				<img src="img/insta.png" width="50" height="50">
		</div>
		<ul>
			<li><a href="?action=home"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page1'];?>
</a></li>
			<li><a href="?action=about"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page2'];?>
</a></li>
			<li><a href="?action=new">NEW</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>

	</div>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</header>

<?php }
}
