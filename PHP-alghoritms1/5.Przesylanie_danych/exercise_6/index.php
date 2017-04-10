<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['userText'])) {
        $userText = $_POST['userText'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 4</title>
    </head>
    <body>

        <?php
        if (!isset($_POST['userAgreement'])) {
            echo $userText;
        } else {
            $arrayText = explode(' ', $userText);

            $modificatedText = [];
            foreach ($arrayText as $value) {
                if ($value === 'kurwa') {
                    $tmp = strlen($value);
                    $word = '';
                    for ($i = 1; $i <= $tmp; $i++) {
                        $word .= '*';
                    }
                    $modificatedText[] = $word;
                } else {
                    $modificatedText[] = $value;
                }
            }
        }
        var_dump($modificatedText);
        ?>


        <form action="#" method="POST">
            <label>
                Twój tekst:
                <input type="text" name="userText">
            </label>
            <label>
                Jestem świadomy konsekwencji
                <input type="checkbox" name="userAgreement">
            </label>
            <input type="submit">
        </form>

    </body>
</html>
