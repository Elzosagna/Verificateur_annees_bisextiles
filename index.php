<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vérificateur de d'années bisextiles</title>

  </head>
  <body>
    <div class="">
      <form class=""action="index.php" method="post">
        <input type="number" name="annee" placeholder="saisissez une année">
        <input type="submit" value="Vérifier">
      </form>
    </div>
    <?php
    $annee = $_POST['annee'];

    	if((is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
    		echo 'année bissextile';
    	} else {
    		echo 'année non bissextile';
    	}
    ?>
  </body>
</html>
