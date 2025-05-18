<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
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
							<h1>{$page_title|default:"Tytuł domyślny"}</a></h1>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="#app_content">Idź do formulaża</a></li>

								{if count($conf->roles)>0}
								<li class="current"><a href="{$conf->action_url}logout">wyloguj</a></li>
								{/if}
                                <li class="current"><a href="{$conf->action_root}personList">Lista</a></li>
									<ul>



						</nav>

				</section>


				{block name=top}{/block}
				{block name=bottom}{/block}



			<!-- Intro -->
			{block name=main}{/block}


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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>