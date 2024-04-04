<?php
session_start();

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

// Database connection parameters
$conn = mysqli_connect("localhost", "root", "", "cyber_owls");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $sql = "INSERT INTO inquiries (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";

    if (mysqli_query($conn, $sql)) {
        // Send email notification using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'saicharanmalde@gmail.com'; // Replace with your email address
            $mail->Password   = 'lhthjcnefpkiedeo'; // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom('saicharanmalde@gmail.com', 'CyberOwls'); // Replace with your email and name
            $mail->addAddress('cyberowls.stmehyd@nmims.in', 'Cyberowls'); // Replace with the recipient's email and name

            // Content
            $mail->isHTML(true); // Set to true if you are sending HTML content
            $mail->Subject = 'New Inquiry Submitted';
            $mail->Body = "
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>New Inquiry Submitted</title>
        <style>
            body {
                font-family: 'Roboto', Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                padding: 20px;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                color: #940262;
            }

            p {
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2 style='color: #940262;'>New Inquiry Submitted</h2>
            <p>The following information has been submitted through the contact form:</p>

            <table>
                <tr>
                    <th style='background-color: #940262; color: #fff; padding: 10px;'>Name</th>
                    <td>$name</td>
                </tr>
                <tr>
                    <th style='background-color: #940262; color: #fff; padding: 10px;'>Email</th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th style='background-color: #940262; color: #fff; padding: 10px;'>Number</th>
                    <td>$number</td>
                </tr>
                <tr>
                    <th style='background-color: #940262; color: #fff; padding: 10px;'>Message</th>
                    <td>$message</td>
                </tr>
            </table>
        </div>
    </body>
    </html>
";
            $mail->send();
            $successMessage = "Inquiry submitted successfully!";
            // Redirect to another page to avoid form resubmission
            header("Location: success.php");
            exit();
        } catch (Exception $e) {
            $errorMessage = "Error sending email: {$mail->ErrorInfo}";
        }
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>Contact</title>
    <style>
        body {
        font-family: "Roboto", Arial, sans-serif;
        background: url('../Images/back.jpg') center/cover no-repeat fixed;
        color: #fff;
        height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        }

    /* Add styling for the particle container */
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    /* Your existing styles go here */

    /* Style for the email form */
    .email-form {
        max-width: 300px;
        width: 100%;
        background:#133568;
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        margin-bottom: 10px;
        align-items:center;
        margin-top: 40px;
        justify-content: center;

    }

    .email-form h3 {
        color: #fff;
        text-align: center;
    }

    .email-form form {
        display: flex;
        flex-direction: column;
    }

    .email-form label {
        display: block;
        margin: 10px 0 5px;
        color: #fff;
    }

    .email-form input,
    .email-form textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 10px;
        box-sizing:border-box;
        
        
    }

    .email-form button {
        width: 100%;
        padding: 10px;
        background: #940262;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .email-form button:hover {
        background-color: #000;
    }

  h3{
    margin-top: 0;
    font-size: 30px;
  }
        @media (max-width: 600px) {
            .login-form,
            .email-form {
                padding: 19px;
                
            }
        }

        @media (max-width: 400px) {
            .login-form,
            .email-form {
                padding: 16px;
        
            }
        }
        /* back arrow  */
.back-arrow {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: var(--z-fixed);
  background-color: #940262; 
  padding: 3px;
  border-radius: 5px;
}

.back-arrow a {
  text-decoration: none;
  color: #fff;
  font-size: 1.8rem; 
  display: flex;
  align-items: center;
}

.back-arrow i {
  margin-right: 10px;
}
/* Media Query for smaller screens */
@media screen and (max-width: 767px) {
  .back-arrow {
    top: 10px;
    right: 10px;
  }

  .back-arrow a {
    font-size: 1.5rem; }

  .back-arrow i {
    margin-right: 5px; 
}
}

</style>
</head>
<body>

<div id="particles-js"></div>
            <div class="email-form">
                <h3>Contact Us</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" required>
                    
                    <label for="email">Your Email:</label>
                    <input type="email" name="email" required>
                    
                    <label for="number">Your Number:</label>
                    <input type="tel" name="number" required>
                    
                    <label for="message">Message:</label>
                    <textarea name="message" rows="4" required></textarea>
                    
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="back-arrow">
     <a href="../Public/index.html" onclick="history.back();">
     <i class='bx bx-arrow-back'></i>
      </a>
    </div>
    <!-- Include particles.js script -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="../script/particles.js"></script>
    <script src="../script/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 100,
                },
                color: {
                    value: "#82eefd",
                },
                shape: {
                    type: "circle",
                },
                opacity: {
                    value: 0.6,
                },
                size: {
                    value: 4,
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#82eefd",
                    opacity: 0.4,
                    width: 1,
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse",
                    },
                    resize: true,
                },
            },
        });
    </script>

</body>
</html>
