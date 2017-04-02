<?php

// tutaj umieść kod który będzie zarządzał sesją i dodawał ocenty do tabelki.
// Pamiętaj o tym że po dodaniu oceny do tabelki wczytanej z sesji musisz tabelkę jeszcze raz umieścić w sesji (inaczej nie będzie tam nowo dodanej oceny)
// Tutaj też oblicz średnią

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie 6</title>
</head>
<body>

<?php

// Tutaj wyświetl wszystkie oceny i ich średnią

?>

<form action="#" method="POST">
    <label>
        Ocena:
        <input type="number" step="1" name="grade">
    </label>
    <input type="submit">
</form>

</body>
</html>
