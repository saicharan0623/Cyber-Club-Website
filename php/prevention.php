<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>Awareness</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <style>
         @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
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
       body {
            font-family: "Roboto", Arial, sans-serif;
            background: url('../Images/back.jpg') center/cover no-repeat fixed;
            color: #fff;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            margin-bottom: 50px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .box {
            border: 2px solid #940262;
            padding: 15px;
            text-align: center;
            background-color: white;
            color: black;
            border-radius: 20px;
        }

        img {
        max-width: 200px;
        height: 130px;
        border-radius: 8px;
        margin-bottom: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Adjust the values as needed */
        }


        p {
        font-size: 13px;
        font-weight: lighter;
        }


        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
            }
        }
        h1{
            text-align: center;
        }

        h3{
            font-size: 20px;;
            color: #940262;
        }

        /* ... (your existing styles) ... */

.container1 {
    display: flex;
    justify-content: space-between;
    margin: 20px;
    max-width: 1300px; /* Adjust as needed */
    margin: auto; /* Center the container */
    margin-bottom: 50px;
    background-color: rgba(148, 2, 98, 0.5); /* Lighter version of #133568 */
   

}

.left-side img {
    width: 100%;
    max-width: 400px; /* Adjust as needed */
    height: 250px;
    border-radius: 8px;
    margin-bottom: 20px;
    margin-top: 20px;
}

.right-side {
    max-width: 600px; /* Adjust as needed */
}

.right-side h3 {
    color: #fff;
    font-size: 2rem;
    margin-top: 50px;
}

.right-side ul {
    list-style: none;
    padding: 0;
    align-content: left;
    text-align: left;
    margin-right: 250px;
}

.right-side li {
    margin-bottom: 10px;
    font-size: 1rem;
}

/* Media Query for Responsive Layout */
@media only screen and (max-width: 768px) {
    .container1 {
        flex-direction: column; /* Change flex direction to column on smaller screens */
        align-items: stretch;
    }

    .left-side img {
        width: 100%;
        height: auto; /* Auto-adjust height for smaller screens */
        margin-bottom: 10px; /* Adjust margin for smaller screens */
    }

    .right-side {
        max-width: 100%; /* Adjust width for smaller screens */
    }

    .right-side h3 {
        font-size: 1.5rem; /* Adjust font size for smaller screens */
    }

    .right-side li {
        font-size: 0.9rem; /* Adjust font size for smaller screens */
    }
    .right-side ul {
    margin-right:8px;
    margin-left: 8px;
}
}

/* ... (your existing styles) ... */

/* Add this CSS style for container2 */
.container2 {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Shadow effect */
    margin: 20px auto;
    max-width: 1260px;
    background-color: rgba(148, 2, 98, 0.5); /* Lighter version of #133568 */
    margin-bottom: 50px;


}

.container2 h3 {
    color: #fff;
    font-size: 2rem;
    text-align: center;
    margin-bottom: 20px;
}

.container2 img {
    max-width:100%;
    height: 280px;
    border-radius: 10px;
    margin-bottom: 10px;
}

.container2 p {
    font-size: 16px;
    line-height: 1.5;
    text-align: justify; /* Align text */
}

.complaint-steps {
    list-style: decimal;
    padding-left: 40px;
}

.complaint-steps li {
    font-size: 16px;
    margin-bottom: 10px;
    color: black;
    text-align: justify; /* Align text */
    color: white;
}

/* Media Query for Responsive Layout */
@media only screen and (max-width: 768px) {
    .container2 {
        text-align: center;
    }

    .complaint-steps {
        padding-left: 20px;
    }
}

