function chargerPageCde(dateMenu)
{   
    dateConfigUrl=dateMenu.substring(0,4) + dateMenu.substring(5,7) + dateMenu.substring(8) ;
    document.location="index.php?uc=commande&action=choixDate&date=" + dateConfigUrl ;
    $3
}

function chargerPageAnnulCde(dateMenu)
{   
    dateConfigUrl=dateMenu.substring(0,4) + dateMenu.substring(5,7) + dateMenu.substring(8) ;
    document.location="index.php?uc=commande&action=validok&date=" + dateConfigUrl ;
}

function chargerPageVoirCde(dateMenu)
{   
    dateConfigUrl=dateMenu.substring(0,4) + dateMenu.substring(5,7) + dateMenu.substring(8) ;
    document.location="index.php?uc=gestion&action=consulter&date=" + dateConfigUrl ;
}

function chargerPageSaisirMenu(dateMenu)
{   
    dateConfigUrl=dateMenu.substring(0,4) + dateMenu.substring(5,7) + dateMenu.substring(8) ;
    document.location="index.php?uc=gestion&action=menusaisir&date=" + dateConfigUrl ;
}

function chargerPageCrediterCompte(idEleve)
{   
    document.location="index.php?uc=gestion&action=crediter&role=eleve&id=" + idEleve ;
}

function submitMenu(nb)
{
    nomForm = 'repas_saisie' + nb ;
    descMenu = document.forms[nomForm].elements[2].value ;
    if (descMenu == '')
    {
        alert ('Il manque la description du menu !') ;
    }
    else
    {
        document.forms[nomForm].submit() ;
    }
}

function supprMenu(dateJMA, dateAMJ, nb)
{
    if (confirm('Etes-vous certain de vouloir supprimer le menu n°' + nb + ' du ' + dateJMA))
    {
        dateConfigUrl=dateAMJ.substring(0,4) + dateAMJ.substring(5,7) + dateAMJ.substring(8) ;
        document.location="index.php?uc=gestion&action=menusupprimer&dateMenu=" + dateConfigUrl + "&numMenu=" + nb ;
    };
}

function validerMenu(nb)
{
    nomForm = 'repas_saisie' + nb ;
    descMenu = document.forms[nomForm].elements[2].value ;
    if (descMenu == '')
    {
        alert ('Il manque la description du menu !') ;
    }
    else
    {
        document.forms[nomForm].submit() ;
    }
}

function verifForm()
{
    nomForm = 'mdp_saisie'  ;
    mdp1 = document.forms[nomForm].elements[0].value ;
    mdp2 = document.forms[nomForm].elements[1].value ;
    valid = true ;
    if (mdp1.length < 8)
    {
        alert ('Le mot de passe doit comporter au moins 8 caractères') ;
        valid = false ;
    }
    else
    {
        if (mdp2.length < 8)
        {
            alert ('Le mot de passe à confirmer doit comporter au moins 8 caractères') ;
            valid = false ;
        }
        else
        {
            if (mdp1 != mdp2)
            {
                alert ('Les deux mots de passe doivent être identiques') ;
                valid = false ;
            }
        }
    }
    return valid ;
}

function verifRegl()
{
    nomForm = 'saisie-regl'  ;
    datePaiement = document.forms[nomForm].elements[0].value ;
    montant = document.forms[nomForm].elements[1].value ;
    typeReglement1 = document.forms[nomForm].elements[2].checked ;
    typeReglement2 = document.forms[nomForm].elements[3].checked ;
    
    valid = true ;
    if (datePaiement == '')
    {
        alert ('La date de paiement est obligatoire') ;
        valid = false ;
    }
    else
    {
        if (montant == '')
        {
            alert ('Le montant est obligatoire') ;
            valid = false ;
        }
        else
        {
            if (typeReglement1==false && typeReglement2==false )
            {
                alert ('Cocher un type de règlement') ;
                valid = false ;
            }
        }
    }
    return valid ;
}

function verifMajRegl()
{
    nomForm = 'saisie-regl'  ;
    datePaiement = document.forms[nomForm].elements[1].value ;
    montant = document.forms[nomForm].elements[2].value ;
    typeReglement1 = document.forms[nomForm].elements[3].checked ;
    typeReglement2 = document.forms[nomForm].elements[4].checked ;
    
    valid = true ;
    if (datePaiement == '')
    {
        alert ('La date de paiement est obligatoire') ;
        valid = false ;
    }
    else
    {
        if (montant == '')
        {
            alert ('Le montant est obligatoire') ;
            valid = false ;
        }
        else
        {
            if (typeReglement1==false && typeReglement2==false )
            {
                alert ('Cocher un type de règlement') ;
                valid = false ;
            }
        }
    }
    return valid ;
}

function verifFiltresRepas()
{
    nomForm = 'listerepas-filtres'  ;
    dateDebut = document.forms[nomForm].elements[0].value ;
    dateFin = document.forms[nomForm].elements[1].value ;
    typeRepas = document.forms[nomForm].elements[2].value ;
    valid = true ;
    if (dateDebut == '')
    {
        alert ('La date de début est obligatoire') ;
        valid = false ;
    }
    else
    {
        if (dateFin == '')
        {
            alert ('La date de fin est obligatoire') ;
            valid = false ;
        }
        else
        {
            if (dateFin < dateDebut)
            {
                alert ('La date de fin est plus petite que la date de début') ;
                valid = false ;
            }
            else
            {
                if (typeRepas!=1 && typeRepas!=1 )
                {
                    alert ('Cocher un type d\'affichage') ;
                    valid = false ;
                }
            }
        }
    }
    return valid ;
}

function verifFiltres()
{
    nomForm = 'paiement-filtres'  ;
    dateDebut = document.forms[nomForm].elements[0].value ;
    dateFin = document.forms[nomForm].elements[1].value ;
    typeReglement1 = document.forms[nomForm].elements[2].checked ;
    typeReglement2 = document.forms[nomForm].elements[3].checked ;
    typeReglement3 = document.forms[nomForm].elements[4].checked ;
    
    valid = true ;
    if (dateDebut == '')
    {
        alert ('La date de début est obligatoire') ;
        valid = false ;
    }
    else
    {
        if (dateFin == '')
        {
            alert ('La date de fin est obligatoire') ;
            valid = false ;
        }
        else
        {
            if (dateFin < dateDebut)
            {
                alert ('La date de fin est plus petite que la date de début') ;
                valid = false ;
            }
            else
            {
                if (typeReglement1==false && typeReglement2==false && typeReglement3==false )
                {
                    alert ('Cocher un type de règlement') ;
                    valid = false ;
                }
            }
        }
    }
    return valid ;
}

function ouvrirPage(nomPage)
{
    window.open(nomPage, "Fichier PDF", "toolbar=yes, directories=no, menubar=no, resizable=yes, scrollbars=yes, width=1200, height=900, top=10, left=20");
}