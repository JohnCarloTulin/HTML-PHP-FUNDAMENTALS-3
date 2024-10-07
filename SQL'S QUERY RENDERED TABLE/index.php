<?php 
require_once 'dbConfig.php'; // To use the database, we need to import it by require_once

// Error handling for database connection
try {
    $stmt = $pdo->prepare("SELECT * FROM bicycle_store.bicycle");
    $stmt->execute();
    $result = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Model</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Frame Type</th>
        </tr>

        <?php
        // Displaying the rows fetched from the database
        foreach($result as $row) {
            echo "<tr>";
            echo "<td>" . ($row["model"]) . "</td>";
            echo "<td>" . ($row["brand"]) . "</td>";
            echo "<td>" . ($row["price"]) . "</td>";
            echo "<td>" . ($row["frame_type"]) . "</td>";
            echo "</tr>"; 
        }
        ?>
    </table> 
</body>
</html>
