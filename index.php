<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> calculatrice </title>

</head>
<body>

<h3 style="text-align: center; color: #b31616"> Bienvenue sur une super calculatrice KO </h3>
<p> Pour faire ton calcul, remplis juste les champs si dessous</p>


<form method="post" action="test.php">

     <label> nombre 1<input type="number" name="nombre1" ></label>
    <label for="liste_deroulante">choisissez une opération</label>
    <select name="op" >
        <option  value="+">addition</option>
        <option  value="-">soustraction</option>
        <option  value="*">multiplication</option>
        <option  value="/">division</option>
      <label> nombre 2<input type="number" name="nombre2" ></label>
    <input type="submit" value="=">
        <?php
        if(!isset($_GET['resultat']))
        {
            $_GET['resultat'] = 0;
        }
        ?>
        <strong>Résultat:</strong> <?php echo htmlspecialchars($_GET['resultat']); ?>
</form>

</body>
</html>