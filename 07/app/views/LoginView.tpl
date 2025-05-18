{extends file="main.tpl"}

{block name=main}
<section id="footer" class="wrapper">
	<div class="title">Kalkulator</div>
	<div class="container">
<section>
<form action="{$conf->action_url}login" method="post">
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

{include file='messages.tpl'}

{/block}
