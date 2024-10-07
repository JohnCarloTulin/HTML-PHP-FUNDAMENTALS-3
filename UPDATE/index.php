<?php require_once 'dbConfig.php'; ?>   <!-- To use the database, we need to import it by require_once -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  

// Updating a user from the database. We use the assignment operator which is "?"
$query = "UPDATE bicycle_store.bicycle SET model = ? WHERE bicycle_id = 12";

// Preparing of SQL query
$stmt = $pdo->prepare($query);

// Executes the SQL query
$executeQuery = $stmt->execute("Aveeno", "Tanso");

// Indicator of whether the query was successfully executed.
if ($executeQuery) {
    echo "Update successful!";
}
else {
    echo "Query failed";
}
?>
</body>
</html>