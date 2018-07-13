<html>
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<style type="text/css">
body {font-family: Verdana, Arial; font-size: 14px; font-weight: normal;}
h1   {font-family: Verdana, Arial; font-size: 24px; font-weight: bold;}
h2   {font-family: Verdana, Arial; font-size: 18px; font-weight: normal;}
h3   {font-family: Verdana, Arial; font-size: 24px; font-weight: bodl; color:red;}
</style>
</head>

<body>
    <form action="odwrotna.php" method="POST">
    <h1>To jest zawartość pliku "opinie" :</h1>
    </form>

<?php
$lines = file('./opinie.txt');
foreach ($lines as $line_num => $line) {
      echo "Linia #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";}
      $html = implode ('', file ('./opinie.txt'));
?>

<br>
<h3>To jest odwrócona zawartość pliku :</h3>

<?php

$reversed = array_reverse($lines);
foreach ($reversed as $reversed_num => $reversed) {
      echo "Linia #<b>{$reversed_num}</b> : " . htmlspecialchars($reversed) . "<br />\n";}
      $html = implode ('', file ('./opinie.txt'));
      // źródło pomysłu : http://www.php.net/manual/en/function.array-reverse.php
?>

</body>
</html>
