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

// Deleting the bicycle with id = 13 from the database
$query = "DELETE FROM bicycle_store.bicycle WHERE bicycle_id = 13";

// Preparing of SQL query
$stmt = $pdo->prepare($query);

// Executes the SQL query
$executeQuery = $stmt->execute();

// Indicator of whether the query was successfully executed.
if ($executeQuery) {
    echo "Deletion successful!";
}
else {
    echo "Query failed";
}
?>
</body>
</html>