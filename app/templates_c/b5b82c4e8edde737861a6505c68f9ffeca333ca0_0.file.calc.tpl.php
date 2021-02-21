<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-21 13:36:16
  from 'E:\Programy\xampp\htdocs\zadanie6\app\controllers\controllers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603253c0a0d4d1_03280536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b82c4e8edde737861a6505c68f9ffeca333ca0' => 
    array (
      0 => 'E:\\Programy\\xampp\\htdocs\\zadanie6\\app\\controllers\\controllers.tpl',
      1 => 1613910970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603253c0a0d4d1_03280536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_600940700603253c0a03d84_80832149', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_600940700603253c0a03d84_80832149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_600940700603253c0a03d84_80832149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer">
	<div class="inner">
			<h2 class="major">Kalkulator</h2>

		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
			<fieldset>
				<div class="fields">
				<div class="field">
			<label for="id_kwota">Kwota kredytu</label>
			<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"/>
				</div>
				<div>
			<label for="id_lata">Na ile lat:</label>
			<input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"/>
				</div>
					<div class="field">
			<label for="id_procent">Oprocentowanie:</label>
			<input id="id_procent" type="text" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
"/>
				</div>
					<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
				</div>
			</fieldset>
		</div>

	<div class="messages">

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
			<h4>Wystąpiły błędy: </h4>
			<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
		<h4>Twoja miesięczna rata to: </h4>
		<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #167003; width:25em;">
			<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		</ol>
	<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
