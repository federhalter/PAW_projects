<?php
/* Smarty version 3.1.30, created on 2025-04-14 21:11:42
  from "C:\xampp\htdocs\06\app\views\calc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67fd5dee5f1a90_54271673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ce37b865ee56492c61116491cfd4086f12186a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06\\app\\views\\calc.tpl',
      1 => 1744657888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_67fd5dee5f1a90_54271673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82615621567fd5dee5c60e1_97114542', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212852374767fd5dee5f0d92_83568975', 'main');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_82615621567fd5dee5c60e1_97114542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="current">rola:<?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</div>
<?php
}
}
/* {/block 'footer'} */
/* {block 'main'} */
class Block_212852374767fd5dee5f0d92_83568975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer" class="wrapper">
	<div class="title">Kalkulator</div>
	<div class="container">
<section>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" >
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


				<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
                <div class="messages info">
                	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                </div>
                <?php }?>

	<?php
}
}
/* {/block 'main'} */
}