a{
    color: red;
}
.container5 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            background-color: white;
            max-width: 1300px;
            margin: auto;
            margin-bottom: 50px;
           
        }

        .chart-container {
            width: 100%;
            max-width: 500px; /* Adjust the max-width as needed */
        }

        #crimeRateGraph {
            width: 100%;
            height: auto;
            margin-left: 20px;
        }

        .graph-content {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            color: black;
        }

        .chart-container h3 {
            font-size: 25px;
            text-align: center;
        }

        @media only screen and (min-width: 768px) {
            .container5 {
                flex-direction: row;
                justify-content: space-between;
            }

            .chart-container {
                width: 45%;
            }

            .graph-content {
                width: 45%;
            }
        }
        .footer {
  background-color: var(--second-color);
  color: #fff;
  text-align: center;
  font-weight: var(--font-semi);
  padding: 2rem 0;

  /* New styles to center the content */
  display: flex;
  flex-direction: column;
  align-items: center;
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

@media only screen and (max-width: 600px) {
    /* Adjust styles for screens up to 600px wide */
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
    <title>Responsive Boxes</title>
</head>
<body>
<h1>Types of Scams<h1>

<div class="container fade-in">
    <div class="box">
    <h3>Identity Theft</h3>
        <img src="../Images/prev.jpg" alt="Image 1">
        <p>Using malware or computer intrusion techniques, cybercriminals steal personally identifiable information to assume someone else's identity</p>
    </div>
    <div class="box">
    <h3>Credit Card Fraud</h3>
        <img src="../Images/prev2.jpeg" alt="Image 2">
        <p>Online users are duped into submitting their credit card information on deceitful websites, allowing criminals to make purchases using the stolen data.</p>
    </div>
    <div class="box">
    <h3>Auction Fraud</h3>
        <img src="../Images/prev3.png" alt="Image 3">
        <p>Online shopping scams include buyers not getting what they paid for or receiving an item that is different from the one advertised.</p>
    </div>
    <div class="box">
    <h3>Investment Fraud</h3>
        <img src="../Images/prev4.jpeg" alt="Image 4">
        <p>Scammers pretend to have great connections and knowledge in finance and bait people to invest in a company, bank, or venture.</p>
    </div>
    <div class="box">
    <h3>Work-at-Home Scam</h3>
        <img src="../Images/prev5.jpg" alt="Image 5">
        <p>This scam promises financial independence and huge money for minimal effort of work at home. Victims must pay upfront for a registration fee to get products that actually dont sell.</p>
    </div>
    <div class="box">
    <h3>Sweepstakes Scam</h3>
        <img src="../Images/prev6.jpeg" alt="Image 6">
        <p>The victim receives an email saying he has won the lottery or sweepstakes. He asked to send a fee to claim the bogus prize</p>
    </div>
    <div class="box">
    <h3>Online Dating Scam</h3>
        <img src="../Images/prev7.jpg" alt="Image 7">
        <p>Criminals scour social networking sites to meet and form relationships with people and later convince them to send money.</p>
    </div>
    <div class="box">
    <h3>West African Scam</h3>
        <img src="../Images/prev8.jpeg" alt="Image 8">
        <p>Victims are asked to help someone transfer a huge amount of money between countries. The scammer promises to give these people a portion of the money, as long as they send an advanced fee to supposedly help process the transfer</p>
    </div>
</div>
<div class="container1 fade-in">
        <!-- Left Side with Two Images -->
        <div class="left-side">
            <img src="../Images/pv1.jpg" alt="Left Image 1">
            <img src="../Images/pv2.jpg" alt="Left Image 2">
        </div>

        <!-- Right Side with 12 Points -->
        <div class="right-side">
            <h3>How to Prevent from Scammers</h3>
            <ul>
    <li><span class="numeric-points">1.</span>Identify Potential Scam</li>
    <li><span class="numeric-points">2.</span>Verify the Source and Information</li>
    <li><span class="numeric-points">3.</span>Protect Personal Information</li>
    <li><span class="numeric-points">4.</span>Use Strong and Unique Passwords</li>
    <li><span class="numeric-points">5.</span>Enable Two-Factor Authentication</li>
    <li><span class="numeric-points">6.</span>Keep Software and Antivirus Updated</li>
    <li><span class="numeric-points">7.</span>Avoid Clicking on Suspicious Links</li>
    <li><span class="numeric-points">8.</span>Educate Yourself on Common Scams</li>
    <li><span class="numeric-points">9.</span>Be Skeptical of Unsolicited Communications</li>
    <li><span class="numeric-points">10.</span>Report and Block Suspicious Activity</li>
    <li><span class="numeric-points">11.</span>Regularly Monitor Financial Statements</li>
    <li><span class="numeric-points">12.</span>Stay Informed about Current Scams</li>
</ul>

        </div>
    </div>
    <div class="container2 fade-in">
    <h3>How to Register a Complaint if You Got Scammed</h3>
    <img src="../Images/comp.png" alt="Register a Complaint Image">
    <p>Follow these steps to register a complaint if you have been a victim of cybercrime:</p>
    
    <ol class="complaint-steps">
        <li>Visit the National Cyber Crime Reporting Portal: <a href="https://cybercrime.gov.in/" target="_blank">National Cyber Crime Reporting Portal</a>.</li>
        
        <li>Register an Account:
            <ul>
                <li>If required, register for an account on the portal.</li>
            </ul>
        </li>

        <li>File a Complaint:
            <ul>
                <li>Log in and file a complaint by providing details about the cybercrime.</li>
            </ul>
        </li>

        <li>Attach Documents:
            <ul>
                <li>Attach any relevant documents or evidence to support your complaint.</li>
            </ul>
        </li>

        <li>Submit the Complaint:
            <ul>
                <li>Submit the complaint through the NCRP website.</li>
            </ul>
        </li>
    </ol>
</div>
<div class="container5 fade-in">
        <div class="chart-container">
            <canvas id="crimeRateGraph"></canvas>
        </div>
        <div class="graph-content">
            <h3>Crime Rate Statistics</h3>
            <p>
                The bar graph shown represents the crime rate percentage over the years from 2012 to 2022. The data illustrates the changes in crime rates annually.
            </p>
            <p>
                It is essential to analyze these statistics to understand the trends and patterns in criminal activities. The red bars indicate the crime rates for each respective year.
            </p>
            <p>
                Efforts to combat crime and ensure public safety are crucial in addressing the challenges presented by these numbers. Law enforcement, community engagement, and proactive measures play a significant role in creating a safer environment for everyone.
            </p>
        </div>
    </div>
    <div class="back-arrow">
     <a href="../Public/index.html" onclick="history.back();">
     <i class='bx bx-arrow-back'></i>
      </a>
    </div>
    <footer class="footer">
            <p class="footer__title">CYBER OWLS STME HYD</p>
            <div class="footer__social">
                <a href="https://www.linkedin.com/in/cyberowls/" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://www.instagram.com/cyberowls.stme?igsh=MXdtanAza3M3MHdybA==" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            </div>
            <p class="footer__copy">Contact: <a href="mailto:cyberowls.stmehyd@nmims.in" style="color: #940262;">cyberowls.stmehyd@nmims.edu.in</a></p>
            <p class="footer__copy">&#169; CyberOwls. All rigths reserved</p>
    </footer>

    <script>
        // Add your Chart.js code for the crime rate percentage graph
        var ctx = document.getElementById('crimeRateGraph').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'],
                datasets: [{
                    label: 'Crime Rate Percentage',
                    data: [3477, 5693, 9622, 11592, 12137, 21796, 27248, 44546, 50035, 52974, 65893],
                    backgroundColor: '#940260',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>
</html>
