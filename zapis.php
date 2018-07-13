<html>
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<style type="text/css">
body {font-family: Verdana, Arial; font-size: 14px; font-weight: normal;}
h1   {font-family: Verdana, Arial; font-size: 24px; font-weight: bold;}
h2   {font-family: Verdana, Arial; font-size: 18px; font-weight: normal;}
h3   {font-family: Courier, Arial; font-size: 14px; font-weight: normal; color:red; font-style: italic;}
</style>
</head>

<body>
    <form action="" method="POST">
	<h1>Wyraź swoją opinię :</h1>
	<h2>(maksymalnie 255 znaków)</h2>
	<textarea name="opinie" cols="50" rows="7" maxlength="255"></textarea></br>
    <input name="wyslij" type="submit" value="Wyslij">
    <input name= "reset"   type="reset"  value="Czyść"> 
    <input name="kasujzawartosc" type="submit" value="Kasuj plik opinii"></br>
    </form>

<?php
if(isset($_POST['wyslij'])){
    $opinia = $_POST['opinie'];
    $opinia = substr($opinia, 0, 255);
    $opinia.= "\n";

    if(file_put_contents("./opinie.txt", $opinia, FILE_APPEND) === false) {
            echo "Wystapil blad. Zapis nie zostal dokonany.";
    }
    else{
			echo "Pomyslnie zapisanio.";
			fclose($opinia);}
}

if (isset ($_POST['kasujzawartosc'])){
    $kasuj = fopen ('./opinie.txt', 'w');
    fclose($kasuj);
}

?>

<h2>Dotychczasowe opinie :</h2>
 <h3>
<?php



if(!$fd = fopen('./opinie.txt', 'r')){
	echo("Nie mogę otworzyć pliku opinie.txt.");}
else{
	while(!feof($fd)){
			$str = fgets($fd);
			$str = nl2br($str);  // zamienia \n na <br> czyli przejscie do kolejnej linii
			echo($str);}
	fclose($fd);
	}
echo nl2br("Brak komentarzy, dodaj coś od siebie! \n");
?>
 </h3>

</body>

</html>
