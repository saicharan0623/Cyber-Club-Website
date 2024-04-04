<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../Images/logo3.ico">
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>About club</title>
        <style>
/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
/*===== VARIABLES CSS =====*/
:root {
  --header-height: 3rem;
  --font-semi: 600;
  /*===== Colores =====*/
  /*Purple 260 - Red 355 - Blue 224 - Pink 340*/
  /* HSL color mode */
  --hue-color: 224;
  --first-color: hsl(var(--hue-color), 89%, 100%);
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

@media screen and (min-width: 968px) {
  :root {
    --big-font-size: 3.5rem;
    --h2-font-size: 2rem;
    --normal-font-size: 1rem;
    --smaller-font-size: .875rem;
  }
}

/*===== BASE =====*/
*, ::before, ::after {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background: url('../Images/back.jpg') center/cover no-repeat fixed;
  color: #fff;
  height: 100vh;
}


h1, h2, p {
  margin: 0;
}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

/*===== CLASS CSS ===== */
.section-title {
  position: relative;
  font-size: var(--h2-font-size);
  color:#34acef;
  margin-top: var(--mb-2);
  margin-bottom: var(--mb-4);
  text-align: center;
}

.section {
  padding-top: 3rem;
  padding-bottom: 2rem;
}

/*===== LAYOUT =====*/
.bd-grid {
  max-width: 1024px;
  display: grid;
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}

.l-header {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  background-color: #fff;
  box-shadow: 0 1px 4px rgba(146, 161, 176, 0.15);
}

/*===== NAV =====*/
.nav {
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: var(--font-semi);
}

@media screen and (max-width: 767px) {
  .nav__menu {
    position: fixed;
    top: var(--header-height);
    right: -100%;
    width: 80%;
    height: 100%;
    padding: 2rem;
    background-color: var(--second-color);
    transition: .5s;
  }
}

/*Active menu*/
.active::after {
  position: absolute;
  content: '';
  width: 100%;
  height: 0.18rem;
  left: 0;
  top: 2rem;
  background-color: var(--first-color);
}

/*=== Show menu ===*/
.show {
  right: 0;
}

/*===== HOME =====*/
.home {
  position: relative;
  row-gap: 5rem;
  padding: 4rem 0 5rem;
}

.home__data {
  align-self: center;
}

.home__title {
  font-size: var(--big-font-size);
  margin-bottom: var(--mb-5);
}

.home__title-color {
  color: #940262;
}

.home__social {
  display: flex;
  flex-direction: column;
}

.home__social-icon {
  width: max-content;
  margin-bottom: var(--mb-2);
  font-size: 1.5rem;
  color: var(--second-color);
}

.home__social-icon:hover {
  color: var(--first-color);
}

.home__img {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 260px;
}

.home__blob {
  fill: var(--first-color);
}

.home__blob-img {
  width: 480px;
  size: 120cm;
}

/*BUTTONS*/
.button {
  display: inline-block;
  background-color: var(--first-color);
  color: #fff;
  padding: .75rem 2.5rem;
  font-weight: var(--font-semi);
  border-radius: .5rem;
  transition: .3s;
}

.button:hover {
  box-shadow: 0px 10px 36px rgba(0, 0, 0, 0.15);
}

/* ===== ABOUT =====*/
.about__container {
  row-gap: 2rem;
  text-align: center;
}

.about__subtitle {
  margin-bottom: var(--mb-2);
}

.about__img {
  justify-self: center;
}

.about__img img {
  width: 200px;
  border-radius: .5rem;
}

/* ===== SKILLS =====*/
.skills__container {
  row-gap: 2rem;
  text-align: center;
}

.skills__subtitle {
  margin-top: 30px;
  margin-bottom: var(--mb-2);
  margin-left: 30px;
  text-align: left;

}

.skills__text {
  margin-bottom: var(--mb-4);
  margin-left: 30px;
  text-align: left;
}

.skills__data {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  font-weight: var(--font-semi);
  padding: .5rem 1rem;
  margin-bottom: var(--mb-4);
  border-radius: .5rem;
  box-shadow: 0px 4px 25px rgba(148, 2, 98, 0.15);
  margin:30px;

}

.skills__icon {
  font-size: 2rem;
  margin-right: var(--mb-2);
  color: #940262;
}

.skills__names {
  display: flex;
  align-items: center;
}

.skills__bar {
  position: absolute;
  left: 0;
  bottom: 0;
  background-color: #940262;
  height: .25rem;
  border-radius: .5rem;
  z-index: var(--z-back);
}

.skills__html {
  width: 100%;
}

.skills__css {
  width: 100%;
}

.skills__js {
  width: 100%;
}

.skills__ux {
  width: 100%;
}

.skills__img {
  border-radius: .5rem;
}

/* ===== WORK =====*/
.work__container {
  row-gap: 2rem;
}

.work__img {
  box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);
  border-radius: .5rem;
  overflow: hidden;
}

