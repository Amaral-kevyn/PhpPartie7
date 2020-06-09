<!--Exercice 7 Variable-->
<?php 
    $title = 'Exercice 7';

    include 'header.php';
?>

<h2>Exercice 7</h2>

<form name="inscription" method="GET" action="exercice7.php" class ='formm'>
    <SELECT name="Sexe" size="1">
    <OPTION>Monsieur
    <OPTION>Madame
    </SELECT><br/>
    <label>Entrez votre prénom :</label> 
    <input type="text" name="firstName"/> <br/>
    <label>Entrez votre Nom :</label>
    <input type="text" name="LastName"/><br/>
    <label>Choissisez votre fichier :</label>
    <input type="file" name="fileDoc"/><br/>
    
    <input type="submit" name="valider" value="OK"/>
</form>

    <?php
 
  if((!empty($_GET['firstName']))&&(!empty($_GET['LastName']))&&(!empty($_GET['Sexe']))&&(!empty($_GET['fileDoc']))){
        echo $_GET['Sexe']." ".$_GET['LastName']." ".$_GET['firstName']." ".$_GET['fileDoc']; ?>
    <style type='text/css'>.formm{
        display:none;
    }</style>
   <?php } 
  
    include 'footer.php';
?>