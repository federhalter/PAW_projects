<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php isset($kwota)?print($kwota):""; ?>" placeholder = "2000PLN" /><br />
	<label for="id_op">Opracentowanie: </label>
	<input id="id_op" type="text" name="op" value="<?php isset($opracentowanie)?print($opracentowanie):""; ?>" placeholder = "0-700%" /><br />
	<label for="id_okres">Liczba miesiecy: </label>
	<input id="id_okres" type="text" name="okres" value="<?php isset($okres)?print($okres):""; ?>" placeholder = "12 miesięcy" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result.'PLN miesiecznie'; ?>
</div>
<?php } ?>

</body>
</html>