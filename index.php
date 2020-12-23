<?php

echo "Gürkan Saki - 116200029<br>";
echo "Umut Alpaydın - 116200077<br>";
echo "Cem Kaya - 116200061<br>";

    $serverName = "assignment05.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "Assignment5", 
        "Uid" => "GurkanSaki", 
        "PWD" => "Gürkan67" 
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " <br> " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
