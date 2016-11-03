<?php
/* Smarty version 3.1.30, created on 2016-11-02 17:04:18
  from "C:\wamp\www\BAE\myBand2\new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581a0e822dc4c3_34223065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e46a1156e7ec9ccc3dfc5425e2dd1699e9fd493' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\new.tpl',
      1 => 1478102656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581a0e822dc4c3_34223065 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.date_format.php';
?>
<div class="events">
	<div class="eventsheader">
		<h1>EVENTS & SHOWS</h1>
	</div>
	<div class="blankspace">	
	</div>
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

	<div class="datatable">
		<table>
			<thead>
				<tr>
					<th class="tableheader">Date</th>
					<th class="tableheader">Event</th>
					<th class="location">Location</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultTableEvents']->value, 'oneTableEvents');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneTableEvents']->value) {
?>
				<tr>
					<td><em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneTableEvents']->value['datum'],"%b %d, %Y");?>
</em></td>
					<td><?php echo $_smarty_tpl->tpl_vars['oneTableEvents']->value['title'];?>
</td>
					<td class="tLocation"><?php echo $_smarty_tpl->tpl_vars['oneTableEvents']->value['locatie'];?>
</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
		</table>
	</div>
</div><?php }
}
