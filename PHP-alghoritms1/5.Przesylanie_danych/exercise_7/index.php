<?php


// tutaj umieść kod który będzie przeliczał waluty
$xml = file_get_contents("http://api.nbp.pl/api/exchangerates/rates/A/EUR/?format=json");
$xml2 = json_decode($xml, true);
echo $xml2['rates']['0']['mid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie 5</title>
    </head>
<body>

<?php



?>

<form action="#" method="POST">
    <label>
        Kwota:
        <input type="number" min="0.00" step="0.01" name="cashAmount">
    </label>
    <label>
        Konwersja:
        <input type="radio" name="conversionType" value="EURtoUSD" checked> EUR → USD <br>
        <input type="radio" name="conversionType" value="USDtoEUR" > USD → EUR <br>
        <input type="radio" name="conversionType" value="EURtoPLN" > EUR → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoEUR" > PLN → USD <br>
        <input type="radio" name="conversionType" value="USDtoPLN" > USD → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoUSD" > PLN → USD <br>
    </label>
    <input type="submit">
</form>

</body>
</html>
