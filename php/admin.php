<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('../Images/back.jpg') center/cover no-repeat fixed;
            color: #fff;
            height: 100vh;
        }

        section {
            position: absolute;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
            flex-wrap: wrap;
            overflow: hidden;
        }

        @keyframes animate {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(100%);
            }
        }

        section .signin {
            position: absolute;
            width: 450px;
            background-image: url(../Images/back.jpg);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.9);
        }

        section .signin .content {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 40px;
        }

        section .signin .content h2 {
            font-size: 2em;
            color: #fff;
            text-transform: uppercase;
        }

        section .signin .content .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        section .signin .content .form .inputBox {
            position: relative;
            width: 100%;
        }

        section .signin .content .form .inputBox input {
            position: relative;
            width: 100%;
            background: #133568;
            border: 2px solid #fff;
            /* Add white border */
            outline: none;
            padding: 25px 10px 7.5px;
            border-radius: 4px;
            color: #fff;
            font-weight: 500;
            font-size: 1em;
        }

        section .signin .content .form .inputBox i {
            position: absolute;
            left: 0;
            padding: 15px 10px;
            font-style: normal;
            color: #aaa;
            transition: 0.5s;
            pointer-events: none;
        }

        .file-upload-container {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .file-upload-container label {
            background: #133568;
            padding: 10px;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        .file-upload-container input[type="file"] {
            display: none;
        }

        .file-upload-container label:hover {
            background: #0e2a4b;
        }

        .signin .content .form .inputBox input:focus ~ i,
        .signin .content .form .inputBox input:valid ~ i {
            transform: translateY(-7.5px);
            font-size: 0.8em;
            color: #fff;
        }

        .signin .content .form .links {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .signin .content .form .links a {
            color: #fff;
            text-decoration: none;
        }

        .signin .content .form .links a:nth-child(2) {
            color: #940262;
            font-weight: 600;
        }

        .signin .content .form .inputBox input[type="submit"] {
            padding: 10px;
            background: #940262;
            color: #000;
            font-weight: 600;
            font-size: 1.35em;
            letter-spacing: 0.05em;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s, color 0.3s;
            /* Add transitions for smooth effects */
        }

        .signin .content .form .inputBox input[type="submit"]:hover {
            background: #8e005a;
            /* Change the background color on hover */
            color: #fff;
            /* Change text color on hover */
            transform: scale(1.05);
            /* Add a slight scale effect on hover */
        }

        .signin .content .form .inputBox input[type="submit"]:active {
            opacity: 0.6;
            transform: scale(0.95);
            /* Add a slight scale effect on click */
        }

        @media (max-width: 900px) {
            section .signin {
                width: 400px;
            }
        }

        @media (max-width: 600px) {
            section .signin {
                width: 350px;
            }
        }

        @media (max-width: 400px) {
            section .signin {
                width: 300px;
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
    <section>
        <div class="signin">
            <div class="content">
                <h2>Sign In</h2>
                <div class="form">
                    <div class="inputBox">
                        <input type="text" id="username" required>
                        <i>Username</i>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password" required>
                        <i>Password</i>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Login" onclick="validateLogin()">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="back-arrow">
     <a href="../Public/index.html" onclick="history.back();">
     <i class='bx bx-arrow-back'></i>
      </a>
    </div>
    <script>
        function validateLogin() {
            // Fetch values from input fields
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Replace these values with your actual credentials
            var validUsername = "admin";
            var validPassword = "admin123";

            // Check if credentials are valid
            if (username === validUsername && password === validPassword) {
                // Redirect to the admin page (replace 'admin-page.html' with your actual admin page)
                window.location.href = 'admin-page.php';
            } else {
                alert('Invalid username or password');
            }
        }
    </script>
</body>

</html>
