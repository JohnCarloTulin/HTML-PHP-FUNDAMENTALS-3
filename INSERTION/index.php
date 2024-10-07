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
//Inserting a new user to the table
$query = "INSERT INTO bicycle_store.bicycle (model, brand, bicycle_type_id, price, frame_type)
VALUES (?,?,?,?,?)";

// Preparing sql queries
$stmt = $pdo->prepare($query);

// The values that are being inserted
$executeQuery = $stmt->execute(["Rambutan","Duralite","15",'1000000.21', "Plastic"]);
$executeQuery = $stmt->execute(["Paksiw","ATOYOT","15",'51245.38', "Vibranium"]);
$executeQuery = $stmt->execute(["KulangSaLambing","MISSUBIBI","15",'30012.74', "Tanso"]);

// Indicator of whether the query was successfully executed
if ($executeQuery) {
    echo "Query successful!";
}
else {
    echo "Query failed";
}
?>
</body>
</html>