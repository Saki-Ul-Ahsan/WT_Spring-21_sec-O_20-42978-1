<?php

require_once '../model/databasemodel.php';

if (isset($_POST['findemployee'])) {
	
		echo $_POST['Books'];

    try {
    	
    	$allSearchedemployee = searchemployee($_POST['Books']);
    	require_once '../view/showSearchedemployee.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

