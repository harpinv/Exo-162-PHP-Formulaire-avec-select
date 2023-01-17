<form method="get" action="index.php">
    <div>

        <select id="civile" name="civile">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
    </div>
    <div>
        <label>Entrer votre nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label>Entrer votre prenom</label>
        <input type="text" name="prenom" id="prenom">
    </div>
    <input type="submit" value="Envoyer" name="submit">
</form>

<?php
echo $_GET['civile'] . " " . $_GET['nom'] . " " . $_GET['prenom'];