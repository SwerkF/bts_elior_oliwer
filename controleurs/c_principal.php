<?php
if (isset($_REQUEST['uc']))
{
	switch ($_REQUEST['uc'])
	{
		case 'auth' : {  include "c_authentification.php" ; break ;}
		case 'gestion' : {  include "c_gestion.php" ; break ;}
        case 'commande' : {  include "c_commande.php" ; break ;}
	}
}
?>


