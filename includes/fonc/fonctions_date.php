<?php
/**
 * recherche le prix d'un repas
 
 * @param aucun
 * @return prix repas
*/
function getPrixRepas()
{
    $ligneParams = getParams();

    $prix= $ligneParams['prixRepas'] ;
    
    return $prix ;
}

/**
 * recherche la date de commande en fonction des paramètres
 
 * @param aucun
 * @return date au format AAAA-MM-JJ  
*/
function getDateCommande()
{
    $ligneParams = getParams();

    $TimeDebut= $ligneParams['heureDebutCde'] ;
    $heureDebut = substr($TimeDebut, 0,2) ;
    $minuteDebut = substr($TimeDebut, 3,2) ;
    $heureActuelle = substr(date("H:i"),0,2) ;
    $minuteActuelle = substr(date("H:i"),3,2) ;
    
    if ($heureActuelle < $heureDebut) 
    {
        $jourAvant = false ; 
    }
    else 
    {
        if ( ($heureActuelle == $heureDebut) && ($minuteActuelle < $minuteDebut) )
        {
            $jourAvant = false ;
        }
        else 
        {
            $jourAvant = true ;
        }
    }
        

    if ($jourAvant)
    {
        $today = date_create(date('Y-m-d'));
        $demain = date_add($today, date_interval_create_from_date_string("1 days"));
        return $demain->format("Y-m-d");
    }
    else 
    {
        $today = date_create(date('Y-m-d'));
        return $today->format("Y-m-d") ;
    }
}


/**
 * formate une date AAAA-MM-JJ sous la forme JJ/MM/AAAA
 
 * @param $dt au format AAAA-MM-JJ 
 * @return date au format JJ/MM/AAAA  
*/
function getDateJMA($dt)
{
	if (isset($dt))
	{	$maDate=explode("-",$dt) ;
	    if ($maDate[0]=="00")
		return "" ;
		else
		return $maDate[2]."/".$maDate[1]."/".$maDate[0] ;
	}
	else
		return "" ;
}

/**
 * formate une date JJ/MM/AAAA sous la forme AAAA-MM-JJ 
 
 * @param $dt au format JJ/MM/AAAA
 * @return date au format AAAA-MM-JJ  
*/
function getDateAMJ($dt)
{
	$maDate=explode("/",$dt) ;
	return $maDate[2]."-".$maDate[1]."-".$maDate[0] ;
}

?>
