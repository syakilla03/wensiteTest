<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


if(isset($_POST['send'])){
    $name = htmlentities($_POST['Name']);
    $email = htmlentities($_POST['Email']);
    $phone = htmlentities($_POST['Phone']);
    $message = htmlentities($_POST['Message']);
	$subject="The Inquire Message";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'syakillaasyiqin@gmail.com';
    $mail->Password = 'qbsmhasggpsworch ';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
	$mail->addReplyTo($email, $name);
    $mail->addAddress('syakillaasyiqin@gmail.com');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = '<b><u> TNZ ENGINEERING WEBSITE FORM</u></b><br></br><br></br><br></br><b>From</b>: '.$email.' <br></br><br></br>'.'<b>Client Name: </b>'
	.$name.'<br></br><br></br>'.'<b>Client contact Number:</b> '.$phone.'<br></br><br>Question/Inquire:</b> '.$message.'<br>
	</br><br></br><b>Whatapps now:</b>https://wa.me/6'.$phone.'?text=Halo%20Sir/Miss,%20I%20am%20XXX%20XXX%20from%20TNZ%20Engineering%20Services%20,%20';

   if (!$mail->send()) {
	   ?>
	   <script>
    alert("Sorry,Message could not be sent due to technical problem.");
   </script>
   
   <?php
} else {
	
	?>
	<script>
    alert("Thank you, we will reply as soon as possible.");
	</script>
	
	<?php
}
}
?>



<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TNZ ENGINEERING SERVICES</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
  <style>
    

        .inquiry-container {
			
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 650px;
            padding: 20px;
            text-align: center;
        }

        .inquiry-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .inquiry-container form {
            display: flex;
            flex-direction: column;
        }

        .inquiry-container label {
            font-weight: bold;
        }

        .inquiry-container input,
        .inquiry-container textarea {
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #DA7426;
			width:100%;
            border-radius: 4px;

			
        }

        .inquiry-container button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .inquiry-container button:hover {
            background-color: #0056b3;
        }

     
    </style>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
     <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <a class="navbar-brand " href="index.html" style="font-size:28px;"> <img src="images\CompanyLogo2.png" style="width:100px; height:50px;">TNZ ENGINEERING <span>SERVICES</span>  </a>
          <div class="contact_nav">
           
            <a >
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                603-8922 1151
              </span>
            </a>
            <a >
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                sales@tnz.com.my
              </span>
            </a>
			<a href="">
              <i class="fa fa-chrome" aria-hidden="true"></i>
              <span>
                 tnz.com.my
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/tnzengineeringservices/">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/explore/locations/752944271532510/tnz-engineering-services-sdn-bhd/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand navbar_brand_mobile" href="index.html"> <img src="images\CompanyLogo2.png" style="width:80px; height:40px;">TNZ ENGINEERING<span> SERVICES</span> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portfolio.html">Gallery</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
               
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  
<body>
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Contact <span>Us</span></h2>
      </div>
      <div class="row" >
        <div class="col-md-6 px-0">
          
            <table class="styled-table" >
			<tr align="center" style="background-color:white;">
			<th style="background-color:#1AA260; color:white;  border-bottom:2pt solid white;"> Company Name</th>
			<th style="border-bottom:2pt solid #8FBC8F; text-align:left;" >TNZ Engineering Services Sdn.Bhd</th>
			</tr>
			<tr align="center" style="background-color:white;">
			<th style="background-color:#1AA260; color:white;  border-bottom:2pt solid white;">Address</th>
			<th style="text-align:left; line-height:1; border-bottom:2pt solid #8FBC8F; ">No.4, Jalan ST/1,<br></br> Taman Industri Sungai <br></br>Tangkas, 43000 Kajang, <br></br>Selangor Darul Ehsan,<br></br>Malaysia.
			</tr>
			<tr style="background-color:#1AA260; color:white;" align="center">
			</tr>
			<tr align="center"style="background-color:white;" >
			<th style="background-color:#1AA260; color:white;  border-bottom:2pt solid white;">Phone Number </th>
			<th style=" text-align:left;">603-89221151</th>
			</tr>
			<tr style="background-color:#1AA260; color:white;  border-bottom:2pt solid white;" align="center">
			</tr>
			<tr align="center" style="background-color:white;">
			<th style="background-color:#1AA260; color:white;  border-bottom:2pt solid white;">Email </th>
			<th style="border-bottom:2pt solid #8FBC8F; text-align:left;border-top:2pt solid #8FBC8F; ">sales@tnz.com.my</th>
			</tr>
			<tr align="center" style="background-color:white;">
			<th style="background-color:#1AA260; color:white;  border-bottom:2pt solid white;">Website </th>
			<th style="text-align:left;">tnz.com.my</th>
			</tr>
			</table>
          
        </div>
        <div class="col-md-6 px-0" >
          <div class="map_container" style="height:370px;" >
            <div class="map" >
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.5460053232173!2d101.78353917497027!3d2.
			 9458428970304027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdc95a83aed0f3%3A0x9f319731a90759a1!2sTNZ%20Engineering%20Services%20Sdn.%20Bhd.!5e0!3m2!1sen!2smy!4v1695262268686!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy=
			 "no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <section class="contact_section layout_padding" style=" background-color:#003471;" >
  <div class="container" align="center">
    <div class="inquiry-container">
        <h2>Get In Touch</h2>
        <form  method="Post">

            <label for="name">Name</label>
            <input type="text" id="name" name="Name" placeholder="Your Name" required >

            <label for="email">Email</label>
            <input type="email" id="email" name="Email" placeholder="Your Email" required>

            <label for="subject">Contact Number</label>
            <input type="text"  name="Phone" placeholder="Your Phone Number: format(XXXXXXXXXX)" required>

            <label for="message">Message</label>
            <textarea id="message" name="Message" rows="5" placeholder="Your Message" required></textarea>

            <button type="Submit"  name="send">Send</button>
        </form>
    </div>
	</div>
		</section>



