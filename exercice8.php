<!--Exercice 8 Variable-->
<?php 
    $title = 'Exercice 8';

    include 'header.php';
?>

<h2>Exercice 8</h2>

<form name="inscription" method="GET" action="exercice8.php" class ='formm'>
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

<?php if((!empty($_GET['firstName']))&&(!empty($_GET['LastName']))&&(!empty($_GET['Sexe']))&&(!empty($_GET['fileDoc']))){ ?>
<?php if (!preg_match('`.pdf`',$_GET['fileDoc'])){?>
    <p><?php echo 'Seul les fichiers Pdf sont accepter';} ?> </p>
    <p><?php echo $_GET['Sexe']." ".$_GET['LastName']." ".$_GET['firstName']." ".$_GET['fileDoc']; ?></?>
        <style type='text/css'>.formm{
        display:none;
    }</style>
<?php } 
  
    include 'footer.php';
?>