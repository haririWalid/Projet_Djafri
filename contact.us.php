<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/theme.min.css" rel="stylesheet" />
</head>

<body>
   

                   
            
  
  
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Form</title>
  <link rel="stylesheet" href="css/Styles.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<style>
/* CSS for the navbar */

.navbar {
  overflow: hidden;
  background-color: #282482;
}

.navbar a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="about us.php">About Us</a>
  <a href="about_model.php">About The Model</a>
  <a href="#contact">Help</a>
  <a href="contact.us.php">Contact</a>
</div>
    
  <!-- contact1 -->
  <div class=" section-gap"></div>
  <div class="wrapper">
    <h3 class="global-title text-center">Contact us</h3>
    <div class="d-grid contact-view">
      <div class="cont-details">


        <div class="cont-top">

          <div class="cont-left text-center">
            <span class="fa fa-phone text-primary"></span>
          </div>

          <div class="cont-right">
            <h6>Call Us</h6>
            <p><a href="#">+213 00 00 00</a></p>
          </div>

        </div>


        <div class="cont-top margin-up">

          <div class="cont-left text-center">
            <span class="fa fa-envelope-o text-primary"></span>
          </div>
          <div class="cont-right">
            <h6>Email Us</h6>
            <p><a href="mailto:example@mail.com" class="mail">GlaucomaDetec@mail.com</a></p>
          </div>

        </div>


        <div class="cont-top margin-up">
          <div class="cont-left text-center">
            <span class="fa fa-map-marker text-primary"></span>
          </div>
          <div class="cont-right">
            <h6>Address</h6>
            <p>Address here, Annaba,Algeria</p>
          </div>
        </div>
      </div>



      <div class="map-content">
        <form action="#" method="post">
          <div class="twice-two">
            <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Enter Your Name"
              required="">
            <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Enter Your Email"
              required="">
          </div>

          <div class="twice">
            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Enter Your Phone "
              required="">
          </div>

          <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>
          <button type="submit" class="btn btn-contact">Send Your Message</button>
        </form>
      </div>



    </div>
  </div>

  <!-- /contact1 -->
</body>

</html>