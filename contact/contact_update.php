
<?php
include_once '../database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE contact set id='" . $_POST['userid'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', mobile ='" . $_POST['mobile'] . "' , freetime='" . $_POST['freetime'] . "', problem='" . $_POST['problem'] . "' WHERE id='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM contact WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>EduWeb - The Best Program to Enroll for Exchange</title>
  <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
  <meta name="description" content="This is an education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./../favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./../assets/css/style.css">
  <link rel="stylesheet" href="./../assets/css/contact.css">

  <style>
    input{
        margin-right: 10px;
    }
  </style>
  
  <!-- 
    - google font link
  -->
  
  
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="./../assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./../assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="../index.html" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="course.html" class="navbar-link" data-nav-link>Courses</a>
          </li>

          <li class="navbar-item">
            <a href="quiz_page.html" class="navbar-link" data-nav-link>Quiz</a>
          </li>
          
          <li class="navbar-item">
            <a href="stor.html" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="navbar-item">
            <a href="notice/notice.php" class="navbar-link" data-nav-link>Notice</a>
          </li>

          <li class="navbar-item">
            <a href="about.html" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="contact.html" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <a href="tool.html" class="btn has-before">
          <span class="span">Game / Other Tools</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>






  <main>
    <article>
      

    <div class="subcontainer bg">
     
        <form action="" method="post">
          <a href="admin_contact.php">admin</a>
            <h1>Contact Us </h1>

            <div><?php if(isset($message)) { echo $message; } ?></div>

            <input type="hidden" name="userid" class="txtField" value="<?php echo $row['id']; ?>">

<input type="" name="userid"  value="<?php echo $row['id']; ?>" readonly>


<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">


<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">


<input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>">


<input type="text" name="freetime" class="txtField" value="<?php echo $row['freetime']; ?>">

<input type="text" name="problem" value="<?php echo $row['problem']; ?>">

            
            
            <input type="submit" value="Send" id="button">
        </form>
    </div>

   


     
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./../assets/images/logo-light.svg" width="162" height="50" alt="EduWeb logo">
          </a>

          <p class="footer-brand-text">
            Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">70-80 Upper St Norwich NR2</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+011234567890" class="footer-link">+01 123 4567 890</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@eduweb.com" class="footer-link">info@eduweb.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Courses</a>
          </li>

          <li>
            <a href="#" class="footer-link">Instructor</a>
          </li>

          <li>
            <a href="#" class="footer-link">Events</a>
          </li>

          <li>
            <a href="#" class="footer-link">Instructor Profile</a>
          </li>

          <li>
            <a href="#" class="footer-link">Purchase Guide</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2022 All Rights Reserved by <a href="#" class="copyright-link">codewithsadee</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./../assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>