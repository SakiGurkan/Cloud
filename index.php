<?php

echo "Gürkan Saki - 116200029<br>";
echo "Umut Alpaydın - 116200077<br>";
echo "Cem Kaya - 116200061";
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:assignment05.database.windows.net,1433; Database = Assignment5", "GurkanSaki", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "GurkanSaki", "pwd" => "{your_password_here}", "Database" => "Assignment5", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:assignment05.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
