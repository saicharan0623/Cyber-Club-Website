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

// Fetch uploaded files from the database
$sql = "SELECT * FROM uploaded_files";                  
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>Uploaded Files</title>
    <style>
body {
            font-family: "Roboto", Arial, sans-serif;
            background: url('../Images/back.jpg') center/cover no-repeat fixed;
            color: #fff;
            height: 100vh;
            overflow:scroll;
            margin:0;
        }

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}

table {
    width: 800px;
    max-width: 1000px;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
    background: #133568;
    color: #fff;
}


        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
            font-size: 1rem;
        }

        th {
            background-color: #940262;
        }

        a.download-link {
            display: inline-block;
            padding: 5px 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a.download-link:hover {
            background-color: #2980b9;
        }

        h2 {
            font-size: 30px;
            color: #fff;
            text-align: center;
            margin-bottom: 10px;
        }
      
        :root {
  --header-height: 3rem;
  --font-semi: 600;
  /*===== Colores =====*/
  /*Purple 260 - Red 355 - Blue 224 - Pink 340*/
  /* HSL color mode */
  --hue-color: 224;
  --first-color: hsl(var(--hue-color), 89%, 60%);
  --second-color: hsl(var(--hue-color), 56%, 12%);
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --big-font-size: 2rem;
  --h2-font-size: 1.25rem;
  --normal-font-size: .938rem;
  --smaller-font-size: .75rem;
  /*===== Margenes =====*/
  --mb-2: 1rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;
  /*===== z index =====*/
  --z-back: -10;
  --z-fixed: 100;
}
/* ===== FOOTER =====*/
.footer {
  background-color: var(--second-color);
  color: #fff;
  text-align: center;
  font-weight: var(--font-semi);
  padding: 2rem 0;
}

.footer__title {
  font-size: 2rem;
  margin-bottom: var(--mb-4);
}

.footer__social {
  margin-bottom: var(--mb-4);
}

.footer__icon {
  font-size: 1.5rem;
  color: #fff;
  margin: 0 var(--mb-2);
}

.footer__copy {
  font-size: var(--smaller-font-size);
}
@media only screen and (max-width: 767px) {
    /* Adjust styles for screens up to 600px wide */
    table {
        max-width: 200px;
    }
    th, td {
            padding: 10px;
            text-align: center;
            font-size: 0.5rem;
        }

    .footer__title {
        font-size: 1.5rem;
        margin-bottom: var(--mb-2);
    }

    .footer__icon {
        font-size: 1.2rem;
        margin: 0 var(--mb-1);
    }

    .footer__copy {
        font-size: 0.8rem;
    }
}
    </style>
</head>

<body>
<div class="container">
        <h2>Uploaded Files</h2>
    <?php
    if ($result->num_rows > 0) {
        echo '<table>
                <tr>
                    <th>File Name</th>
                    <th>File Type</th>
                    <th>Submitted By</th>
                    <th>Other Comments</th>
                    <th>Upload Date Time</th>
                    <th>Action</th>
                </tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['file_name'] . '</td>
                    <td>' . $row['file_type'] . '</td>
                    <td>' . $row['submitted_by'] . '</td>
                    <td>' . $row['other_comments'] . '</td>
                    <td>' . $row['upload_date_time'] . '</td>
                    <td><a class="download-link" href="download.php?file_id=' . $row['id'] . '" download>Download</a></td>
                </tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No files uploaded yet.</p>';
    }

    // Close the database connection
    $conn->close();
    ?>
</div>
    <footer class="footer">
            <p class="footer__title">CYBER OWLS STME HYD</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            </div>
            <p class="footer__copy">Contact: <a href="mailto:cyberowls.stmehyd@nmims.edu.in" style="color: #940262;">cyberowls.stmehyd@nmims.edu.in</a></p>
            <p class="footer__copy">&#169; CyberOwls. All rigths reserved</p>
    </footer>
</body>
</html>
