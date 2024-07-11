<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Majan Light</title>
  <link rel="icon" href="img/HOMEPAGE/color-logo.png">

  <link rel="stylesheet" href="contactus.css">


  <link href="https://fonts.cdnfonts.com/css/cantabile" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>



<body>
  <section class="header">
    <div class="header-container">
      <img class="header-bg" src="img/HOLIDAY/header.jpg" alt="">

      <a class="logo" href="index.html">
        <img src="img/HOMEPAGE/white-logo.png" alt="">
      </a>

      <nav class="navbar">
        <div class="container">
            <ul class="navbar"> 
              <li><a href="index.html">Home</a></li>
              <li><a href="holidays.html">Holiday(Outbounds)</a></li>
              <li><a href="dmc.html">DMC (Inbound)</a></li>
              <li><a href="whymajan.html">Why Majan Light</a></li>
              <li><a href="contactus.php">Contact us</a></li>
            </ul>
        </div>
      </nav>
    </div>
    <div class="header-text">
      <h2>Contact Us</h2>

    </div>
  </section>

  <section class="form">
    <div class="txt">
      <h1>SEND A MESSAGE</h1>
    </div>
    <div class="wrapper">
      <form action="sendmail.php" method="POST" id="myform"> 
            <div class="input_field"> 
                <input type="text"placeholder="Name" name="name" id="name" required> 
            </div> 
            <div class="input_field"> 
                <input type="text" placeholder="Phone" name="phone" id="phone" required> 
            </div> 
            <div class="input_field"> 
                <input type="text" placeholder="Email" name="email" id="email" required> 
            </div> 
            <div class="input_field"> 
                <textarea placeholder="Type your message here" name="message" id="message" style="height:200px" required> 
                </textarea> 
            </div> 
            <div class="btn"> 
                <button type="submit" name="submitContact">Send Mail</button>
            </div> 
        </form> 
      </div>
  </section>


  <section class="footer">
    <div class="footer-container">

      <img class="footer-bg" src="img/HOMEPAGE/Innerpage.jpg" alt="">
      <div class="footer-img-sec">
        <img class="color-logo" src="img/HOMEPAGE/color-logo.png" alt="">
        <img class="gradient-txt" src="img/HOMEPAGE/foooter-text.png" alt="">
      </div>  
      <div class="footer-link-sec">
        <div class="footer-link">
          <div class="footer-row">
            <div class="footer-col">
              <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">DMC (Inbound)</a></li>
                <li><a href="#">Group of Companies</a></li>
                <li><a href="#">Why Majan Light</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <ul class="links">
                <li><a href="#">DMC (Inbound)</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Groups</a></li>
                <li><a href="#">MICE</a></li>
                <li><a href="#">Excursions/Packages</a></li>
                <li><a href="#">Hotels</a></li>  
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-icons">
          <h4>FOLLOW US</h4>
          <a href=""><img src="img/HOMEPAGE/x.svg" alt=""></a>
          <a href=""><img src="img/HOMEPAGE/linkedin.svg" alt=""></a>
          <a href=""><img class="f" src="img/HOMEPAGE/facebook.svg" alt=""></a>
          <a href=""><img src="img/HOMEPAGE/insta.svg" alt=""></a>
        </div>
      </div>
        
    </div>
    
  </section>
</body>
</html>


