<!--Exercice 3 Variable-->
<?php 
    $title = 'Exercice 3';
    include 'header.php';
    
?>

<h1>Exercice 3</h1>

<h2>Commencez-donc par vous inscrire :</h2>

<form name="inscription" method="GET" action="user.php">
    Entrez votre prénom : <input type="text" name="firstName"/> <br/>
    Entrez votre Nom : <input type="text" name="LastName"/><br/>
    <input type="submit" name="valider" value="OK"/>

<?php 
    include 'footer.php';
?>