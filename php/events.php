
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <title>Events</title>
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


.activity-section {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-color: rgba(148, 2, 98, 0.5); /* Lighter version of #133568 */
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    animation: fadeInUp 0.8s ease-out;
    margin-top: 30px;
}

.event {
    display: flex;
    flex-direction: column; /* Align images and description in a column */
    align-items: center;
    max-width: 800px; /* Adjust as needed */
}

.event img {
    width: 100%;
    height: 300px; /* Set a fixed height for the images */
    object-fit: cover; /* Maintain aspect ratio and cover the entire container */
    border-radius: 10px;
    margin-bottom: 20px; /* Add margin to separate images */
    transition: transform 0.5s ease-out;
}

.event img:hover {
    transform: scale(1.1);
}

.event-description {
    display: flex;
    flex-direction: column; /* Align description in a column */
    align-items: center;
    margin-left: 100px; /* Add margin to separate title and description from images */
    max-width: 400px;
}

.event h3 {
    font-size: 1.5rem;
    margin-top: 0;
    color: #940262;
}

.event p {
    font-size: 1rem;
    margin-top: 0;
    text-align: justify;
}

h2 {
    font-size: 40px;
    text-align: center;
    color: white;
}

h3 {
    color: #34acef;
    font-size: 2.0rem;
}

p {
    text-align: justify;
    max-width: 400px;
    font-size: 20px;
}
@media only screen and (max-width: 768px) {
    .activity-section {
        flex-direction: column; /* Change flex direction to column on smaller screens */
        align-items: stretch;
    }

    .event {
        max-width: 100%; /* Adjust width for smaller screens */
    }

    .event img {
        width: 100%;
        height: auto; /* Auto-adjust height for smaller screens */
    }

    .event-description {
        margin-left: 0;
    }

    h2 {
        font-size: 32px;
    }

    h3 {
        font-size: 1.5rem;
    }

    p {
        font-size: 16px;
    }
}
/* ... Your existing styles ... */

/* ===== FOOTER ===== */
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
/* Add this CSS style for the "No events found" message */
.no-events {
  text-align: center;
  color: #fff;
  font-size: 1.5rem;
  margin-top: 20px;
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
</head>

<body>
    <h2>Events</h2>
    <section class="activity-section">
        <div class="event">
            <img src="../Images/eham.jpg" alt="Event 1 Image">
            <img src="../Images/eham2.jpg" alt="Event 2 Image">
        </div>
        <div class="event-description">
            <h3>Ethical Hacking Adventures in Mobile</h3>
            <p>A workshop on ethical hacking in the mobile domain explored mobile security and vulnerability assessment through hands-on exercises and real-world case studies. Participants learned to identify and address security vulnerabilities in mobile platforms while adhering to ethical frameworks. Mentor Jashwanth Reddy Kankanala engaged with students, enhancing the learning experience with insights on cybersecurity. A mobile tracker web application was utilized to demonstrate potential security risks. By the workshop's end, participants gained the knowledge and skills to navigate mobile security confidently.</p>
        </div>
    </section>
    <section class="activity-section">
        <div class="event">
            <img src="../Images/event1.jpg" alt="Event 1 Image">
            <img src="../Images/event11.jpg" alt="Event 2 Image">
        </div>
        <div class="event-description">
            <h3>Session on CTF</h3>
            <p>The online session aimed to introduce junior members to PicoCTF and the essentials of Capture The Flag (CTF). Starting with the significance of CTF in developing cybersecurity skills, the session progressed to an in-depth exploration of PicoCTF's user-friendly interface. Mentors guided participants through challenge categories like cryptography and web exploitation, offering practical demonstrations for a hands-on learning experience. The session concluded with an interactive Q&A, fostering engagement and paving the way for future sessions tailored to the cybersecurity club's needs.</p>
        </div>
    </section>
    <section class="activity-section">
        <div class="event">
            <img src="../Images/event2.png" alt="Event 1 Image">
            <img src="../Images/event22.png" alt="Event 2 Image">
        </div>
        <div class="event-description">
            <h3>Webinar on Cyber Security Awareness</h3>
            <p>The event provided a comprehensive exploration of cybersecurity, emphasizing its crucial role today. It covered topics like ethical hacking, cyberattacks, and the roles of different hackers. Concepts of active and passive footprints, recognizing unsafe internet practices, and evaluating link safety were discussed with practical demonstrations. The session concluded with valuable information about EC COUNCIL and ANZ internship programs, offering insights into real-world applications of cybersecurity knowledge.</p>
        </div>
    </section>
    <section class="activity-section">
        <div class="event">
            <img src="../Images/event3.png" alt="Event 1 Image">
            <img src="../Images/kali.png" alt="Event 2 Image">
        </div>
        <div class="event-description">
            <h3>Kali Linux installation and commands</h3>
            <p>On August 20th, our club organized an event titled 'Kali Linux Installation and Commands,' with mentor Jeshwanth Reddy leading the session. The event focused on guiding participants through the installation process of Kali Linux in a VirtualBox virtual machine and providing insights into crucial command-line codes for effective usage. Hosted by our club, the session aimed at bolstering practical cybersecurity skills among participants."</p>
            </div>
    </section>
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
            <p class="footer__copy">Contact: <a href="mailto:cyberowls.stmehyd@nmims.edu.in" style="color: #940262;">cyberowls.stmehyd@nmims.edu.in</a></p>
            <p class="footer__copy">&#169; CyberOwls. All rigths reserved</p>
    </footer>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>
<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>
<!--===== MAIN JS =====-->
    <script>
  // Initialize ScrollReveal
  ScrollReveal().reveal('.event', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });

  ScrollReveal().reveal('.event img', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });

  ScrollReveal().reveal('.event-description', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });
</script>

</body>
</html>

