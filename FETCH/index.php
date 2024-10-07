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

// Select bicycles with ID = 9 and retrieve their details from the database, then print them in an associative array format
$stmt = $pdo->prepare("SELECT * FROM bicycle_store.bicycle WHERE bicycle_id = 9");
    if ($stmt->execute()) {
        $userID9 = $stmt->fetch();
        echo "<pre>";
        print_r($userID9);
        echo "<pre>";
    }
?>

</body>
</html>