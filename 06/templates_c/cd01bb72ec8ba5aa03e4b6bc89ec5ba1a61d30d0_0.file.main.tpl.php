<?php
/* Smarty version 3.1.30, created on 2025-04-14 21:11:30
  from "C:\xampp\htdocs\06\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67fd5de24c2b38_87331159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd01bb72ec8ba5aa03e4b6bc89ec5ba1a61d30d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06\\app\\views\\templates\\main.tpl',
      1 => 1744657888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fd5de24c2b38_87331159 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="/03_smarty/assets/css/main.css" />
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
								<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">wyloguj</a></li>

									<ul>



						</nav>

				</section>
		<div id="app_content" >
			<!-- Intro -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162141569367fd5de24bff41_81996228', 'main');
?>

		</div>

			<section id="footer" class="wrapper">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81127223667fd5de24c10b7_69745609', 'footer');
?>

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
/* {block 'main'} */
class Block_162141569367fd5de24bff41_81996228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść .... <?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_81127223667fd5de24c10b7_69745609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
