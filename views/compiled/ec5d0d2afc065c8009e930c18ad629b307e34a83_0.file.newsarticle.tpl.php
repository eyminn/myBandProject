<?php
/* Smarty version 3.1.30, created on 2016-10-31 09:46:41
  from "C:\wamp\www\BAE\myBand2\views\newsarticle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581704f146bfe3_31476076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5d0d2afc065c8009e930c18ad629b307e34a83' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\newsarticle.tpl',
      1 => 1477903580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581704f146bfe3_31476076 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.truncate.php';
?>
<div class="contenttitle">
	<h1>RECENT POSTS</h1>
</div>
<section class="homepagecontent">
	<div class="articlemap">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
		
		<article>
			<p>Uploaded : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d, %B, %Y");?>
</p>
			<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
			<img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</h1>
		</article>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<div class="pagination">
		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</div>
	</div>
</section>
<?php }
}
