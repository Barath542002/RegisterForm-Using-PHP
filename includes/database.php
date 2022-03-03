<?php

$dbHost = "	sql304.epizy.com";
$dbUser = "	epiz_31199593";
$dbPass = "mV0nbG55GvRY5or";
$dbName = "epiz_31199593_barath";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}
?>