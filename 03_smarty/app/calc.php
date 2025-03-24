<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany

// 1. pobranie parametrów
function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['okres'] = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
	$form['op'] = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;

}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
	// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($form['kwota']) && isset($form['okres']) && isset($form['op']) ))	return false;


// sprawdzenie, czy potrzebne wartości zostały przekazane
$hide_intro = true;

	$infos [] = 'Przekazano parametry.';


        if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		   if (! is_numeric( $form['kwota'] )) {
           		$msgs [] = 'Kwota nie jest liczbą calkowitą';

           	} else if ( $form['kwota'] < 0) {
                    			$msgs [] = 'Kwota nie może być ujemna';
                    		}
               if (! is_numeric( $form['op'] )) {
               		$msgs [] = 'Opracentowanie nie jest liczbą';
               	}	else if ( $form['op'] < 0) {
                               $msgs [] = 'Opracentowanie nie może być ujemne';
                            	}
               if (! is_numeric( $form['okres'] )) {
                                		$msgs [] = 'Okres nie jest liczbą całkowitą';
                   }	else if ( $form['okres'] <= 0) {
                               $msgs [] = 'Okres nie może być ujemny lub równy zero';
                               }
	}
// 3. wykonaj zadanie jeśli wszystko w porządku
if (count($msgs)>0) return false;
	else return true;
}

    function process(&$form,&$infos,&$msgs,&$result){

	$form['kwota'] = intval($form['kwota']);
	$form['okres'] = intval($form['okres']);
	$form['op'] = floatval($form['op']);

    if (count ( $msgs ) == 0) $result = ($form['kwota'] + ($form['op'] / 100 * $form['kwota']) * $form['okres']/12) / $form['okres'];

}
	//wykonanie operacji
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ) {
    // gdy brak błędów
	process($form,$infos,$messages,$result);

}
// 4. Wywołanie widoku z przekazaniem zmiennych


$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Kalkulator');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);


// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');