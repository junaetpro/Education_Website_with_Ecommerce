<?php
include_once '../database.php';
$result = mysqli_query($conn,"SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduweb</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    

    <!-- Custom CSS file -->
    <link rel="stylesheet" href=".././assets/css/style.css">
    
    <style>
        hr{
  border: 2px solid #2a9d8f;
  border-radius: 5px;
}
.margin_top{
    margin-top:150px;
}
.search_btn{
padding: 5px 20px;
}

.search_in{
  margin: 10px;
display: block;
text-align:left;
font-size: 50px;
padding: 15px 5px;
width: 90%;
font-size: 16px;
box-shadow: 1px 1px 2px #262626;
}


    </style>

</head>
<body>

  <header class="header" data-header>
    <div class="container">

      <a href="../index.html" class="logo">
        <img src="../assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="../assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
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
            <a href="../course.html" class="navbar-link" data-nav-link>Courses</a>
          </li>

          <li class="navbar-item">
            <a href="../quiz_page.html" class="navbar-link" data-nav-link>Quiz</a>
          </li>
          
          <li class="navbar-item">
            <a href="../stor.html" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="navbar-item">
            <a href="../notice/notice.php" class="navbar-link" data-nav-link>Notice</a>
          </li>

          <li class="navbar-item">
            <a href="../about.html" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="../contact/contact.html" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <a href="../tool.html" class="btn has-before">
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



  <div  class="container margin_top">
    
    <a href="notice_admin.php">admin</a>
    
        <div class="row justify-content-center">
            <div class="col-md-7">

            

                <div style="box-shadow: 1px 1px 10px 1px #2a9d8f;" class="card mt-1">
                    <div class="card-header text-center">
                        <h4 style="text-transform: capitalize;font-size: 20px;">write product name or similar word</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control search_in">
                                </div>
                                <div class="col-md-4">
                                    <button  type="submit" class="btn btn-success mt-3 search_btn">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","web");

                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];

                                        $query = "select * from blog where title like '%$stud_id%' ORDER BY id DESC LIMIT 2";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">id</label>
                                                    <input type="text" value="<?= $row['id']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">title</label>
                                                    <input type="text" value="<?= $row['title']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">text</label>

                                                    <textarea value="<?= $row['texts']; ?>" class="form-control" name="" id="" cols="30" rows="10"><?= $row['texts']; ?></textarea>

                                                </div>
                                                <hr><hr><br>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="boxx">


    <div class="conteiner">

    <h1 style="font-size:30px; text-align: center;padding-top: 50px;" class="mt-5 mb-3">All Blog</h1>

   


    <?php
if (mysqli_num_rows($result) > 0) {
?>


<div style="width: 80%;margin: auto;">
<table class="table table-hover text-center ">
  <thead class=" table-striped">
    <tr style="background-color:#83c5be">
      <th scope="col">Id</th>
      <th scope="col">Title:</th>
      <th scope="col">Text:</th>
      
    
      
    </tr>
  </thead>

  <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
  <tbody>

  <tr>
	    <td><?php echo $row["id"]; ?></td>

		<td><?php echo $row["title"]; ?></td>

		<td><?php echo $row["texts"]; ?></td>
    

      </tr>
			<?php
			$i++;
			}
			?>


  </tbody>
</table>
</div>
   
<?php
}
else
{
    echo "No result found";
}
?>
</div>

</div>



  <footer class="footer" style="background-image: url('../assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="../assets/images/logo-light.svg" width="162" height="50" alt="EduWeb logo">
          </a>

          <p class="footer-brand-text">
            Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
          </p>

          

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+011234567890" class="footer-link">+8801736-224711</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@eduweb.com" class="footer-link">junaetsany@gmail.com</a>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>

          <li>
            <a href="../index.html" class="footer-link">Home</a>
          </li>

          <li>
            <a href="../course.html" class="footer-link">Courses</a>
          </li>

          <li>
            <a href="../quiz_page.html" class="footer-link">Quiz</a>
          </li>

          <li>
            <a href="../stor.html" class="footer-link">Shop</a>
          </li>
          <li>
            <a href="../about.html" class="footer-link">About</a>
          </li>

          <li>
            <a href="../contact/contact.html" class="footer-link">Contact</a>
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
          Copyright 2023 All Rights Reserved by <a href="#" class="copyright-link">junaetcode</a>
        </p>

      </div>
    </div>

  </footer>







</body>
</html>