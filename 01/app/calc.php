<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$okres = $_REQUEST ['okres'];
$opracentowanie = $_REQUEST ['op'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($okres) && isset($opracentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $opracentowanie == "") {
	$messages [] = 'Nie podano opracentowania';
}
if ( $okres == "") {
	$messages [] = 'Nie podano okresu';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $kwota i $okres są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą calkowitą';

	} else if ( $kwota < 0) {
         			$messages [] = 'Kwota nie może być ujemna';
         		}
    if (! is_numeric( $opracentowanie )) {
    		$messages [] = 'Opracentowanie nie jest liczbą';
    	}	else if ( $opracentowanie < 0) {
                    $messages [] = 'Opracentowanie nie może być ujemne';
                 	}
    if (! is_numeric( $okres )) {
                     		$messages [] = 'Okres nie jest liczbą całkowitą';
        }	else if ( $okres <= 0) {
                    $messages [] = 'Okres nie może być ujemny';
                    }
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	//konwersja parametrów na float
	$kwota = intval($kwota);
	$okres = intval($okres);
	$opracentowanie = floatval($opracentowanie);
        $result = ($kwota + ($opracentowanie / 100 * $kwota)) / $okres;

         	}

	//wykonanie operacji



// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$okres,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';