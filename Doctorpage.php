<?php
include_once "../core/autoload.php";
session_start();


$k=0;


if(!isset($_SESSION['email'])){
    header('location:register.php');
    die;
}

$email = $_SESSION['email'];



$_SESSION['error'] = "";
if(isset($_POST['submit'])){
// && and // || or
   

if(!isset($_POST['firstname']) ||  $_POST['firstname'] == ""){
    $_SESSION['error'] = "enter your firstname";

 }

 if(!isset($_POST['lastname']) ||  $_POST['lastname'] == ""){
    $_SESSION['error'] = "enter your lastname";

 }

  

   if(!isset($_POST['gender']) ||  $_POST['gender'] == ""){
    $_SESSION['error'] = '<p id="eror">enter your gender</p>';
 }

 if(!isset($_POST['email']) ||  $_POST['email'] == ""){
  $_SESSION['error'] = '<p id="eror">enter your email</p>';
}

if(!isset($_POST['PhoneNumber']) ||  $_POST['PhoneNumber'] == ""){
  $_SESSION['error'] = '<p id="eror">enter your email</p>';
}
if(!isset($_POST['Diagnostic']) ||  $_POST['Diagnostic'] == ""){
  $_SESSION['error'] = '<p id="eror">enter Diagnostic</p>';
}




   


   if(isset($_POST['firstname'])){
    $firstname = clear($_POST['firstname']);
   }

   if(isset($_POST['lastname'])){
    $lastname = clear($_POST['lastname']);
   }



   if(isset($_POST['gender'])){
    $gender = clear($_POST['gender']);
   }

   if(isset($_POST['email'])){
      $email = clear($_POST['email']);
   }


   if(isset($_POST['PhoneNumber'])){
    $PhoneNumber = clear($_POST['PhoneNumber']);
   }

   if(isset($_POST['Diagnostic'])){
    $Diagnostic = clear($_POST['Diagnostic']);
   }

   

   



   

   $date = date("F j, Y, g:i a");


   if($_SESSION['error'] == ""){

      mysqli_query($conn,"INSERT INTO `liste_patient` (`firstname`,`lastname`,`gender`,`email`,`PhoneNumber`,`Diagnostic`,`date`) 
      VALUES ('$firstname','$lastname','$gender','$email','$PhoneNumber','$Diagnostic','$date')");
       $_SESSION['emaill'] = $email;

       $_SESSION['ok'] = "the form has been saved";
       header('location:Doctorpage.php');
       die;
   }
}

  


?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Glaucoma | Detector &amp; For Doctors</title>

    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VetWey : Home</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--css-->

  <link rel="stylesheet" href="css/bootstrap1.css">
  <link rel="stylesheet" href="css/bootstrap2.css">
  <link rel="stylesheet" href="css/bootstrap3.css">

  <!--script-->

  <script src="js/bootstrap.js"></script>
  <script src="js/j.js"></script>
  <script src="js/fontowsem.js"></script>
</head> 
<body> 
  

<style>


 
.container {  
    padding: 50px;  
  background-color: rgb( 174, 214, 241 );  
}  
.image-container{
    width: 50%;
}



.image-container img{
    position: relative;
    max-width: 50%;


}
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 15px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  

input[type=text]:focus, input[type=password]:focus {  
  background-color: rgb(215, 220, 255);  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: rgb( 174, 214, 241 );  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 30%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  

  :root {
    --main-bg-color: #009d63;
    --main-text-color: #009d63;
    --second-text-color: #bbbec5;
    --second-bg-color: #c1efde;
  }
  
  .primary-text {
    color: var(--main-text-color);
  }
  
  .second-text {
    color: var(--second-text-color);
  }
  
  .primary-bg {
    background-color: var(--main-bg-color);
  }
  
  .secondary-bg {
    background-color: var(--second-bg-color);
  }
  
  .rounded-full {
    border-radius: 100%;
  }
  
  #wrapper {
    overflow-x: hidden;
    background-image: linear-gradient(
      to right,
      #6868f1,
      #6868f1,
      #6868f1,
      #6868f1,
      #6868f1
    );
  }
  
  #sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
  }
  
  #sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
  }
  
  #sidebar-wrapper .list-group {
    width: 15rem;
  }
  
  #page-content-wrapper {
    min-width: 100vw;
  }
  
  #wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
  }
  
  #menu-toggle {
    cursor: pointer;
    color: #fff;
  }
  
  .list-group-item {
    border: none;
    padding: 20px 30px;
  }
  
  .list-group-item.active {
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
  }

  .pfp img
    {
             width: 200px;

             height: 200px;
             border-radius: 50%;
             margin:0 auto;
    }


  #button2 {
  display: inline-block;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  z-index: 1;
  color: #090909;
  padding: 0.7em 1.7em;
  font-size: 18px;
  border-radius: 0.5em;
  background: #e8e8e8;
  border: 1px solid #e8e8e8;
  box-shadow: 6px 6px 12px #c5c5c5,
             -6px -6px 12px #ffffff;
}

