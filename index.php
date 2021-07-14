<?php
	if (isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'menu':
				require_once 'menu.php';
				break;
			case 'etap1':
				require_once 'ETAP/etape1.php';
				break;
			case 'etap2':
				require_once 'ETAP/etape2.php';
				break;
			case 'etap3':
				require_once 'ETAP/etape3.php';
				break;
			case 'etap4':
                require_once 'ETAP/etape4.php';
				break;
			case 'generePGF':
			   require_once 'imprime.php';
               
		}

	}
	else{
		require_once 'connexion.php';
	}
?>