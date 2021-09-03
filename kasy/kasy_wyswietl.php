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

<table border="1" align="center">
<tr>
	<th>LP</th>
	<th>Model kasy</th>
	<th>Producent</th>
	<th>Numer unikatowy</th>
	<th>Numer seryjny</th>
	<th>Numer ewidencyjny</th>
	<th>Firma</th>
	<th>Ulica i numer</th>
	<th>Miasto</th>
	<th>Telefon</th>
	<th>Mail</th>
</tr>

<?php
for ($i = 1; $i <= 10; $i++)
{
  
  
  	if ($i%2==1)
  	{
  		  echo
		"<tr>
			<td align=\"center\" bgcolor=\"silver\">$i</td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>
			<td bgcolor=\"silver\"></td>";
  	} 
  
  else
  
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
			<td></td>
			<td></td>
			<td></td>
			<td></td>";
  	} 		
		
;
}
?>
</table>

</body>
</html>