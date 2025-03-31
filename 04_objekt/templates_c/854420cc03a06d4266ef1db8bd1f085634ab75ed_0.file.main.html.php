<?php
/* Smarty version 3.1.30, created on 2025-03-31 16:07:41
  from "C:\xampp\htdocs\04_objekt\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67eaa1add644e2_47967588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854420cc03a06d4266ef1db8bd1f085634ab75ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_objekt\\templates\\main.html',
      1 => 1743430003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eaa1add644e2_47967588 (Smarty_Internal_Template $_smarty_tpl) {
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
									<ul>
						</nav>

				</section>
		<div id="app_content" >
			<!-- Intro -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168289279467eaa1add639d3_44451091', 'main');
?>

		</div>
			<!-- Main -->
			<!-- Highlights -->
			<!-- Footer -->
			<section id="footer" class="wrapper">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98366957067eaa1add64115_04746315', 'footer');
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
class Block_168289279467eaa1add639d3_44451091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść .... <?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_98366957067eaa1add64115_04746315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