#button2:active {
  color: #666;
  box-shadow: inset 4px 4px 12px #c5c5c5,
             inset -4px -4px 12px #ffffff;
}

#button2:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

#button2:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #009087;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

#button2:hover {
  color: #ffffff;
  border: 1px solid #009087;
}

#button2:hover:before {
  top: -35%;
  background-color: #009087;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

#button2:hover:after {
  top: -45%;
  background-color: #009087;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}


.cta {
  display: flex;
  padding: 11px 33px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-size: 25px;
  color: white;
  background: #6225E6;
  transition: 1s;
  box-shadow: 6px 6px 0 black;
  transform: skewX(-15deg);
  border: none;
}

.cta:focus {
  outline: none;
}

.cta:hover {
  transition: 0.5s;
  box-shadow: 10px 10px 0 #FBC638;
}

.cta .second {
  transition: 0.5s;
  margin-right: 0px;
}

.cta:hover  .second {
  transition: 0.5s;
  margin-right: 45px;
}

.span {
  transform: skewX(15deg)
}

.second {
  width: 20px;
  margin-left: 30px;
  position: relative;
  top: 12%;
}

.one {
  transition: 0.4s;
  transform: translateX(-60%);
}

.two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.cta:hover .three {
  animation: color_anim 1s infinite 0.2s;
}

.cta:hover .one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.cta:hover .two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: #FBC638;
  }

  100% {
    fill: white;
  }
}

  
  
  @media (min-width: 768px) {
    #sidebar-wrapper {
      margin-left: 0;
    }
  
    #page-content-wrapper {
      min-width: 0;
      width: 100%;
    }
  
    #wrapper.toggled #sidebar-wrapper {
      margin-left: -15rem;
    }
  }
  
</style>
   <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
       <div class="bg-white" id="sidebar-wrapper">

       <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="img/logo5.png" width="130px" ></div>
            <div class="list-group list-group-flush my-3">
                <a href="tableaux.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fa-solid fa-house"></i>Patient List</a>
                
                <a href="register.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Log Out</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
         <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Home</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <style>
     .ok{
    background-color: rgb(148, 179, 101);
     color: #ffffff;
   text-align: center;
    padding: 10px;
   
}
  </style>

            <?php if(isset($_SESSION['ok']) && $_SESSION['ok']!=""):?>

<div class="ok">
    <?php
    {
        echo $_SESSION['ok'];
    }
    unset($_SESSION['ok']);
    ?>
</div>
<?php endif; ?>

  <!--end nav bar-->


      
                      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                      <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.2/dist/tf.min.js"></script>
                      <script src="target_classes.js"></script>
                      <script src="predict.js"></script> 

                      <center>  <h1> Welcome back Doctor</h1> </center> 
  <center><p> start the detection then enter the patient informations</p></center>
  <br><br><a href="detection.php">
 <center> <button id="Start" class="btn btn-primary">Start Now</button></center>
</a>
  <hr>
             
  <!--formulaire-->
<div style="position: relative; top:20px;">
<form action="" method="post">  
  <div class="container">  
  <center><p>Enter the patient informations :</p></center>
  <label for="First Name"><b>First Name</b></label><br> 
  <input style="width: 100%; padding: 15px; border-radius: 15px; " type="text" name="firstname" placeholder= "Enter the patient First name"  required />      
<label for="Last Name"><b>Last Name</b></label>    
<input style="width: 100%; padding: 15px; border-radius: 15px; " type="text" name="lastname" placeholder=" Enter the Patient Lastname" required />  

<div>  
<label for="Gender"><b>Gender</b></label><br><br>
<input type="radio" value="Male" name="gender" checked id="male"> <label for="male">Male </label>   
<input type="radio" value="Female" name="gender" id="female"> <label for="female">Female </label>    
</div>  

<div>  
    <label for="email"><b>Email</b></label><br>
    <input style="width: 100%; padding: 15px; border-radius: 15px;"  type="email" name="email" placeholder=" Enter the Patient email" required />   
<div> 

<div>  
    <label for="PhoneNumber"><b>Phone Number</b></label><br>
    <input  style="width: 100%; padding: 15px; border-radius: 15px; " type="tel" name="PhoneNumber" placeholder=" Enter the Patient PhoneNumber" required />   
</div> 

<div>

<div>  
    <label for="Diagnostic"><b>Diagnostic</b></label><br>
    <input  style="width: 100%; padding: 30px; border-radius: 30px; " type="tel" name="Diagnostic" placeholder=" Enter the result of detection" required />   
</div> 



<br><br><br>
<button type="submit" name="submit"  class="cta">
    <span class="span">Save</span>
    <span class="second">
      <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592
</div> 
</form>  

<script>
 
 var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
</script>

</body>  
</html>