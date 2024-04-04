<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>Success</title>
    <style>
        body {
            font-family: "Roboto", Arial, sans-serif;
            background: url('../Images/back.jpg') center/cover no-repeat fixed;
            color: #fff;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }  

        .container {
            text-align: center;
            animation: fadeInUp 1s ease-out;
            max-width: 600px;
            width: 90%;
            background: rgba(19, 53, 104, 0.5);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .logo {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .button-container {
            margin-top: 20px;
        }

        a.button {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #940262;
            transition: background-color 0.3s, color 0.3s;
        }

        a.button:hover {
            background-color: #000;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Media Query for Mobile Devices */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }

            h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }

            a.button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="../Images/logo3.ico" alt="Logo" class="logo" width="100" height="100">
        <h1>Submitted!</h1>
        <h2>Thank You</h2>
        <p>Your inquiry has been submitted successfully.</p>
        <div class="button-container">
            <a href="../Public/index.html" class="button">Home</a>
        </div>
    </div>
</body>
</html>