.work__img img {
  transition: 1s;
}

.work__img img:hover {
  transform: scale(1.1);
}

/* ===== CONTACT =====*/
.contact__input {
  width: 100%;
  font-size: var(--normal-font-size);
  font-weight: var(--font-semi);
  padding: 1rem;
  border-radius: .5rem;
  border: 1.5px solid var(--second-color);
  outline: none;
  margin-bottom: var(--mb-4);
}

.contact__button {
  display: block;
  border: none;
  outline: none;
  font-size: var(--normal-font-size);
  cursor: pointer;
  margin-left: auto;
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

/* ===== MEDIA QUERIES=====*/
@media screen and (max-width: 320px) {
  .home {
    row-gap: 2rem;
  }
  .home__img {
    width: 200px;
  }
}

@media screen and (min-width: 576px) {
  .home {
    padding: 4rem 0 2rem;
  }
  .home__social {
    padding-top: 0;
    padding-bottom: 2.5rem;
    flex-direction: row;
    align-self: flex-end;
  }
  .home__social-icon {
    margin-bottom: 0;
    margin-right: var(--mb-4);
  }
  .home__img {
    width: 300px;
    bottom: 25%;
  }
  .about__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    text-align: initial;
  }
  .skills__container {
    grid-template-columns: .7fr;
    justify-content: center;
    column-gap: 1rem;
  }
  .work__container {
    grid-template-columns: repeat(2, 1fr);
    column-gap: 2rem;
    padding-top: 2rem;
  }
  .contact__form {
    width: 360px;
    padding-top: 2rem;
  }
  .contact__container {
    justify-items: center;
  }
}

@media screen and (min-width: 768px) {
  body {
    margin: 0;
  }
  .section {
    padding-top: 4rem;
    padding-bottom: 3rem;
  }
  .section-title {
    margin-bottom: var(--mb-6);
  }
  .section-title::after {
    width: 80px;
    top: 3rem;
  }
  .nav {
    height: calc(var(--header-height) + 1.5rem);
  }
  .nav__list {
    display: flex;
    padding-top: 0;
  }
  .nav__item {
    margin-left: var(--mb-6);
    margin-bottom: 0;
  }
  .nav__toggle {
    display: none;
  }
  .nav__link {
    color: var(--second-color);
  }
  .home {
    padding: 8rem 0 2rem;
  }
  .home__img {
    width: 400px;
    bottom: 10%;
  }
  .about__container {
    padding-top: 2rem;
  }
  .about__img img {
    width: 300px;
  }
  .skills__container {
    grid-template-columns: repeat(2, 1fr);
    column-gap: 2rem;
    align-items: center;
    text-align: initial;
  }
  .work__container {
    grid-template-columns: repeat(3, 1fr);
    column-gap: 2rem;
  }
}

@media screen and (min-width: 992px) {
  .bd-grid {
    margin-left: auto;
    margin-right: auto;
  }
  .home {
    padding: 10rem 0 2rem;
  }
  .home__img {
    width: 450px;
  }
}
/* Add this style for the social media icons */
.social-icons {
    display: flex;
    justify-content: center;
    margin-top: 1rem; /* Adjust as needed */
}

