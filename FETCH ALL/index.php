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

// Selecting all students from the table. In this code I add the database name which
$stmt = $pdo->prepare("SELECT * FROM bicycle_store.bicycle");
    if ($stmt->execute()) {
        print_r($stmt->fetchAll());
    }
?>

</body>
</html>