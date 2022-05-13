<div class="home">
    
    <p class="homeB">Ajouter un élève<p>
        <?php
        echo '<form method="POST" action="index.php?uc=gestion&action=validajout">
            <input type="text" size="10" maxlength="40" name="nom" placeholder="Nom">
            <input type="text" size="10" maxlength="40" name="prenom" placeholder="Prenom">
            <input type="number" size="10" min="1" max="2" name="classe" placeholder="Classe">
            <button type="submit">Valider</button>
            <br></br>
            <br><a href="index.php?uc=gestion&action=compte"> Retour </a>
            </form>';
    
        ?>
    
</div>