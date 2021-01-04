<?php

echo "Gürkan Saki - 116200029<br>";
echo "Umut Alpaydın - 116200077<br>";
echo "Cem Kaya - 116200061<br>";

    $serverName = "assignment0606.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "Assignment06", 
        "Uid" => "UmutAlpaydın", 
        "PWD" => "Umut6734" 
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP (10) [CustomerID],[FirstName],[LastName] FROM [SalesLT].[Customer]";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CustomerID'] . " " . $row['FirstName'] . " " .  $row['LastName'] . " <br> " . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
