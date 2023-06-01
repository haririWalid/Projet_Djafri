<?php
include_once "../core/autoload.php";
session_start();

if(!isset($_SESSION['email'])){
    header('location:register.php');
    die;
}

$email=$_SESSION['email'];

if(!isset($_SESSION['emaill'])){
    header('location:register.php');
    die;
}


$emaill = $_SESSION['emaill'];


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
  <title>VetWey : Patient List Detection</title>
  <link rel="shortcut icon" href="vedio.vet/vet.png" type="image/x-icon">

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
  background-color: rgb(84, 129, 227);  
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
  background-color: rgb(84, 129, 227);  
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
                <a href="" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fa-solid fa-house"></i>Patient List</a>

                <a href="Doctorpage.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">Add a New Patient</i></a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
         <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Patient detection list</h2> 
                    
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
           
            <div style="margin-left: 10px;margin-right: 5px;" class="row my-5">
                    <h3 class="fs-4 mb-3"> Patients: </h3> 
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>

                                    <th scope="col">id_liste_patient</th>
                                    <th scope="col">Firstname</th>
                                    <th scope="col">Lastname</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">PhoneNumber</th>
                                    <th scope="col">Diagnostic</th>
                                    <th scope="col">Date</th>



                                    
                    

                                </tr>
                            </thead>
                            <tbody>


                            
                            
                                <?php
                                $res = mysqli_query($conn,"SELECT * FROM `liste_patient` WHERE gender='female'");

                                while ($data=mysqli_fetch_assoc($res))
                                {
                                    echo '<tr>';
                                    echo '<td>'.$data['id_liste_patient'].'</td>';
                                    echo '<td>'.$data['firstname'].'</td>';
                                    echo '<td>'.$data['lastname'].'</td>';
                                    echo '<td>'.$data['gender'].'</td>';
                                    echo '<td>'.$data['email'].'</td>';
                                    echo '<td>'.$data['PhoneNumber'].'</td>';
                                    echo '<td>'.$data['Diagnostic'].'</td>';
                                    echo '<td>'.$data['Date'].'</td>';
                                  
                                    echo '</tr>';
                                   
                                    
                                    
                                }

                                ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            
               </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

 <script>
 
         var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

</body>  
</html>