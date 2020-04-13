<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';

  if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'aj.jerath.site@gmail.com';
    $mail->Password = 'Reddragon12';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email, $name);
    $mail->addAddress('A.J.Jerath@outlook.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "From: " . $email . "<br><br>". $message;


    $mail->send();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AJ's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <header id="top">
      <nav>
        <div class="wrapper">
          <span class="logo"><a class="scroll active-anchor" href="#top"><img src="images/logo.svg" alt="Logo"></a></span>
          <span class="burger-nav"><i class="fas fa-bars"></i></span>
          <ul>
            <li class="active"><a class="scroll active-anchor" href="#top">Home</a></li>
            <li><a class="scroll" href="#about-me">About</a></li>
            <li><a class="scroll" href="#my-skills">Skills</a></li>
            <li><a class="scroll" href="#my-projects">Projects</a></li>
            <li><a class="scroll" href="#contact-me">Contact</a></li>
          </ul>
        </div>
      </nav>
      <div id="hero-img"></div>
      <div class="hero-text-container">
        <div class="hero-logo"><img src="images/logo.svg" alt="Logo"></div>
        <div class="text-content">
          <h1>Hi, im <span class="green">A.J.</span><br> A Front End <br class="hero-mobile-break">Developer</h1>
          <p>Html / Css / Javascript / Php / Mysql</p>
          <span class="contact-me"><a class="scroll" href="#contact-me">Contact Me</a></span>
        </div>
      </div>
    </header>
    <main>
      <section id="about-me">
          <div class="wrapper">
            <div id="about-me-grid">
                <h2><span class="green">About</span><br/> Me</h2>
                <hr>
                <div class="about-me-text">
                  <div>Hi im A.J. a frontend developer who loves to make fully responsive user interfaces and web applications using HTML, CSS, JavaScript, PHP and other technologies.</div>
                  <div class="about-me-text-separator">I am very passionate about web development and technology and always strive to make myself better in my craft, as well as like to learn new things.</div>
                  <div class="about-me-text-separator">I also enjoy building custom computers, modding hardware, troubleshooting devices and configuring household networks.</div>
                  <div>When i'm not coding or trying to learn a new language or framework, I enjoy watching movies, playing video games, playing on my guitar, going to the gym and spending time with my family and friends.</div>
                  <div class="signitaure"><img src="images/signitaure.svg" alt="Signitaure"></div>
              </div>
              <div class="about-me-image"></div>
            </div> <!-- End Grid Div -->
            <div class="about-me-social-icons">
              <a title="Linkedin" href="https://www.linkedin.com/in/ajjerath" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
              <a title ="Github" href="https://github.com/AJ-1988" target="_blank"><i class="fab fa-github fa-3x"></i></a>
              <a title ="Codepen" href="https://codepen.io/AJ_Jerath" target="_blank"><i class="fab fa-codepen fa-3x"></i></a>
            </div> <!-- Social Media Icons -->
          </div> <!-- End About Me Wrapper -->
          <div id="particles-js"></div>
      </section>
      <section id="my-skills">
        <div class="wrapper">
          <div id="my-skills-grid">
            <div class="my-skills-chart">
              <div>
                <h3>Html & Css</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="65%"></div>
                </div>
              </div>
              <div>
                <h3>Javascript</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="50%"></div>
                </div>
              </div>
              <div>
                <h3>Jquery</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="40%"></div>
                </div>
              </div>
              <div>
                <h3>Php</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="35%"></div>
                </div>
              </div>
              <div>
                <h3>Mysql</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="25%"></div>
                </div>
              </div>
              <div>
                <h3>Photoshop</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="40%"></div>
                </div>
              </div>
              <div>
                <h3>Illustrator</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="40%"></div>
                </div>
              </div>
              <div>
                <h3>Xd</h3>
                <div class="bar-graph">
                  <div class="bar-graph-inner" data-percent="50%"></div>
                </div>
              </div>
            </div>
            <div class="my-skills-image"></div>
              <h2>My<br/><span class="green">Skills</span></h2>
              <hr>
          </div> <!-- End Grid Div -->
        </div> <!-- End My Skills Wrapper -->
      </section>
      <section id="my-projects">
        <h2>My <span class="green">Projects</span></h2>
        <hr>
          <ul class="my-projects-grid">
           <li class="modal-expand">
             <img src="project-images/jj-auto-body.JPG" alt="JJ Auto Body Shop Thumb"><img class="full-image" src="project-images/jj-auto-body-full-image.png" alt="JJ Full Auto Body Concept"><a href="http://aj-jerath.com/projects/auto-body-concept/"></a>
             <div class="my-projects-description">
               <p>JJ Auto Body Concept</p>
               <span><i class="fab fa-html5"></i> <i class="tech-padding fab fa-css3-alt"></i> <i class="fab fa-js"></i></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/vuejs-api.JPG" alt="Restfull Api Thumb"><img class="full-image" src="project-images/vuejs-api.JPG" alt="restfull Api"><a href="http://aj-jerath.com/projects/vue/"></a>
             <div class="my-projects-description">
               <p>Restful Api</p>
               <span><i class="fab fa-html5"></i> <i class="tech-padding fab fa-vuejs"></i> <i class="fab fa-php"></i></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/temp-converter-pen.JPG" alt="Temp Converter Thumb"><img class="full-image" src="project-images/temp-converter-pen.JPG" alt="Temperature Converter"><a href="https://codepen.io/AJ_Jerath/pen/mpgogV"></a>
             <div class="my-projects-description">
               <p>Temperature Converter</p>
               <span><i class="fab fa-html5"></i> <i class="tech-padding fab fa-css3-alt"></i> <i class="fab fa-js"></i></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/digital-clock-pen.JPG" alt="Digital Clock Thumb"><img class="full-image" src="project-images/digital-clock-pen.JPG" alt="Digital Clock"><a href="https://codepen.io/AJ_Jerath/pen/dJLadm"></a>
             <div class="my-projects-description">
               <p>Digital Clock</p>
               <span><i class="fab fa-html5"></i> <i class="tech-padding fab fa-css3-alt"></i> <i class="fab fa-js"></i></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/apptwo.JPG" alt="Comming Soon Thumb"><img class="full-image" src="project-images/apptwo.JPG" alt="Api"><a href="http://aj-jerath.com/projects/apptwo/"></a>
             <div class="my-projects-description">
               <p>Api</p>
               <span><i class="fab fa-html5"></i> <i class="tech-padding fab fa-vuejs"></i> <i class="fab fa-php"></i></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/comming-soon.jpg" alt="Comming Soon Thumb"><img class="full-image" src="project-images/coming-soon-full-image.jpg" alt="Cooming Soon Place Holder"><a href="coming soon"></a>
             <div class="my-projects-description">
               <p>Comming Soon</p>
               <span></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/comming-soon.jpg" alt="Comming Soon Thumb"><img class="full-image" src="project-images/coming-soon-full-image.jpg" alt="Cooming Soon Place Holder"><a href="coming soon"></a>
             <div class="my-projects-description">
               <p>Comming Soon</p>
               <span></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/comming-soon.jpg" alt="Comming Soon Thumb"><img class="full-image" src="project-images/coming-soon-full-image.jpg" alt="Cooming Soon Place Holder"><a href="coming soon"></a>
             <div class="my-projects-description">
               <p>Comming Soon</p>
               <span></span>
             </div>
           </li>
           <li class="modal-expand">
             <img src="project-images/comming-soon.jpg" alt="Comming Soon Thumb"><img class="full-image" src="project-images/coming-soon-full-image.jpg" alt="Cooming Soon Place Holder"><a href="coming soon"></a>
             <div class="my-projects-description">
               <p>Comming Soon</p>
               <span></span>
             </div>
           </li>
         </ul> <!-- End Grid Ul -->
         <div id="modal">
          <div id="modal-close">X</div>
          <div id="modal-content"></div>
          <div id="modal-link"></div>
         </div> <!-- End Modal Container -->
      </section>
      <section id="contact-me">
        <h2><span class="green">Contact</span> Me</h2>
        <hr>
        <div class="contact-container">
          <form  action="" method="post">
            <input class="name" type="text" name="name" placeholder="Name">
            <input class="e-mail" type="text" name="email" placeholder="E-Mail">
            <br/>
            <input class="subject" type="text" name="subject" placeholder="Subject">
            <textarea name="message" rows="20" cols="80" placeholder="Message"></textarea>
            <br/>
            <button class="send" type="submit" name="submit">Send</button>
          </form>
        </div>
        <div class="contact-me-img"></div>
        <div id="map"></div>
      </section>
    </main>
    <footer>
      <div class="footer-flexbox">
          <ul class="footer-contact-me">
            <li><span class="green">Contact Me:</span></li>
            <li><i class="fas fa-mobile-alt"></i>(702)-703-4352</li>
            <li><i class="fas fa-envelope"></i>A.J.Jerath@outlook.com</li>
          </ul>
          <div class="footer-follow-me">
            <span class="green">Follow Me:</span>
            <a title="Linkedin" href="https://www.linkedin.com/in/ajjerath" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
            <a title ="Github" href="https://github.com/AJ-1988" target="_blank"><i class="fab fa-github fa-3x"></i></a>
            <a title ="Codepen" href="https://codepen.io/AJ_Jerath" target="_blank"><i class="fab fa-codepen fa-3x"></i></a>
          </div>
          <ul class="footer-location">
            <li><span class="green">Location:</span></li>
            <li>Las Vegas, NV</li>
          </ul>
        </div>
        <p>&copy; 2018 A.J. Jerath</p>
    </footer>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1A5gAu1EdQcgIfD5bzEWkIjqDiCNcQKs&callback=initMap"async defer></script>
  <script src="particles.js"></script>
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>
