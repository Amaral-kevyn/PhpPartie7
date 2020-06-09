<!--Exercice 6 Variable-->
<?php 
    $title = 'Exercice 6';

    include 'header.php';
?>

<h2>Exercice 6</h2>

<form name="inscription" method="GET" action="exercice6.php" class ='formm'>
    <SELECT name="Sexe" size="1">
    <OPTION>Monsieur
    <OPTION>Madame
    </SELECT><br/>
    Entrez votre prénom : <input type="text" name="firstName"/> <br/>
    Entrez votre Nom : <input type="text" name="LastName"/><br/>
    <input type="submit" name="valider" value="OK"/>
</form>

    <?php
 
  if((!empty($_GET['firstName']))&&(!empty($_GET['LastName']))&&(!empty($_GET['Sexe']))){
        echo $_GET['Sexe']." ".$_GET['LastName']." ".$_GET['firstName']; ?>.
    <style type='text/css'>.formm{
        display:none;
    }</style>
   <?php } ?>
  

 
      
<?php 
    include 'footer.php';
?>