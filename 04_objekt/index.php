<?php
require_once dirname(__FILE__).'/config.php';

//przekierowanie przeglądarki klienta (redirect)

//przekazanie żądania do następnego dokumentu ("forward")
include $conf->root_path.'/app/calc.php';