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
</div>
<br>

<?php

if(isset($_GET['submit']))
{
echo "Nazwa firmy: ".$_GET['nazwa_firmy']."<br>";
echo "Adres: ".$_GET['adres']."<br>";
echo "Kod pocztowy: ".$_GET['kod_pocztowy']."<br>";
echo "Miasto: ".$_GET['miasto']."<br>";
echo "NIP: ".$_GET['NIP']."<br>";
echo "Telefon: ".$_GET['telefon']."<br>";
echo "Mail: ".$_GET['e-mail']."<br>";

}

?>

<form action="kasy_dodaj_klienta.php" method="get">

<table border="1" align="center">
<tr><td>Nazwa firmy</td>
<td><input type="text" name="nazwa_firmy"><br></td></tr>
<tr><td>Adres</td>
<td><input type="text" name="adres"><br></td></tr>
<tr><td>kod pocztowy</td>
<td><input type="text" name="kod_pocztowy"><br></td></tr>
<tr><td>miasto</td>
<td><input type="text" name="miasto"><br></td></tr>
<tr><td>NIP</td>
<td><input type="text" name="NIP"><br></td></tr>
<tr><td>telefon</td>
<td><input type="text" name="telefon"><br></td></tr>
<tr><td>e-mail</td>
<td><input type="text" name="e-mail"><br></td></tr>

<tr><td colspan="2" align="center"><input type="reset" value="Reset">
<input type="submit" value="Dodaj" name="submit"></td></tr>

</table>
</form>

<?php
echo $_SERVER['HTTP_USER_AGENT']."<br>";
?>

</body>
</html>