<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>Success</title>
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

        .success-content {
            background: #133568;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.9);
            color: #fff;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
        }

        a {
            color: #fff;
            background: #940262;
            padding:8px;
            border-radius: 5px;

        }

    </style>
</head>

<body>
    <section>
        <div class="success-content">
            <h2>Form Submitted Successfully!</h2>
            <p>Thank you for your submission.</p>
            <p><a href="../php/admin-page.php">Back</a></p>
        </div>
    </section>
</body>

</html>
