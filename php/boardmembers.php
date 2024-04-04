<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../Images/logo3.ico">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/scrollreveal"></script>
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
        }
        
.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #fff;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
    width: 100%;
    height: 350px;
    filter: drop-shadow(0 0 15px rgba(255, 0, 288, 0.7));
}

.frontside .card,
.backside .card {
    min-height: unset; /* Remove the minimum height constraint */
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #000 !important;
}

.frontside .card .card-body img {
    width: 220px;
    height: 220px;
    border-radius: 50%;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside,
.backside {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}

.frontside .card,
.backside .card {
    width: 100%;
    height: 100%;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}
.rotate-indicator {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 18px;
    color: #007b5e; /* Adjust color as needed */
    cursor: pointer;
}
.background-container {
    background-color: #940262;
    text-align: center;
}

h1 {
    font-size: 50px;
    margin-bottom: 40px;
    color: #fff;
    position: relative;
    padding: 20px 0; /* Adjust padding as needed */
}

.logo-container {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-140%);
}

.logo-container img {
    max-width: 17%; /* Adjust the logo size as needed */
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<section id="team" class="pb-5">
     <div class="container">
    <div class="background-container">
    <h1>
        Board Members
    </h1>
</div>

        <div class="row">
            <!-- Team member -->

            <!-- Malde Sai Charan -->
<div class="col-xs-12 col-sm-6 col-md-4 team-card" data-sr="enter left">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/saicharan.jpeg" alt="card image"></p>                                    
                                <h4 class="card-title">Malde Sai Charan<span style="color: red;"> <br>President</span></h4>
                                    <h5 class="card-text">President</h5>
                                </div>
                                <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Malde Sai Charan</h4>
                                    <p class="card-text">President</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/malde-sai-charan-3499a1250?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prasad -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member3.jpeg" alt="card image"></p>                        
                                <h4 class="card-title">Prasad<span style="color: red;"> <br>Vice-President</span></h4>
                        <h5 class="card-text">Vice President</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Prasad</h4>
                        <h5 class="card-text">Vice President</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/prasad-kannawar-95b757199?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- S Pavithra -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member4.JPG" alt="card image"></p>   
                                <h4 class="card-title">S Pavithra<span style="color: red;"> <br>Vice-President</span></h4>
                        <h5 class="card-text">Vice President</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">S Pavithra</h4>
                        <h5 class="card-text">Vice President</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="http://www.linkedin.com/in/pavithrasevakula2005">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Zeeshan -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member5.png" alt="card image"></p>
                        <h4 class="card-title">Zeeshan<span style="color: red;"><br>Secretary</span></h4>
                        <h5 class="card-text">Secretary</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Zeeshan</h4>
                        <h5 class="card-text">Secretary</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/zeeshu-zeeshan-1b03942a5?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vaishnavi Goud -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team__member6.JPG" alt="card image"></p>                        
                                <h4 class="card-title">S Vaishnavi Goud<span style="color: red;"><br>Secretary</span></h4>
                        <h5 class="card-text">Secretary</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Vaishnavi Goud</h4>
                        <h5 class="card-text">Secretary</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/siripuram-vaishnavi-goud-013996286?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rachit -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member7.JPG" alt="card image"></p>   
                                <h4 class="card-title">Rachit<span style="color: red;"><br>Treasurer</span></h4>                    
                        <h5 class="card-text">Treasurer</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Rachit</h4>
                        <h5 class="card-text">Treasurer</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="http://www.linkedin.com/in/rachit-jain-00b957286">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rayyan -->

 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member8.JPG" alt="card image"></p>                        
                        <h4 class="card-title">Rayyan<span style="color: red;"><br>Social Media Manager</span></h4>
                        <h5 class="card-text">Social Media Manager</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Rayyan</h4>
                        <h5 class="card-text">Social Media Manager</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/md-rayyan-028271284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- P Ananya -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/ananya.JPG" alt="card image"></p>                         
                        <h4 class="card-title">P Ananya<span style="color: red;"><br>Events Manager</span></h4>
                        <h5 class="card-text">Events Manager</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">P Ananya</h4>
                        <h5 class="card-text">Events Manager</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/ananya-peddamgari-a6311026a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Aashritha -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member10.JPEG" alt="card image"></p>                         
                        <h4 class="card-title">Aashritha<span style="color: red;"><br>Council Delegate</span></h4>
                        <h5 class="card-text">Council Delegate</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Aashritha</h4>
                        <h5 class="card-text">Council Delegate</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/aashritha-reddy-177446296?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ratna Chand -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team__member11.JPg" alt="card image"></p>                         
                        <h4 class="card-title">Ratna Chand<span style="color: red;"><br>Council Delegate</span></h4>
                        <h5 class="card-text">Council Delegate</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Ratna Chand</h4>
                        <h5 class="card-text">Council Delegate</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/ratnachand-kancharla-712bb9285?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rishikesh -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member12.JPG" alt="card image"></p>                         
                        <h4 class="card-title">Rishikesh<span style="color: red;"><br>Council Delegate</span></h4>
                        <h5 class="card-text">Council Delegate</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Rishikesh</h4>
                        <h5 class="card-text">Council Delegate</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/rishikesh-talpalikar-b84b64284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Thrisha -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member13.JPEG" alt="card image"></p>                         
                        <h4 class="card-title">Thrisha<span style="color: red;"><br>Council Delegate</span></h4>
                        <h5 class="card-text">Council Delegate</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Thrisha</h4>
                        <h5 class="card-text">Council Delegate</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/thrisha-reddy-13bb3b263?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ananth -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member14.JPG" alt="card image"></p>                         
                        <h4 class="card-title">Ananth Yadav<span style="color: red;"><br>Council Delegate</span></h4>
                        <h5 class="card-text">Council Delegate</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">Ananth</h4>
                        <h5 class="card-text">Council Delegate</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/rudramoni-ananth-yadav-85011b284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- V Vaishnavi -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/vaishnavi.JPG" alt="card image"></p>                         
                        <h4 class="card-title">V Vaishnavi<span style="color: red;"><br>Council Delegate</span></h4>
                        <h5 class="card-text">Council Delegate</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">V Vaishnavi</h4>
                        <h5 class="card-text">Council Delegate</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/vaishnavi-vadla-599198253?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- N Abhinav -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member16.JPEG" alt="card image"></p>                         
                        <h4 class="card-title">N Abhinav<span style="color: red;"><br>Designing Team</span></h4>
                        <h5 class="card-text">Designing Team</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">N Abhinav</h4>
                        <h5 class="card-text">Designing Team</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/abhinav-narahari-79a7b4216?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- C Anil -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member17.JPG" alt="card image"></p>                         
                        <h4 class="card-title">C Anil<span style="color: red;"><br>Designing Team</span></h4>
                        <h5 class="card-text">Designing Team</h5>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">C Anil</h4>
                        <h5 class="card-text">Designing Team</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/canilkumar-abc17082005?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- S Mounik -->
 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="../Images/team_member18.JPG" alt="card image"></p>                         
                        <h4 class="card-title">S Mounika<span style="color: red;"><br>Designing Team</span></h4>
                        <h5 class="card-text">Designing Team</h5>
                    </div>S
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
            <div class="backside">

                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title">S Mounika</h4>
                        <h5 class="card-text">Designing Team</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/sheri-mounika-reddy-4ab373288?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="rotate-indicator">
                                <i class="fa fa-refresh"></i>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </section>
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
            <p class="footer__copy">Contact: <a href="mailto:cyberowls.stmehyd@nmims.in" style="color: #940262;">cyberowls.stmehyd@nmims.edu.in</a></p>
            <p class="footer__copy">&#169; CyberOwls. All rigths reserved</p>
    </footer>

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
