<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Group of Education</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>
    <header class="header" id="header">
      <div onclick="window.location.href='index.html'" style="cursor:pointer;">
        <img src="WhiteLogo.png" alt="">
        </div>
        <h2>National Group of Education</h2>
        <div class="menu-btn" onclick="toggleMenu()">
          <i class="ri-menu-line"></i>
        </div>
        <nav class="navbar" id="navbar">
        <a href="index.php">Home</a>
                <a href="about-us.php">About</a>
                <a href="services.php">Our Services</a>
                <a href="gallery.php">Gallery</a>
                <a href="contact-us.php">Contact Us</a>
             </nav>
             <button class="animated-button" onclick="openPopup()">
            
              <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                ></path>
              </svg>
              <span class="text">Apply Now</span>
              <span class="circle"></span>
              <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                ></path>
              </svg>
            </a>
            </button>
            
    </header>
 
     <section id="services">
      <div class="head-services">
        <h1>Our Services</h1>
    </div>

  <!-- First Div -->
    <div class="service1">
     <div class="left-wale">
      <div class="service-box-left">
        <img src="https://icons8.com/icon/109679/graduation-cap" alt="">
        <h1>Educational Guidance</h1>
        <p>Our seasoned advisors offer tailored support to students, simplifying the complexities of the education system. From choosing the right courses to mapping out career paths, we provide comprehensive assistance aligned with your unique goals.
        </p>
      </div>
      <div class="service-box-left">
        <h1>Admissions Support</h1>
        <p>Whether you're eyeing prestigious Indian universities or global opportunities, we streamline the entire admission process. From paperwork to exam prep, we ensure a seamless journey into your desired institution.
        </p>
      </div>
      <div class="service-box-left">
        <h1>Global Study Opportunities</h1>
        <p>Explore the world of international education with confidence. We guide you through selecting universities, understanding visa norms, and adapting to new academic settings, turning your study abroad dreams into reality.</p>
      </div>
    </div>

    <div class="right-wale">
      <div class="service-box-right">
        <h1>Course Selection Made Easy:</h1>
        <p>With countless courses available, choosing the perfect one can be daunting. Our experts analyze your interests and career aspirations to suggest courses that align with your future success.</p>
      </div>
      <div class="service-box-right">
        <h1>Financial Aid Made Accessible</h1>
        <p>Don't let financial concerns hinder your educational ambitions. We help you discover scholarships and navigate financial aid options, ensuring that financial constraints don't stand in the way of your education.</p>
      </div>
      <div class="service-box-right">
        <h1>Career Guidance and Placement Services</h1>
        <p>Prepare for a fulfilling career with our comprehensive counseling and placement support. Our advisors offer insights into industry trends, assist with resume crafting, and provide interview preparation, empowering you to embark on a successful professional journey.</p>
      </div>
    </div>
    </div>
</section>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Contact Us</h2>
            <form id="contact-form" action="process.php" method="post">
              <label for="fullName">Full Name</label>
              <input type="text" id="fullName" name="fullName" required>
      
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required>
      
              <label for="phoneNumber">Contact Number</label>
              <input type="tel" id="phoneNumber" name="phoneNumber" required>
      
              <label for="courses">Select Courses</label>
              <select id="courses" name="courses" required>
                  <option value="">Select</option>
                  <option value="Engineering in India">Engineering in India</option>
                  <option value="Medical in India">Medical in India</option>
                  <option value="Management in India">Management in India</option>
                  <option value="MBBS Abroad">MBBS Abroad</option>
              </select>
      
              <button class="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
      
      <!-- Contact- footer ...................... -->
      <!-- 7th page..................  -->
      <div class="heading">
        <h1>Get In Touch With Us!</h1>
      </div>
        <div id="contact">
          <div class="logo-wagera">
            <h1>NATIONAL GROUP OF EDUCATION</h1>
            <p>We're dedicated to showing our students the way to a brighter future, <br> guiding them every step of the journey.</p>
          
           <ul class="example-2">
              <li class="icon-content">
                <a
                  href="https://linkedin.com/"
                  aria-label="LinkedIn"
                  data-social="linkedin"
                >
                  <div class="filled"></div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-linkedin"
                    viewBox="0 0 16 16"
                    xml:space="preserve"
                  >
                    <path
                      d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                      fill="currentColor"
                    ></path>
                  </svg>
                </a>
                <div class="tooltip">LinkedIn</div>
              </li>
              <li class="icon-content">
                <a href="https://www.facebook.com/" aria-label="Facebook" data-social="facebook">
                  <div class="filled"></div>
                  <svg xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" 
                   width="50"
                  height="50" 
                  fill="currentColor"
                  viewBox="0 0 50 50"  
                  class="icon icons8-Facebook-Filled" >    
                  <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z">
                  </path>
                </svg>
                </a>
                <div class="tooltip">Facebook</div>
              </li>
              <li class="icon-content">
                <a
                  href="https://www.instagram.com/"
                  aria-label="Instagram"
                  data-social="instagram"
                >
                  <div class="filled"></div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-instagram"
                    viewBox="0 0 16 16"
                    xml:space="preserve"
                  >
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                      fill="currentColor"
                    ></path>
                  </svg>
                </a>
                <div class="tooltip">Instagram</div>
              </li>
              <li class="icon-content">
                <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube">
                  <div class="filled"></div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-youtube"
                    viewBox="0 0 16 16"
                    xml:space="preserve"
                  >
                    <path
                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                      fill="currentColor"
                    ></path>
                  </svg>
                </a>
                <div class="tooltip">Youtube</div>
              </li>
            </ul>
            
          </div>
          <div class="quick-links">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="contact-us">
            <h2>Contact Us</h2>
            <ul>
              <li><i class="ri-smartphone-line"></i>987654321</li>
              <li><i class="ri-mail-line"></i>hltech@gmail.com</li>
              <li><i class="ri-building-line"></i>address Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
          <div class="subscribe-here">
            <h2>Subscribe Now!</h2>
            <p>Don't miss any updates, subscribe now!</p>
        <div class="subscribe">
          <p>SUBSCRIBE</p>
          <input placeholder="Your e-mail" class="subscribe-input" name="email" type="email">
          <br>
          <div class="submit-btn">SUBMIT</div>
        </div>
      </div>
        </div>

        <a  class="whats-app" href="https://wa.me/+919430552744?text=Hello" target="_blank">
          <i class="ri-whatsapp-line"></i>
      </a>
      
      <!-- Footer only...................  -->
      <div class="pg-footer">
        <footer class="footer">
         <div class="footer-copyright">
            <div class="footer-copyright-wrapper">
              <p class="footer-copyright-text">
                <a class="footer-copyright-link" href="https://hltechindia.com/web-development.html" target="_self"> ©2024. | Designed By: HL Tech India Pvt Ltd. | All rights reserved. </a>
              </p>
            </div>
          </div>
        </footer>
      </div>
      
      <script src="script.js"></script>
      </body>
      </html>
      