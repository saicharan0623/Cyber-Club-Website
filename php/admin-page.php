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

// Check if the 'file_type' column exists before attempting to add it
$checkColumnQuery = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'uploaded_files' AND COLUMN_NAME = 'file_type'";
$result = $conn->query($checkColumnQuery);

if ($result->num_rows == 0) {
    // 'file_type' column does not exist, so add it
    $alterQuery = "ALTER TABLE uploaded_files ADD COLUMN file_type VARCHAR(255) NOT NULL";
    $conn->query($alterQuery);
}

// Check if the user is authenticated as an admin (you should implement a secure authentication mechanism)
$isAuthenticated = true; // Replace with your authentication logic

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $isAuthenticated) {
    // ... (your existing form handling logic)

    // Extract values from the form data
    $fileCategory = mysqli_real_escape_string($conn, $_POST['fileCategory']);
    $submittedBy = mysqli_real_escape_string($conn, $_POST['submittedBy']);
    $otherComments = mysqli_real_escape_string($conn, $_POST['otherComments']);

    // Check if the file input exists in the $_FILES array
    $fileInputName = 'eventReport'; // Assuming this is the file input for eventReport
    if (isset($_FILES[$fileInputName])) {
        $uploadedFile = $uploadDir . basename($_FILES[$fileInputName]['name']);
        $uploadSuccess = move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $uploadedFile);

        if ($uploadSuccess) {
            // Save file details to the database
            $fileName = basename($_FILES[$fileInputName]['name']);

            // Construct the SQL query
            $sql = "INSERT INTO uploaded_files (file_name, file_type, submitted_by, other_comments, upload_date_time) 
                    VALUES ('$fileName', '$fileCategory', '$submittedBy', '$otherComments', NOW())";

            if ($conn->query($sql) === TRUE) {
                // Set the sessionStorage flag only when the form is successfully submitted
                echo '<script>sessionStorage.setItem("successMessageDisplayed", true);</script>';

                // Redirect to success page after successful form submission
                header("Location: success-forms.php");
                exit();
            } else {
                echo "Error uploading file to the database: " . $conn->error;
            }
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>File Collection</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('../Images/back.jpg') center/cover no-repeat fixed;
            color: #fff;
            height: 100vh;
            margin: 0;
            font-family: 'Quicksand', sans-serif;
        }

        section {
            width: 100%;
            max-width: 800px;
            margin: auto;
            box-sizing: border-box;
            padding: 10px;
        }

        .admin-content {
            background: #133568;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.9);
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.0em;
        }

        input[type="file"],
        select,
        input[type="text"] {
            display: block;
            margin-bottom: 12px;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background: #1d3b73;
            color: #fff;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px;
            background: #940262;
            color: #fff;
            font-weight: 600;
            font-size: 1.2em;
            letter-spacing: 0.05em;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            transition: background 0.3s, transform 0.2s, color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background: #8e005a;
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            opacity: 0.6;
            transform: scale(0.95);
        }

        /* Add these styles for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #1d3b73;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .close {
            color: #fff;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        div.view-uploaded-files {
            margin-top: 20px; /* Add some space above the link */
            text-align: center;
        }

        a.view-uploaded-files {
            display: inline-block;
            padding: 10px 20px;
            background-color: #940262;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a.view-uploaded-files:hover {
            background-color: #2980b9;
        }

        .admin-content {
            margin-bottom: 20px; /* Add margin to the bottom of .admin-content */
        }

    </style>
</head>

<body>
    <section>
        <div class="admin-content">
            <h2>Welcome, Admin!</h2>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="fileCategory">File Category:</label>
                <select name="fileCategory" id="fileCategory" required>
                    <option value="Event Report">Event Report</option>
                    <option value="Minutes Of Meeting">Minutes of Meeting</option>
                    <option value="Event Images">Event Image</option>
                    <option value="Other File">Other File</option>
                </select>

                <label for="eventReport">Select:</label>
                <input type="file" name="eventReport" id="eventReport" required>

                <label for="submittedBy">Submitted By:</label>
                <input type="text" name="submittedBy" id="submittedBy" required>

                <label for="otherComments">Other Comments:</label>
                <input type="text" name="otherComments" id="otherComments">

                <input type="submit" name="submitEventReport" value="SUBMIT">
            </form>
        </div>
        <div class="view-uploaded-files">
        <a class="view-uploaded-files" href="view-uploaded-files.php" target="_blank">View Uploaded Files</a>
    </div>
    </section>
           
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>File uploaded successfully!</p>
        </div>
    </div>

    <script>
    // Function to close the modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Check localStorage for success message flag
    var showMessage = localStorage.getItem('successMessageDisplayed');

    // If the flag is not set, show the success message and set the flag
    if (!showMessage) {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        localStorage.setItem('successMessageDisplayed', true);
    }

    // Function to handle navigation events (back/forward)
    function handleNavigation() {
        var modal = document.getElementById("myModal");

        // If the modal is visible, hide it and remove the localStorage flag
        if (modal.style.display === "block") {
            modal.style.display = "none";
            localStorage.removeItem('successMessageDisplayed');
        }
    }

    // Attach the handleNavigation function to the popstate event
    window.addEventListener('popstate', handleNavigation);
</script>
</body>

</html>
