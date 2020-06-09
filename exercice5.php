<!--Exercice 5 Variable-->
<?php 
    $title = 'Exercice 5';

    include 'header.php';
?>

<form name="inscription" method="POST" action="user3.php">
    <SELECT name="Sexe" size="1">
    <OPTION>Monsieur
    <OPTION>Madame
    </SELECT><br/>
    Entrez votre prénom : <input type="text" name="firstName"/> <br/>
    Entrez votre Nom : <input type="text" name="LastName"/><br/>
    <input type="submit" name="valider" value="OK"/>
</FORM>
      
<?php 
    include 'footer.php';
?>