<html>
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
body {font-family: Verdana, Arial; font-size: 14px; font-weight: normal;}
h1   {font-family: Verdana, Arial; font-size: 24px; font-weight: bold;}
h2   {font-family: Verdana, Arial; font-size: 18px; font-weight: normal;}
h3   {font-family: Courier, Arial; font-size: 14px; font-weight: normal; color:red; font-style: italic;}
</style>
</head>
<body>
<form action="" method="POST">
	<h1>Cześć, to jest stronka do testowania licznika w formie pliku.txt</h1>
	<br>
	<br>
	
<?php
$lines = file('./opinie.txt');
foreach ($lines as $line_num => $line) {
      echo "Linia #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";}
      $html = implode ('', file ('./opinie.txt'));
// i na odwrót
      $reversed = array_reverse($lines);
foreach ($reversed as $reversed_num => $reversed) {
      echo "Linia #<b>{$reversed_num}</b> : " . htmlspecialchars($reversed) . "<br />\n";}
      $html = implode ('', file ('./opinie.txt'));   
?>

<h2>To są twoje odwiedziny nr:</h2>
<?php

$plik = "licz.txt";
   if (file_exists($plik)) {
     $fp = fopen($plik, "r+");
     $licz = fgets($fp, 7);
     $licz += 1;
     fseek($fp, 0);
     fwrite($fp, $licz, 7);
     fclose($fp);
   }
   if ($licz < 10) 
     echo("00000" . $licz . " ");
   elseif ($licz < 100)
     echo("0000" . $licz . " ");
   elseif ($licz < 1000)
     echo("000" . $licz . " ");
   elseif ($licz < 10000)
     echo("00" . $licz . " ");
   elseif ($licz < 100000)
     echo("0" . $licz . " ");
   else
     echo($licz . " ");
?>

</body>
</html>