.social-icon {
    font-size: 1.5rem;
    margin: 0 0.5rem;
    color: #34acef; /* Adjust the color as needed */
}

.social-icon:hover {
    color: #940262; /* Adjust the hover color as needed */
}
/* Inside your media query for max-width: 767px */
@media screen and (max-width: 767px) {
    .about__text {
        text-align: justify; /* Align text justify on mobile */
        padding: 0 15px; /* Add padding to maintain equal length on both sides */
    }

    /* Optional: Adjustments for better mobile display */
    .about__subtitle {
        text-align: center; /* Center the subtitle */
    }

    .about__container {
        grid-template-columns: 1fr; /* Make it a single column layout */
        text-align: center; /* Center text within container */
    }

    .about__img {
        margin-bottom: 1rem; /* Add some bottom margin for spacing */
    }

    .social-icons {
        margin-top: 0.5rem; /* Adjust top margin for social icons */
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

         <!--===== vision =====-->
         <section class="about section " id="about">
                <h2 class="section-title">Our Vision</h2> 
                <div class="about__container bd-grid">
                <div class="about__img">
                        <img src="../Images/logo.jpg" alt="">
                        <div class="social-icons">
                        <a href="https://www.linkedin.com/in/cyberowls/" class="social-icon"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.instagram.com/cyberowls.stme?igsh=MXdtanAza3M3MHdybA==" class="social-icon"><i class='bx bxl-instagram'></i></a>
                           </div>
                    </div> 
                    <div>
                        <h2 class="about__subtitle">Crafting Tomorrow's Cybersecurity Landscape</h2>
                        <p class="about__text">At the core of our mission lies the commitment to sculpting a future where digital landscapes are fortified and innovation is boundless. With a relentless pursuit of excellence, we navigate the complexities of cybersecurity, fostering a realm where data integrity and digital evolution coalesce. Join us in redefining the boundaries of protection and possibility</p>           
                    </div>  
                                                   
                </div>
                
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">Mentor Of the Club</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="../Images/mentor.jpeg" alt="">
                        <div class="social-icons">
                        <a href="https://www.linkedin.com/in/jashwanth-k-k-?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-icon"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.instagram.com/tactician_from_india?igshid=OGQ5ZDc2ODk2ZA==" class="social-icon"><i class='bx bxl-instagram'></i></a>
                           </div>
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Jashwanth Reddy Kankanala</h2>
                        <p class="about__text">Meet our exceptional mentor, a Professional Malware Author and Head of Service Excellence in AML-CTF for Trustees. With a rich background as a cybersecurity advisor for La Trobe University, this individual is a Hall of Fame inductee for ethical hackers in 2022. A dedicated trainer of STEM mentors and survival expert, our mentor brings a unique blend of technical prowess, mentoring skills, and a commitment to women's mental health. Currently focused on helping clients grow and maximize revenue, our mentor is a valuable guide in navigating the realms of cybersecurity and business growth.</p> 
                      </div>                                   
                </div>
            </section>

            <section class="about section " id="about">
                <h2 class="section-title">Faculty - Mentor Of the Club</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="../Images/wasihamam.jpg" alt="">
                        <div class="social-icons">
                        <a href="http://www.linkedin.com/in/wasihatasneem" class="social-icon"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.instagram.com/wasi_ha/" class="social-icon"><i class='bx bxl-instagram'></i></a>
                           </div>
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Wasiha Tasneem</h2>
                        <p class="about__text">Meet our esteemed faculty mentor, Ms. Wasiha Tasneem, an Assistant Professor at the School of Technology Management & Engineering, NMIMS Hyderabad. She also serves as an Assistant Faculty for the prestigious IUCEE signature program IIEECP. Holding a Master's degree from JNTU, Hyderabad, and a Bachelor of Engineering from the renowned Osmania University, Hyderabad, Ms. Tasneem is a Certified International Engineering Educator accredited by Indo Universal Collaboration for Engineering Education. With over 8 years of teaching experience, she specializes in training students in various programming languages and Core Computer Science and Engineering platforms. Ms. Tasneem's dedication to education and mentorship extends beyond academia. She is committed to empowering students and professionals in the field of cybersecurity, serving as a beacon of knowledge and guidance. With her multifaceted expertise, mentoring prowess, and unwavering dedication, Ms. Wasiha Tasneem is an invaluable asset in navigating the complex landscapes of cybersecurity and professional development.</p> 
                      </div>                                   
                </div>
            </section>

            <section class="about section " id="about">
                <h2 class="section-title">President Of the Club</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="../Images/saicharan.jpeg" alt="">
                        <div class="social-icons">
                        <a href="https://www.linkedin.com/in/malde-sai-charan-3499a1250?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-icon"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.instagram.com/saicharan013?igshid=OGQ5ZDc2ODk2ZA==" class="social-icon"><i class='bx bxl-instagram'></i></a>
            <!-- Add more social media icons as needed -->
                           </div>
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Malde Saicharan</h2>
                        <p class="about__text">I'm M saicharan, at the helm as the President of the Cyber Owls Club. My passion for cyber security and web development fuels my commitment to leading this community. I guide the Cyber Owls towards innovative solutions in the digital realm. Together, we're not just a club; we're a collaborative force dedicated to continuous learning and the art of securing the digital world. Join us, and let's soar to new heights.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title"> Empowering Digital Safeguards</h2>
                <div class="skills__container bd-grid">            
                    
                    <div>
                        <h2 class="skills__subtitle">Fortify with Expertise</h2>
                        <p class="skills__text">Empowering you with cutting-edge expertise, we offer a diverse range of skills to meet your needs. Elevate your capabilities with our comprehensive and professional skill set."</p>
                        <div class="skills__data">
                            <div class="skills__names">
                            <i class='bx bx-globe skills__icon'></i>
                                <span class="skills__name">Network Security</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                            <i class='bx bx-user skills__icon'></i>
                                <span class="skills__name">Ethical Hacking</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                            <i class='bx bx-mobile-alt skills__icon'></i>
                                <span class="skills__name">Mobile Security</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                            <i class='bx bxs-lock-alt skills__icon'></i>                                
                            <span class="skills__name">Security Architecture</span>

                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="about__img">
                        <img src="../Images/hacker.png" alt="">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="../Images/cyber1.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                      <img src="../Images/cyber2.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                      <img src="../Images/cyber3.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                      <img src="../Images/cyber4.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                     <img src="../Images/cyber5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                      <img src="../Images/cyber6.jpg" alt="">
                    </a>
                </div>
            </section>

            <div class="back-arrow">
     <a href="../Public/index.html" onclick="history.back();">
     <i class='bx bx-arrow-back'></i>
      </a>
    </div>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">CYBER OWLS STME HYD</p>
            <div class="footer__social">
                <a href="https://www.linkedin.com/in/cyberowls/" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://www.instagram.com/cyberowls.stme?igsh=MXdtanAza3M3MHdybA==" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            </div>
            <p class="footer__copy">Contact: <a href="mailto:cyberowls.stmehyd@nmims.in" style="color: #940262;">cyberowls.stmehyd@nmims.edu.in</a></p>
            <p class="footer__copy">&#169; CyberOwls. All rigths reserved</p>
        </footer>

        <!--===== SCROLL REVEAL ====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!--===== MAIN JS =====-->
  <script>
  // Initialize ScrollReveal
  ScrollReveal().reveal('.section-title', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });

  ScrollReveal().reveal('.about__container', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });

  ScrollReveal().reveal('.skills__container', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });

  ScrollReveal().reveal('.work__container', {
    delay: 200,
    origin: 'bottom',
    distance: '20px',
    easing: 'ease-in-out',
    reset: true,
  });

  </script>

    </body>
</html>
