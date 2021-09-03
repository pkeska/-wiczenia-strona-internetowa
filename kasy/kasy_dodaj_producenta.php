<html>

<head>
<meta charset="utf-8"> 
<title>Strona główna</title>
</head>
<body>
<div style="text-align:center;">
<a href="../index.php">Strona główna</a>
<a href="kasy.php">Kasy</a>
<a href="../bhp/bhp.php">BHP</a>
<br>
<a href="kasy_dodaj_klienta.php">Dodaj klienta</a>
<a href="kasy_wyswietl.php">Wyświetl</a>
<a href="kasy_do_przegladu.php">Kasy do przeglądu</a>
<a href="kasy_dodaj_kase.php">Dodaj kasę</a>
<a href="kasy_dodaj_producenta.php">Dodaj producenta</a>
</div>
<br>

<?php

if(isset($_GET['submit']))
{
echo "Producent: ".$_GET['producent']."<br>";
}

$q = "SELECT producent FROM producent_kas";
$result =  $conn-> query($q);
while($obj = $result->fetch_object())
{
    echo $obj->producent."<br>";
    echo $obj->producent_kas."<br>";
}

?>

<form action="kasy_dodaj_producenta.php" method="get">

<table border="1" align="center">

<tr><td>Producent</td>
<td><input type="text" name="producent"><br></td></tr>

<tr><td colspan="2" align="center"><input type="reset" value="Reset">
<input type="submit" value="Dodaj" name="submit"></td></tr>

</table>
</form>

</body>
</html>