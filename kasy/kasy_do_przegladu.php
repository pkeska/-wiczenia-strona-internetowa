<html>

<head>
<meta charset="utf-8"> 
<title>Strona główna</title>

<link rel="stylesheet" href="style.css">

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

<table id="tabela">
<tr>
	<th>LP</th>
	<th>Model kasy</th>
	<th>Numer seryjny</th>
	<th>Firma</th>
	<th>Telefon</th>
	<th>Mail</th>
	<th>Data ostatniego przeglądu</th>
	<th>Ilość dni do terminowego przeglądu</th>
	
</tr>

<?php
for ($i = 1; $i <= 10; $i++)
{
  	  echo
		"<tr>
			<td align=\"center\">$i</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>";
  	} 		
?>
</table>

</body>
</html>