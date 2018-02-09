<h3>convertisseur d'euros en dollar</h3>
<p>Taux de change actuel : 1EUR -> 1,22574USD</p>
<form action="#" method="POST" name="form1">
    <input type="text" name="valeur" id="valeur">
    <input type="submit" name="validate" value="Envoyer">
</form>
<?php

if(isset($_POST['validate'])) {

    $valeur = $_POST['valeur']*1.22574;


    echo $valeur . ' ' . 'Dollar américain';
}
else{
    echo 'Veuillez entrer un nombre';
}

?>