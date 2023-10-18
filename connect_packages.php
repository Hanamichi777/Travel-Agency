<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "travels";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch all rows from the "packages" table
    $sql = "SELECT id, name, price FROM package";
    $result = $conn->query($sql);

    // Create an array to store the JSON objects
    $packages = array();

    // Fetch rows and create JSON objects
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $package = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price']
            );
            $packages[] = $package;
        }
    }

    // Encode the array as JSON
    $json = json_encode($packages);

    // Output the JSON
    echo $json;

    // Close the connection
    $conn->close();
?>
