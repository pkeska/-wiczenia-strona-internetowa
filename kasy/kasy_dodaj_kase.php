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

<!--<?php

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

?>-->

<form action="kasy_dodaj_kase.php" method="get">

<table border="1" align="center">

<tr><td>Firma</td>
<td><input type="radio" id="firma1" name="firma" value="firma1">
<label for="firma1">Firma nr 1</label><br>
<input type="radio" id="firma2" name="firma" value="firma2">
<label for="firma2">Firma nr 2</label><br>
<input type="radio" id="firma3" name="firma" value="firma3">
<label for="firma3">Firma nr 3</label><br>
</td></tr>

<tr><td>Model kasy fiskalnej</td>
<td><input type="radio" id="model1" name="model_kasy_fiskalnej" value="model1">
<label for="model1">Model nr 1</label><br>
<input type="radio" id="model2" name="model_kasy_fiskalnej" value="model2">
<label for="model2">Model nr 2</label><br>
</td></tr>

<tr><td>numer unikatowy</td>
<td><input type="text" name="numer_unikatowy"><br></td></tr>
<tr><td>numer seryjny</td>
<td><input type="text" name="numer_seryjny"><br></td></tr>
<tr><td>numer ewidencyjny</td>
<td><input type="text" name="numer_ewidencyjny"><br></td></tr>
<tr><td>data fiskalizacji</td>
<td><input type="text" name="data_fiskalizacji"><br></td></tr>
<tr><td>godzina fiskalizacji</td>
<td><input type="text" name="godzina_fiskalizacji"><br></td></tr>

<tr><td>serwisant</td>
<td><input type="radio" id="serwisant1" name="serwisant" value="serwisant1">
<label for="serwisant1">Serwisant 1</label><br>
<input type="radio" id="serwisant2" name="serwisant" value="serwisant2">
<label for="serwisant2">Serwisant 2</label><br>
<input type="radio" id="serwisant3" name="serwisant" value="serwisant3">
<label for="serwisant3">Serwisant 3</label>

<br></td></tr>

<tr><td>urząd skarbowy</td>
<td><input type="text" name="urzad_skarbowy"><br></td></tr>

<tr><td colspan="2" align="center"><input type="reset" value="Reset">
<input type="submit" value="Dodaj" name="submit"></td></tr>

</table>
</form>

</body>
</html>