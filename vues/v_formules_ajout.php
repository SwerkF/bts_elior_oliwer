<div class="home">
    
    <p class="homeB">Ajouter une formule<p>
        <?php
        echo '<form method="POST" action="index.php?uc=gestion&action=validajoutFormule">
            <input type="text" size="15" maxlength="40" name="formule" placeholder="Formule"></input>
            <input type="number" step="0.25" maxlength="20" name="prix" placeholder="Prix"></input>
            <button type="submit">Valider</button>
            <br></br>
            <br><a href="index.php?uc=gestion&action=formule"> Retour </a>
            </form>';
    
        ?>
    
</div>