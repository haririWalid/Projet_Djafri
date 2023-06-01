<?php
include_once "../core/autoload.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="assets/css/Styles.css" rel="stylesheet" />

    <title>SIGN IN</title>
</head>

<body>


<main class="main" id="top">
     <!--nav bar-->
 <nav  style="position: relative;" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="" width="118"alt="" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style="justify-content: flex-end;" class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
          <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="about us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about_model.php"> About the Model</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=""> Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.us.php"> Contact Us</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

<style>
    
/* css navbar */
*{
    box-sizing: border-box;
    text-decoration: none;
  }
  nav{
    font-size: 18px;
  }
  .navbar-brand{
    margin-left: 50px;
    
  }
  #navbarNavDropdown{
      display: flex;
      justify-content: space-between;
      justify-content: right;
   }
   
   .main-banner {
  position: relative;
  max-height: 100%;
  overflow: hidden;
  margin-bottom: -7px;
  background-color: #f0f2f5;
}

.main-banner .caption {
  position: absolute;
  top: 50%;
  right: 25%;
  transform: translateY(-50%);
  margin-left: 10px;

}
</style>


  

    

<?php



$_SESSION['error'] = "";
if(isset($_POST['submit'])){
  
   $errors = []; 
   
   
   if(!isset($_POST['email']) ||  $_POST['email'] == ""){
    $errors[] = "enter your email";

 }

   if(!isset($_POST['password']) ||  $_POST['password'] == ""){
      $errors[] = "enter your password";

   }
 

   if(isset($_POST['email'])){
      $email = clear($_POST['email']);
   }


   if(isset($_POST['password'])){
      $password = clear($_POST['password']);
   }

   if(empty($errors)){
      $res = mysqli_query($conn,"SELECT password,email FROM `medecin` WHERE email = '$email'");
      
      foreach($res as $row){
         $hash = $row['password'];
      }
      if(password_verify($password,$hash)){
            $_SESSION['email'] = clear($_POST['email']);
            header('location:Doctorpage.php');
            die;
      }else{
         $errors[]  = "wrong password or id_user ";
      } 
   }
}

?>

   
<?php if(isset($errors)){?>
   <div class="error">
  <?php
     foreach($errors as $error){
        echo $error."<br>";

     }
  }?>

</div>

   
<?php if(isset($_SESSION['ok']) && $_SESSION['ok'] != ""):?>
   <div class="ok">

  <?php 
  {
   echo $_SESSION['ok'];
  }
  unset($_SESSION['ok']);
  ?>

</div>

<?php endif;?>
   


<!--login-->

<div style="position: relative;" class="container">
        <div class="SignIn-SignUp">
            <form action="" method="POST" class="Sign-In-form" id='login-frm'>
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input name="email" type="email" placeholder="email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input name="password" type="password" placeholder="password">
                </div>
                <button class="btn" name="submit">Login</button>
                <br>
                <p class="account-text">Don't have an account? <a href="#" id="Sign-Up-btn2">Sign Up</a></p>
            </form>

 <!-- fin login-->



    <!--register-->
<?php





$_SESSION['error'] = "";
if(isset($_POST['register'])){
// && and // || or
   

if(!isset($_POST['firstname']) ||  $_POST['firstname'] == ""){
    $_SESSION['error'] = "enter your firstname";

 }

 if(!isset($_POST['lastname']) ||  $_POST['lastname'] == ""){
    $_SESSION['error'] = "enter your lastname";

 }

   if(!isset($_POST['email']) ||  $_POST['email'] == ""){
      $_SESSION['error'] = '<p id="eror">enter your email</p>';
   }

   if(!isset($_POST['password']) ||  $_POST['password'] == ""){
      $_SESSION['error'] = "enter your password";

   }elseif(strlen($_POST['password']) < 8 ){
      $_SESSION['error'] = "enter strong password more then 8 characters";
   }




   if(isset($_POST['firstname'])){
    $firstname = clear($_POST['firstname']);
   }

   if(isset($_POST['lastname'])){
    $lastname = clear($_POST['lastname']);
   }

   if(isset($_POST['email'])){
      $email = clear($_POST['email']);
   }


   if(isset($_POST['password'])){
      $password =  password_hash(clear($_POST['password']),PASSWORD_DEFAULT) ;
   }

  
   $date = date("F j, Y, g:i a");


   $res = mysqli_query($conn,"SELECT * FROM `medecin` WHERE email='$email'");

   if(mysqli_num_rows($res) > 0){
      $_SESSION['error'] = "invalid id_user";

   }

   if($_SESSION['error'] == ""){

      mysqli_query($conn,"INSERT INTO medecin (`firstname`, `lastname`, `email`, `password`, `date`)
      VALUES('$firstname','$lastname','$email','$password','$date')");
       $_SESSION['ok'] = "account created login now";
       header('location:register.php');
       die;
   }
}





?>


   
<?php if(isset($_SESSION['error']) && $_SESSION['error'] != ""):?>
   <div class="error">

  <?php
  {
   echo $_SESSION['error'];
  }
  unset($_SESSION['error']);
  ?>

</div>

<?php endif;?>
   



<?php if(isset($_SESSION['ok']) && $_SESSION['ok'] != ""):?>
   <div class="ok">

  <?php 
  {
   echo $_SESSION['ok'];
  }
  unset($_SESSION['ok']);
  ?>

</div>

<?php endif;?> 
            <div class="SignIn-SignUp_container">
                <form action="" method="post" class="Sign-Up-form form-signin" id="SignIn-SignUp-form">
                    <h2 class="title">Sign Up</h2>
                    <div id="error">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="firstname" id="Firstname" placeholder="Firstname">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text"  name="lastname" id="Lastname" placeholder="Lastname">
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="User_email"  placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="Password"  placeholder="Password">
                    </div>
                    

                <button type="submit" name="register" id="btn-submit" class="btn">Sign In</button>
                <p class="account-text">Already have an account? <a href="#" id="Sign-In-btn2">Sign In</a></p>
                </form>
            </div>
            
        </div>



        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3 class="modal__title">Already have an Account ?</h3>

                    <p> Log In now and start Detecting Glaucoma</p>
                    <p> With a Simple Process</p>

                    <button class="btn" id="Sign-In-btn">Sign In</button>
                </div>
                <img src="assets/img/undraw_surveillance_re_8tkl.svg" alt="" class="image">

            </div>
            <div class="panel right-panel">
                <div class="content">

                    <h3> New Member with Us?</h3>
                    <div class="modal__descr">
                        <p>Join Now and Start Detecting Glaucoma</p>
                    </div>
                    <button class="btn" id="Sign-Up-btn">Sign Up</button>
                </div>
                <img src="assets/img/undraw_doctors_p6aq.svg" alt="" class="image">
            </div>

        </div>
    </div>
        </section>
 
    <script src="assets/js/app.js"></script>

</body>

</html>