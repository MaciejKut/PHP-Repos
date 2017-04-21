<?php
$conn = new mysqli('localhost', 'root', 'maciej', 'Maciej2');

if ($conn->connect_error) {
    die("Error occured:" . $conn->error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $x = $_GET['id'];
        $delete = 'DELETE FROM Product WHERE id=' . $x;
        $result = $conn->query("$delete");
    }
}


$sql = "SELECT * FROM Product";
?>
<html>
    <head>
        <style>
            table, td, tr, th {
                border: 1px dashed black;
            }
        </style>
    </head>
    <body> 

        <?php
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<table><tr>
        <th>Nazwa produktu</th>
        <th>Opis produktu</th>
        <th>Id produktu</th>
        <th>Opcje</th>
        </tr>';


            foreach ($result as $value) {
                echo"<tr>";
                echo "<td>" . $value['name'] . " </td>";
                echo "<td>" . $value['description'] . " </td>";
                $id = $value['id'];
                echo "<td>" . $id . " </td>";
                echo "<td><a href='exercise5.php?id=" . $id . "'>" . $value['id'] . " skasuj</a> </td>";
                echo '</tr>';
            }
            echo '</table>';
        }

        $conn->close();
        $conn = null;
        ?>
    </body>
</html>
