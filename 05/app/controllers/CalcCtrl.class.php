<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.
namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Dzmitry Vodzich
 *
 */
class CalcCtrl {


	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku


	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
        $this->form->okres = getFromRequest('okres');
        $this->form->op = getFromRequest('op');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->okres ) && isset ( $this->form->op ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->okres == "") {
			getMessages()->addError('Nie podano okresu');
		}
        if ($this->form->op == "") {
        	getMessages()->addError('Nie podano opracentowania');
        		}
		

            if (! is_numeric( $this->form->kwota )) {
                       		getMessages()->addError('Kwota nie jest liczbą calkowitą');

                       	} else if ( $this->form->kwota< 0) {
                                			getMessages()->addError('Kwota nie może być ujemna');
                                		}
                           if (! is_numeric( $this->form->op )) {
                           		getMessages()->addError('Opracentowanie nie jest liczbą');
                           	}	else if ( $this->form->op < 0) {
                                           getMessages()->addError('Opracentowanie nie może być ujemne');
                                        	}
                           if (! is_numeric( $this->form->okres )) {
                                            		getMessages()->addError('Okres nie jest liczbą całkowitą');
                               }	else if ( $this->form->okres <= 0) {
                                           getMessages()->addError('Okres nie może być ujemny lub równy zero');
                           }
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = intval($this->form->kwota);
			$this->form->okres = intval($this->form->okres);
			$this->form->op = floatval($this->form->op);
			getMessages()->addInfo('Parametry poprawne.');

			$this->result->result = ($this->form->kwota + ($this->form->op / 100 * $this->form->kwota) * $this->form->okres/12) / $this->form->okres;
			

			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','');
		getSmarty()->assign('page_header','Kalkulator - Kontroler główny');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc.tpl');
	}
}
