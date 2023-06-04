<html>
<head>
<title>Page Inscription</title>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root','C/]*eg1XN8m6rW2A','myphp');


$name = $_POST['name'];
$phone   = $_POST['phone'];
$email  = $_POST['email'];
$birthday = $_POST['birthday'];
$lastname = $_POST['lastname'];


$result = mysqli_query($link,"INSERT INTO php11 (No_clt,tel_clt , email_clt,Bd_clt,Ln_clt) VALUES ('$name','$phone','$email','$birthday','$lastname')");
if ($result == true)
{
 echo("<p style='font-size:20px;'>Le client $name $lastname a été ajouté avec succés </p> <BR>");
echo("<a href='index.html' style='color:pink;'>Retour a la page d'accueil</a>");  


}
else
{
echo("<p style='font-size:20px;'>Le client n'est pas été ajouté !  <BR>");
   
}
mysqli_close($link);
?>
</body>
</html>
