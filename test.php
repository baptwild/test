<?php
// On vérifie que les input nommé dans le dossier est déclaré & différente de nul

 if (!isset($_POST['nombre1'])){
    exit('veuillez remplir le nombre 1');
}
if (isset($_POST['op']) == null){
    exit('veuillez indiquer votre opération');
}
if (isset($_POST['nombre2'])== null){
    exit('veuillez remplir nombre2');
}
// on donne le champs des signes
if ($_POST["op"]!= "+" && $_POST["op"]!= "/" && $_POST["op"]!= "-" && $_POST["op"]!= "*")
{
    exit('mauvais signe ');
}
// on fait le calcule

if ($_POST['op'] == '+') {
    $resultat = $_POST['nombre1'] + $_POST['nombre2'];
}
if ($_POST['op'] == '-') {
    $resultat = $_POST['nombre1'] - $_POST['nombre2'];
}
if ($_POST['op'] == '*') {
    $resultat = $_POST['nombre1'] * $_POST['nombre2'];
}
if ($_POST['op'] == '/') {
    $resultat = $_POST['nombre1'] / $_POST['nombre2'];
}
echo $resultat;
header("location: http://localhost:8000/index.php?resultat=" .$resultat) ;
