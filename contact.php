<?php session_start() ?>
<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="./logo_banner/logo-png (1).png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <title> Shrushthi Abhilasha- chandkhed maval pune, Mulshi Pune, The Statement | Flats In Pune</title>
  <meta name="description" content="Discover  Shrushthi Abhilasha' exquisite residential offerings in Pune, including chandkhed maval pune, Mulshi Pune, and The Statement. 2, 3, 4 BHK Flats In Pune.">
  <meta property="og:title" content="Shrushthi Abhilasha -  chandkhed maval pune, Mulshi Pune, The Statement | Flats In Pune">
  <meta property="og:description" content="Discover Shrushthi Abhilasha' exquisite residential offerings in Pune, including chandkhed maval pune, Mulshi Pune, and The Statement. 2, 3, 4 BHK Flats In Pune.">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

  <link rel="stylesheet" href="css/tiny-slider.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css" />

  <title>
    Contact
  </title>
</head>

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="index.html" class="logo m-0 float-start"><img src="./logo_banner/Logo_updated.png"
              alt="Shrushthi_Abhilasha" style="height: 150px; width: 150px;"></a>

          <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="active"><a href="./Properties.html" id="Properties">Properties</a></li>
            <li class="has-children">
              <a href="properties.html">Projects</a>
              <ul class="dropdown">
                <li><a href="./Sai_Hights.html">Sai Heights</a></li>
                <li><a href="./Sai_Blessings.html">Sai Blessings</a></li>
                <!-- <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                      <li><a href="#">Sub Menu One</a></li>
                      <li><a href="#">Sub Menu Two</a></li>
                      <li><a href="#">Sub Menu Three</a></li>
                    </ul>
                  </li> -->
              </ul>
            </li>
            <!-- <li><a href="#">Services</a></li> -->
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="Careerss.php">Careers</a></li>
          </ul>

          <a href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center mt-5">
          <h1 class="heading" data-aos="fade-up">Contact Us</h1>

          <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
            <ol class="breadcrumb text-center justify-content-center">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active text-white-50" aria-current="page">
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <?php if(isset($_SESSION['message'])){ ?>
    <div class="alert alert-primary" role="alert" style="height: 30px; width: 200px; display: flex; align-items: center; justify-content: center;">
       <?php echo $_SESSION['message']; ?>
    </div>
<?php unset($_SESSION['message']);}?>

  

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info">
            <div class="address mt-2">
              <i class="icon-room"></i>
              <h4 class="mb-2">Location:</h4>
              <p>
                Shrushthi_Abhilasha <br> Shop No. 1 & 2.
                Akshdeep Complex,<br>
                Sr.No 45 1/1 Buchade Wasti,<br>
                Marunji, Pune 411 057
              </p>
            </div>

            <div class="open-hours mt-4">
              <i class="icon-clock-o"></i>
              <h4 class="mb-2">Open Hours:</h4>
              <p>
                Monday-Saturday:<br />
                10:00 AM - 6:00 PM
              </p>
            </div>

            <div class="email mt-4">
              <i class="icon-envelope"></i>
              <h4 class="mb-2">Email:</h4>
              <a class="dropdown-item" href="mailto:info@shrushtiabhilasha.com"
                style="margin-left: 30px;">info@shrushtiabhilasha.com</a>
            </div>

            <div class="phone mt-4">
              <i class="icon-phone"></i>
              <h4 class="mb-2">Call:</h4>
              <p><a href="tel:9766042363">9766042363 </a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <form action="#" method="post">
            <div class="row">
              <div class="col-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name *" required/>
              </div>
              <div class="col-6 mb-3">
                <input type="email"   name="email" class="form-control" placeholder="Your Email *" required />
              </div>
              <div class="col-12 mb-3">
                <input type="text"  name="subject" class="form-control" placeholder="Subject" />
              </div>
              <div class="col-6 mb-3">
                <input type="text"  name="mobile" class="form-control" placeholder="Mobile Number *" required/>
              </div>
              <div class="col-6 mb-3">
                <input type="text"  name="budget" class="form-control" placeholder="Budget" />
              </div>
              <div class="col-12 mb-3">
                <textarea  name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>

              <div class="col-12">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.untree_co-section -->

  <!-- Footer section start -->
  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>Shrushthi_Abhilasha <br> Shop No. 1 & 2.
              Akshdeep Complex,<br>
              Sr.No 45 1/1 Buchade Wasti,<br>
              Marunji, Pune 411 057</address>
            <ul class="list-unstyled links">
              <li><a href="tel:9766042363">9766042363 </a></li>
              <li>
                <a class="dropdown-item" href="mailto:info@shrushtiabhilasha.com">info@shrushtiabhilasha.com</a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Sources</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="./about.html">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Mission</a></li>
              <!-- <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li> -->
            </ul>
            <!-- <ul class="list-unstyled float-start links col-lg-4">
              <li><a href="#">Partners</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Creative</a></li>
            </ul> -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Our Vision</a></li>
              <li><a href="./about.html">About us</a></li>
              <li><a href="./contact.html">Contact us</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li>
                <a href="https://www.instagram.com/shrushtiabhilasha_infra/"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="https://wa.me/+919766042363"><span class="icon-whatsapp"></span></a>
              </li>

              <li>
                <a href="https://www.facebook.com/profile.php?id=61553086021653"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/shrushti-abhilasha-developers/mycompany/?viewAsMember=true"><span
                    class="icon-linkedin"></span></a>
              </li>
              <!-- <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li> -->
              <!-- <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li> -->
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            . All Rights Reserved. &mdash; Designed with Kricode Softwares
            <!-- <a href="https://untree.co">Untree.co</a> -->
            <!-- License information: https://untree.co/license/ -->
          </p>
          <!-- <div>
              Distributed by
              <a href="https://themewagon.com/" target="_blank">themewagon</a>
            </div> -->
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer -->
  <!-- Footer section end -->
  <!-- /.site-footer -->

  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>

<?php 
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mobile = $_POST['mobile'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];

    $to = "info@shrushtiabhilasha.com";
    $emailSubject = "Shrushi-Abhilash : Welcome Message";

    $message = "
    <html>
    <head>
    <style>
      table{
        border-collapse: collapse;
      }
      td,th{
        padding:10px;
      }
    </style>
    <title>Welcome Message </title>
    </head>
    <body>
    <p>Client Details : </p>
    <table border='2px'>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Mobile</th>
    <th>Budget</th>
    <th>Message</th>
    
    </tr>
    <tr>
    <td>".$name."</td>
    <td>".$email."</td>
    <td>".$subject."</td>
    <td>".$mobile."</td>
    <td>".$budget."</td>
    <td>".$message."</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    //echo $message;
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <info@shrushtiabhilasha.com>' . "\r\n";

    $sent = mail($to,$emailSubject,$message,$headers);
    if($sent){
      $_SESSION['message'] = "Thanks for Contacting Us. We will get back to you very soon";
      echo "<script>location.href='contact.php';</script>";
    }

  }
?>