<?php

echo "Gürkan Saki - 116200029<br>";
echo "Umut Alpaydın - 116200077<br>";
echo "Cem Kaya - 116200061<br>";

 try {    
    $hostname = 'assignment05.database.windows.net';
    $dbname = 'Assignment5';
    $username = 'GürkanSaki';
    $pwd = 'Gürkan67';
    $pdo = new PDO ("dblib:version=8.0;charset=UTF-8;host={$hostname};dbname={$dbname}", $username, $pwd);
    $query = "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $statement = $pdo->prepare($query);
    $statement->execute();
    
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($results);
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}
