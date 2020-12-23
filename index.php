<?php

echo "Gürkan Saki - 116200029<br>";
echo "Umut Alpaydın - 116200077<br>";
echo "Cem Kaya - 116200061<br>";

    $serverName = "assignment05.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "Assignment5", // update me
        "Uid" => "GurkanSaki", // update me
        "PWD" => "Gürkan67" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table<br>" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['ProductName'] . "             <br>            " . $row['CategoryName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
