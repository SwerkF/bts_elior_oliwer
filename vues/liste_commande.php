<?php
session_start() ;
$_SESSION['entete']='OUI';
include "../includes/fonc/fonctions_date.php";
include "../includes/modele/gestion_bdd.php";

$nbCommandes = getNbCommandesJour($_SESSION['laDateCde']) ;
$_SESSION['titreEtat'] = "Repas BTS : ".$nbCommandes." commandes pour le ".  getDateJMA($_SESSION['laDateCde']) ;

include "../includes/pdf_util/fpdf.php";
include "../includes/pdf_util/phpToPDF.php";

$lesCommandes = getLesCommandesJour($_SESSION['laDateCde']) ;
				 
$proprieteHeader = array(
	'T_COLOR' => array(0,0,0),
	'T_SIZE' => 9,
	'T_FONT' => 'Arial',
	'T_ALIGN_COL0' => 'L',
	'T_ALIGN' => 'C',
	'V_ALIGN' => 'T',
	'T_TYPE' => 'N',
	'LN_SIZE' => 5,
	'BG_COLOR_COL0' => array(255, 255, 255),
	'BG_COLOR' => array(255, 255, 255),
	'BRD_COLOR' => array(0,0,0),
	'BRD_SIZE' => 0.1,
	'BRD_TYPE' => 1,
	'BRD_TYPE_NEW_PAGE' => '',
	); 


$proprieteContenu = array(
	'T_COLOR' => array(0,0,0),
	'T_SIZE' => 11,
	'T_FONT' => 'Arial',
	'T_ALIGN_COL0' => 'L',
	'T_ALIGN' => 'R',
	'V_ALIGN' => 'T',
	'T_TYPE' => 'N',
	'LN_SIZE' => 6,
	'BG_COLOR_COL0' => array(255, 255, 255),
	'BG_COLOR' => array(255,255,255),
	'BRD_COLOR' => array(0,0,0),
	'BRD_SIZE' => 0.1,
	'BRD_TYPE' => '1',
	'BRD_TYPE_NEW_PAGE' => '',
	); 
// Définition des propriétés du tableau.
$proprietesTableau = array(
	'BRD_COLOR' => array(0,0,0),
	'BRD_SIZE' => '0.1',
	'TB_ALIGN' => 'C',
	'L_MARGIN' => 0,
	); 

$pdf=new phpToPDF();
$pdf->SetMargins(5,0,0);
$pdf->SetAutoPageBreak(true,10);
$pdf->startPageNums();
$pdf->AliasNbPages();

$pdf->AddPage(); 
$pdf->SetFont('Arial','',10);

// Contenu du header du tableau.	
$contenuHeader = array() ;
$contenuTableau=array();

$numCellEntete=0;
$contenuHeader[$numCellEntete++]=30 ;
$contenuHeader[$numCellEntete++]=140;
$contenuHeader[$numCellEntete++]=10;

$contenuHeader[$numCellEntete++]='[C] ' ; 
$contenuHeader[$numCellEntete++]='[C] Nom-Prenom' ; 
$contenuHeader[$numCellEntete++]='[C] X' ; 

$numCellDetail=0;


$ligne= $lesCommandes->fetch() ;
while($ligne)
{
    //rupture date
    $laDateAffiche = $ligne['dateMenu'] ;
    $laDateView=  getDateJMA($laDateAffiche) ;
    
    //rupture menu
    while ($ligne && $laDateAffiche == $ligne['dateMenu'] )
    {
        $numMenu=$ligne['numMenu'] ;
        $nbCommandesMenu = getNbCommandesMenuJour($laDateAffiche, $numMenu) ;
        $descriptionMenu = getDescriptionMenu($ligne['dateMenu'],$ligne['numMenu']) ;

        $contenuTableau[$numCellDetail++]= '[B]'.$nbCommandesMenu." repas"; 
	$contenuTableau[$numCellDetail++]='[B]'.utf8_decode("Menu n° ".$numMenu)." ".utf8_decode($descriptionMenu) ; 
	$contenuTableau[$numCellDetail++]= "" ; 

        while ($ligne && $laDateAffiche == $ligne['dateMenu'] && $numMenu == $ligne['numMenu'])
        {
            $contenuTableau[$numCellDetail++]= "";
            $contenuTableau[$numCellDetail++]=$ligne['nom']." ".utf8_decode($ligne['prenom']) ; 
            $contenuTableau[$numCellDetail++]="" ;
            $ligne= $lesCommandes->fetch() ;    
        }
    }
}    
		
$pdf->drawTableau($pdf, $proprietesTableau, $proprieteHeader, $contenuHeader, $proprieteContenu, $contenuTableau); 


$pdf->Output();

?>