<?php
/**
 * Created by PhpStorm.
 * User: ramsu
 * Date: 06-06-2018
 * Time: 05:55
 */

    $servername = "db.cs.dal.ca";
    $username = "boopathy";
    $password = "B00790060";
    $dbname = "boopathy";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}