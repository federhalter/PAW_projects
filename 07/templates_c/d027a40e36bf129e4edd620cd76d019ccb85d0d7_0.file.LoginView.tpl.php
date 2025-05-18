<?php
/* Smarty version 3.1.30, created on 2025-04-14 20:53:56
  from "C:\xampp\htdocs\06\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67fd59c4e9eb35_59022846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd027a40e36bf129e4edd620cd76d019ccb85d0d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06\\app\\views\\LoginView.tpl',
      1 => 1744656832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_67fd59c4e9eb35_59022846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14077267967fd59c4e9e4f2_18483267', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'} */
class Block_14077267967fd59c4e9e4f2_18483267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer" class="wrapper">
	<div class="title">Kalkulator</div>
	<div class="container">
<section>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
<div class="row gtr-50">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="col-6 col-12-small">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="col-6 col-12-small">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="col-3">
			<input type="submit" value="zaloguj" class="style1"/>
		</div>
	</fieldset>
</div>
	</form>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'main'} */
}
