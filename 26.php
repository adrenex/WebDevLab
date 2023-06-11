<?php
    // Read JSON file
    $jsonData = file_get_contents('26.json');
    // Convert JSON data to associative array
    $data = json_decode($jsonData, true);
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jsondb";
    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check if the connection was successful
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    // Extract data from the JSON array
    $stdID = $data['stdID'];
    $stdName = $data['stdData']['stdName'];
    $stdAge = $data['stdData']['stdAge'];
    $stdGender = $data['stdData']['stdGender'];
    $stdNo = $data['stdData']['stdNo'];
    $stdStreet = $data['stdData']['stdAddress']['stdStreet'];
    $stdCity = $data['stdData']['stdAddress']['stdCity'];
    $stdCountry = $data['stdData']['stdAddress']['stdCountry'];
    $stdPostal = $data['stdData']['stdAddress']['stdPostal'];
    $stdDept = $data['stdEdu']['stdDept'];
    $stdSemester = $data['stdEdu']['stdSemester'];
    $stdMajor = $data['stdEdu']['stdMajor'];
    // SQL query to insert data into the database
    $sql = "INSERT INTO students (stdID, stdName, stdAge, stdGender, stdNo, stdStreet, stdCity,
    stdCountry, stdPostal, stdDept, stdSemester, stdMajor)
    VALUES ('$stdID', '$stdName', '$stdAge', '$stdGender', '$stdNo', '$stdStreet', '$stdCity',
    '$stdCountry', '$stdPostal', '$stdDept', '$stdSemester', '$stdMajor')";
    // Execute the SQL query
    if ($conn->query($sql) === TRUE) 
    {
        echo "Data inserted successfully.";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the database connection
    $conn->close();
?>