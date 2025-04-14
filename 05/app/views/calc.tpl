{extends file="main.tpl"}



{block name=main}
<section id="footer" class="wrapper">
	<div class="title">Kalkulator</div>
	<div class="container">
<section>
	<form action="{$conf->action_root}calcCompute" method="post" >
		<div class="row gtr-50">
			<div class="col-6 col-12-small">
				<label for="id_kwota" style="color: white">Kwota: </label>
				<input id="id_kwota" type="text" name="kwota" value="{$form->kwota}" placeholder = "2000PLN"/>
			</div>
			<div class="col-6 col-12-small">
				<label for="id_op" style="color: white">Opracentowanie: </label>
				<input id="id_op" type="text" name="op" value="{$form->op}" placeholder = "0-700%" />
			</div>
			<div class="col-6 col-12-small">
				<label for="id_okres" style="color: white";>Liczba miesiecy: </label>
				<input id="id_okres" type="text" name="okres" value="{$form->okres}" placeholder = "12 miesięcy" />
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


				{if $msgs->isError()}
				<h4>Wystąpiły błędy: </h4>
				<ol class="err">
					{foreach $msgs->getErrors() as $err}
					{strip}
					<li>{$err}</li>
					{/strip}
					{/foreach}
				</ol>
				{/if}

				{* wyświeltenie listy informacji, jeśli istnieją *}
				{if $msgs->isInfo()}
				<h4>Informacje: </h4>
				<ol class="inf">
					{foreach $msgs->getInfos() as $inf}
					{strip}
					<li>{$inf}</li>
					{/strip}
					{/foreach}
				</ol>
				{/if}

				{if isset($res->result)}
				<h4>Wynik</h4>
				<p class="res">
					{$res->result}
				</p>
				{/if}

			</div>
	</div>

	{/block}