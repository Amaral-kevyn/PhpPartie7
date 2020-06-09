<!--Exercice 4 Variable-->
<?php 
  
    $title = 'Exercice 4';
    include 'header.php';
?>

<h1>Exercice 4</h1>

<form name="inscription" method="POST" action="user2.php">
    Entrez votre prénom : <input type="text" name="firstName"/> <br/>
    Entrez votre Nom : <input type="text" name="LastName"/><br/>
    <input type="submit" name="valider" value="OK"/>

<?php 
    include 'footer.php';
?>