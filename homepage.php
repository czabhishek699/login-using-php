<?php
session_start();
include("connect.php");

?>

<!-- homepage.php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

     
      <!DOCTYPE html>
      <html lang="en"><head>
      
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      
              
              <link rel="icon" href="czabhishekk.png" type="image/png">
              <!--Logo for browser -->
              <meta property="og:image" content="czabhishekk.png">
      <meta property="og:image:width" content="512">
      <meta property="og:image:height" content="512">
      <meta property="og:image:type" content="image/png">
            <!--End logo-->  
             
              <meta charset="UTF-8">
              <meta name="google-adsense-account" content="ca-pub-9189548165209416">
              <meta name="description" content="Personal portfolio website of Abhishek Ojha, a Class 12 student passionate about web development. Explore his skills, work, and get in touch.">
             
      
              <link rel="stylesheet" href="website/styles.css">
              <meta name="keywords" content="HTML, CSS, JavaScript, CZ OJHA, Avishek Ojha, ojha, avishek, Abhishek Ojha, Abhi Shek, CZ ABHISHEK, AVISHEK OJHA">
      
              <!-- =====BOX ICONS===== -->
             
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="robots" content="index, follow">
          <meta name="author" content="Abhishek Ojha">
          <meta name="theme-color" content="#ffffff">
      
              <title>CZ ABHISHEK</title>
          </head>
          <body>
                   
                  
                  <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/6515360910c0b257248663b3/1hbddm6mq';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->
              <!--===== HEADER =====-->
              <header class="l-header">
                  <nav class="nav bd-grid">
                      <div>
                        <a href="#" class="nav__logo"> <p>HI!,<?php 
                            if(isset($_SESSION['email'])){
                             $email=$_SESSION['email'];
                             $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                             while($row=mysqli_fetch_array($query)){
                                 echo $row['firstName'].' '.$row['lastName'];
                             }
                            }
                            ?>
                            :)</p> </a>
                      </div>
      
                      <div class="nav__menu" id="nav-menu">
                          <ul class="nav__list">
                              <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                              <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                              <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                              <li class="nav__item"><a href="#images" class="nav__link">Images</a></li>
                              <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                              <li class="nav__item"><a href="https://avishekojha.com.np/privacy%20policy/" target="_blank" class="nav__link">Privacy Policy</a></li>
                              <li class="nav__item"><a href="logout.php">Logout</a></li>
                          </ul>
                      </div>
               <div class="nav__toggle" id="nav-toggle">
                          <i class="bx bx-menu-alt-right"></i>
                      </div>
                  </nav>
              </header>
      
              <main class="l-main">
                  <!--===== HOME =====-->
                  <section class="home bd-grid" id="home">
                      <div class="home__data">
                          <h1 class="home__title"><br><br><br>Hi,<br>I'am <span class="home__title-color">Abhishek</span><br> Class 12 Student</h1>
      
                          <a href="#contact" class="button">Contact</a>
                      </div>
      
                      <div class="social">
                          <a href="https://www.facebook.com/rbabhishek10" target="_blank" class="home__social-icon"><i class="bx bxl-facebook"></i> </a>
                          <a href="https://www.instagram.com/user.avishek/" target="_blank" class="home__social-icon"> <i class='bx bxl-instagram'></i> </a>
                         
                      </div>
      
                      <div class="home__img">
                          <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <mask id="mask0" mask-type="alpha">
                                  <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                              </mask>
                              <g mask="url(#mask0)">
                                  <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                                  <image class="home__blob-img" x="50" y="60" href="website/ojha.png"/>
                              </g>
                          </svg>
                      </div>
                  </section>
      
                  <!--===== ABOUT =====-->
                  <section class="about section " id="about">
                      <h2 class="section-title">About</h2>
      
                      <div class="about__container bd-grid">
                          <div class="about__img">
                              <img src="website/profile.jpg" alt>
                          </div>
                          
                          <div>
                              <h2 class="about__subtitle">I'am Abhishek</h2>
                              <p class="about__text">I'm currently studying at <strong>GLOBAL EDUCATIONAL ACADEMY</strong> in Damak-06,Jhapa Nepal.</p>           
                          </div>                                   
                      </div>
                  </section>
      
                      <!--===== SKILLS =====-->
                  <section class="skills section" id="skills">
                      <h2 class="section-title">Skills</h2>
      
                      <div class="skills__container bd-grid">          
                          <div>
                              <h2 class="skills__subtitle">Professional Skills</h2>
                              <p class="skills__text">🗿</p>
                              <div class="skills__data">
                                  <div class="skills__names">
                                      <i class="bx bxl-hml5 skills__icon"></i>
                                      <span class="skills__name">HTML5</span>
                                  </div>
                                  <div class="skills__bar skills__html">
      
                                  </div>
                                  <div>
                                      <span class="skills__percentage">95%</span>
                                  </div>
                              </div>
                              <div class="skills__data">
                                  <div class="skills__names">
                                      <i class="bx bxl-cs3 skills__icon"></i>
                                      <span class="skills__name">CSS3</span>
                                  </div>
                                  <div class="skills__bar skills__css">
                                      
                                  </div>
                                  <div>
                                      <span class="skills__percentage">85%</span>
                                  </div>
                              </div>
                              <div class="skills__data">
                                  <div class="skills__names">
                                      <i class="bx bxl-jaascript skills__icon"></i>
                                      <span class="skills__name">JAVASCRIPT</span>
                                  </div>
                                  <div class="skills__bar skills__js">
                                      
                                  </div>
                                  <div>
                                      <span class="skills__percentage">65%</span>
                                  </div>
                              </div>
                              <div class="skills__data">
                                  <div class="skills__names">
                                      <i class="bx bxs-paaint skills__icon"></i>
                                      <span class="skills__name">UX/UI</span>
                                  </div>
                                  <div class="skills__bar skills__ux">
                                      
                                  </div>
                                  <div>
                                      <span class="skills__percentage">85%</span>
                                  </div>
                              </div>
                          </div>
                          
         
                       <div>              
                              <img src="website/images/avi1.jpg" alt="Image Loading Error" class="skills__img">
                          </div>
                      </div>
                  </section>
      
                  <!--===== WORK =====-->
                  <section class="work section" id="images">
                      <h2 class="section-title">Images</h2>
      
                      <div class="work__container bd-grid">
                          <a href class="work__img">
                              <img src="website/images/avi1.jpg" alt="image loading error">
                          </a>
                          <a href class="work__img">
                              <img src="website/images/avi2.jpg" alt="Image loading error">
                          </a>
                          <a href class="work__img">
                              <img src="website/images/avi3.jpg" alt="image loading error">
                          </a>
                          <a href class="work__img">
                              <img src="website/images/avi4.jpg" alt="Error detected contact via contact session">
                          </a>
                          <a href class="work__img">
                              <img src="website/images/avi5.jpg" alt="Image loading error">
                          </a>
                          <a href class="work__img">
                              <img src="website/images/avi6.jpg" alt="ERROR">
                          </a>
                      </div>
                  </section>
      <div id="contact">
                <h2 class="section-title">Contact</h2>
                  <!--===== CONTACT =====-->
                   <div class="visme_d" data-title="Untitled Project" data-url="g7qym6wx-untitled-project" data-domain="forms" data-full-page="false" data-min-height="500px" data-form-id="63996"></div><script src="https://static-bundles.visme.co/forms/vismeforms-embed.js"></script>
      </div>
              </main>
      
      </body>
              <!--===== FOOTER =====-->
              <footer class="footer">
                  <p class="footer__title">Abhishek</p>
             
                  <div class="footer__social">
                          <a href="#" class="footer__icon">
         
                          </a>
                      <a href="https://facebook.com/rbabhishek10" class="footer__icon"><i class="bx bxl-facebook"></i></a>
                      <a href="https://www.instagram.com/user.avishek" class="footer__icon"><i class="bx bxl-instagram"></i></a>
                  </div>
              </footer>
      
      
              <!--===== SCROLL REVEAL =====-->
              <script src="https://unpkg.com/scrollreveal"></script>
      
              <!--===== MAIN JS =====-->
              <script src="website/main.js"></script>
          
      
      </body>
      
      </html>
                          
      


      
     
    </div>
</body>
</html>