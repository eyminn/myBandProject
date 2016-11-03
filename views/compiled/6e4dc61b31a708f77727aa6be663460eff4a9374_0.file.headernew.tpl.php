<?php
/* Smarty version 3.1.30, created on 2016-11-03 16:36:06
  from "C:\wamp\www\BAE\myBand2\views\headernew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b5966da6b12_32509353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4dc61b31a708f77727aa6be663460eff4a9374' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\headernew.tpl',
      1 => 1478187364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581b5966da6b12_32509353 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<div id="menu">
		<div class="headerlogo">
			<img src="img/headerlogo.png" width="200" height="150">
		</div>
		<div class="socailicons">
				<img src="img/fb.png" width="35" height="35">
				<img src="img/twit.png" width="35" height="35">
				<img src="img/insta.png" width="35" height="35">
		</div>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result3']->value, 'oneMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneMenu']->value) {
?>
			<li><a href="?action=<?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['oneMenu']->value['page'];?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
		<div class="search">
			<img src="img/searchicon.png" width="30" height="30">
			<input type="text" name="Search" placeholder="Search Articles">
		</div>
		

	</div>
	

</header>

<?php }
}
