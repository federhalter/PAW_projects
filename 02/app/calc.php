<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.


//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów
function getParams(&$kwota,&$okres,&$opracentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
	$opracentowanie = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$okres,&$opracentowanie,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($okres) && isset($opracentowanie))) {
		return false;
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
if (count ( $messages ) != 0) return false;
	
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
                    $messages [] = 'Okres nie może być ujemny lub równy zero';
                    }


// 3. wykonaj zadanie jeśli wszystko w porządku

if (count ( $messages ) != 0) return false;
return true;// gdy brak błędów
}

    function process(&$kwota,&$okres,&$opracentowanie,&$messages,&$result){
    	global $role;
	$kwota = intval($kwota);
	$okres = intval($okres);
	$opracentowanie = floatval($opracentowanie);
	if( $kwota > 2000 && $role != 'admin' ){
	    $messages [] = 'Tylko administrator może wprowadzać kwotę ponad 2000 !';
	}
	if( $opracentowanie < 10 && $role != 'admin'){
	    $messages [] = 'Tylko administrator może wprowadzać opracentowanie mniej niż 10%!';
	}
    if (count ( $messages ) == 0) $result = ($kwota + ($opracentowanie / 100 * $kwota) * $okres/12) / $okres;

}
	//wykonanie operacji
$kwota = null;
$okres = null;
$opracentowanie = null;
$result = null;
$messages = array();

getParams($kwota,$okres,$opracentowanie);
if ( validate($kwota,$okres,$opracentowanie,$messages) ) { // gdy brak błędów
	process($kwota,$okres,$opracentowanie,$messages,$result);
}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$okres,opracentowanie,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';