<!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding2">
      <div class="container">
        <div class="info_logo">
          <a class="navbar-brand" href="index.html"> TNZ <span>Engineering Services</span> </a>
        </div>
        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul style="margin-top:14px;">
                  <li class=" active">
                    <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.html">About </a>
                  </li>
                  <li class="">
                    <a class="" href="service.html">Services </a>
                  </li>
                  <li class="">
                    <a class="" href="portfolio.html"> Portfolio </a>
                  </li>
                  <li class="">
                    <a class="" href="contact.php"> Contact </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                SERVICE
              </h5>
              <p style="margin-top:14px; ">
               Specialized solutions to ensure the safe and efficient delivery of gases essential
			   for scientific experiments and processes. 
              </p>
            </div>
           
            <div class="col-md-3">
              <h5>
                ADDRESS
              </h5>
              <p style="line-height:1.5; margin-top:14px;">
               No. 4, Jalan ST/1,
Taman Industri Sungai Tangkas, 43000 Kajang, Selangor .
              </p>
            </div>
			 <div class="col-md-3 mx-auto"   >
              <h5 >
               Contact Us
              </h5>
              <div class="info_bottom">
          
           
              <div class="info_contact ">
                <div class="col">
                  <div class="row-md-3" >
                    <a  href ="https://tnz.com.my/TNZ/index.html" class="link-box">
                      <i aria-hidden="true"> <img src="images/website.png" style="height:40px; width:40px;" ></i>
                      <span style="margin-left:15px; color:white;">
                        tnz.com.my

                      </span>
                    </a>
                  </div>
                  <div class="row-md-5">
                    <a class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span style="margin-left:15px;">
                        603-8922 1151

                      </span>
                    </a>
                  </div>
				   <div class="row-md-5">
                    <a href="https://wa.me/+60194627334" class="link-box">
                      <i class="fa fa-whatsapp" aria-hidden="true"></i>
                      <span style="color:white; margin-left:15px;">
                      013-304 2070

                      </span>
                    </a>
                  </div>
                  <div class="row-md-4">
                    <a class="link-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <span style="margin-left:15px;">
                        sales@tnz.com.my
                      </span>
                    </a>
                  </div>
				  <div class="row-md-4">
				   <a href="https://www.google.com/maps/place/TNZ+Engineering+Services+Sdn.+Bhd./@2.9458429,101.7835392,17z/data=
				   !3m1!4b1!4m6!3m5!1s0x31cdc95a83aed0f3:0x9f319731a90759a1!8m2!3d2.9458429!4d101.7861141!16s%2Fg%2F11c1wvsh93?entry=ttu" class="link-box">
                   <i class="ri-map-pin-2-fill"></i>
                      <span style="margin-left:15px; color:white;">
                        Our Centre
                      </span>
                    </a>
                  </div>
                </div>
              </div>
           
            
          </div>
        </div>
          </div>
  
      </div>

	  
	  
	  
	  
	  
	  
	  </div>
    </div>
  </section>
  <!-- end info section -->
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> TNZ ENGINEERING SERVICES SDN.BHD 
        <a href="https://html.design/"></a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>