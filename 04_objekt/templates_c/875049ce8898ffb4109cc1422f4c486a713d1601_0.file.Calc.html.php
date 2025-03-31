<?php
/* Smarty version 3.1.30, created on 2025-03-31 16:14:56
  from "C:\xampp\htdocs\04_objekt\app\Calc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67eaa360b45d82_59124153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '875049ce8898ffb4109cc1422f4c486a713d1601' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_objekt\\app\\Calc.html',
      1 => 1743430494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_67eaa360b45d82_59124153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42644057567eaa360b44cd7_63394260', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'} */
class Block_42644057567eaa360b44cd7_63394260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer" class="wrapper">
	<div class="title">Kalkulator</div>
	<div class="container">
<section>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post" >
		<div class="row gtr-50">
			<div class="col-6 col-12-small">
				<label for="id_kwota" style="color: white">Kwota: </label>
				<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" placeholder = "2000PLN"/>
			</div>
			<div class="col-6 col-12-small">
				<label for="id_op" style="color: white">Opracentowanie: </label>
				<input id="id_op" type="text" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
" placeholder = "0-700%" />
			</div>
			<div class="col-6 col-12-small">
				<label for="id_okres" style="color: white";>Liczba miesiecy: </label>
				<input id="id_okres" type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okres;?>
" placeholder = "12 miesięcy" />
			</div>
			<div class="col-3">
				<ul style= "margin-top: 30px">
					<li><input type="submit" class="style1" value="Oblicz"  margin-top: 20px /></li>
				</ul>
			</div>
		</div>
	</form>
</section>
			<div class="col-6 col-12-small">

			
			<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
			<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ol>
			<?php }?>
			<?php }?>

			</div>

				<div class="col-6 col-12-small">

			<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
			<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
			<h4>Informacje: </h4>
			<ol class="inf">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ol>
			<?php }?>
			<?php }?>

				</div>

					<div class="col-6 col-12-small">

		<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
			<h4>Wynik</h4>
			<p class="res">
				<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? "Brak wyniku" : $tmp);?>

			</p>
			<?php }?>

					
		</div>
	</div>

	<?php
}
}
/* {/block 'main'} */
}
