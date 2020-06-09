<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include 'header.php';
    
?>

<h1>Exercice 2</h1>

<h2>Commencez-donc par vous inscrire :</h2>

<form name="inscription" method="POST" action="user2.php">
    Entrez votre prénom : <input type="text" name="firstName"/> <br/>
    Entrez votre Nom : <input type="text" name="LastName"/><br/>
    <input type="submit" name="valider" value="OK"/>

<?php 
    include 'footer.php';
?>