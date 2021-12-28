<?php
    function makeConnectionWithDatabase() {
        $hostname = "localhost"; 
        $dbUser = "root";
        $dbPassword = "root";
        $dbName = "sorting_Hats";
        $port = 3306; // 3306 - default

        $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName, $port);

        // Checken of ik connectie heb met de DB
        if ($conn == false) {
            echo "ik kan de database niet bereiken";
            die();
        }
        // connectie terug geven
        return $conn;
    }

    function getQuery($conn, $query) {
        return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($conn, $query) {
        mysqli_query($conn, $query);
    }

    function closeConnection($conn) {
        $conn->close();
    }