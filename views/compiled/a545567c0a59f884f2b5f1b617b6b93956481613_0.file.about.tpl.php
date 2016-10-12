<?php
/* Smarty version 3.1.30, created on 2016-10-10 11:23:08
  from "C:\wamp\www\BAE\myBand2\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fb5dfceb7f39_24114026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a545567c0a59f884f2b5f1b617b6b93956481613' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\about.tpl',
      1 => 1475843805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fb5dfceb7f39_24114026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
		<div id="head">
		<h1>About</h1>
			<img src="img/heade.jpg" alt="image">
		</div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result2']->value, 'oneItem2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem2']->value) {
?>
		<div id="aboutcontent">
			<p><?php echo $_smarty_tpl->tpl_vars['oneItem2']->value['content'];?>
</p>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section><?php }
}
