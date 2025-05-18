<?php
/* Smarty version 3.1.30, created on 2025-05-18 17:32:20
  from "C:\xampp\htdocs\07\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6829fd840f1f01_05211234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec4fd0afae9620f05e47973b800f0c785eebca78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07\\app\\views\\templates\\main.tpl',
      1 => 1747582338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6829fd840f1f01_05211234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=4, user-scalable=no" />
		<link rel="stylesheet" href="/07/assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a></h1>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="#app_content">Idź do formulaża</a></li>

								<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
								<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">wyloguj</a></li>
								<?php }?>
                                <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Lista</a></li>
									<ul>



						</nav>

				</section>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18646077226829fd840f0ba0_45126647', 'top');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10599997516829fd840f13f3_08947604', 'bottom');
?>




			<!-- Intro -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13453952476829fd840f1a90_67091793', 'main');
?>



			<section id="footer" class="wrapper">
			<div class="title">end</div>

				<div id="copyright">
					<ul>
						<li>&copy; Dzmitry Vodzich.</li>
					</ul>
		</div>
				</section>
		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'top'} */
class Block_18646077226829fd840f0ba0_45126647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_10599997516829fd840f13f3_08947604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_13453952476829fd840f1a90_67091793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
