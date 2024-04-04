<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'cyber_owls';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['file_id'])) {
    $file_id = $_GET['file_id'];

    // Fetch file information from the database
    $sql = "SELECT * FROM uploaded_files WHERE id = $file_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = $row['file_path'];
        $file_name = $row['file_name'];

        // Set headers for file download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');

        // Read the file and output it to the browser
        readfile($file_path);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
$conn->close();
?>
