<?php
$servername = "localhost";
$username = "root";
$password = "";

?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>GlaucomaDetector</title>

    <meta name="description" content="" />

    <!-- Favicon 
    <link rel="icon" type="image/x-icon" href="/GlaucomaDetector/assets/img/logog.png" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
         <!-- Content -->
      <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
                <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
            </div>
            </div>
              <!-- /Search -->
              <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item lh-1 me-3">
              <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/LoGo_GlaucomaDetector.PNG" alt="">
              <span></span>
              </a>
              </li>
                <!-- Place this tag where you want the button to render. 
                <li class="nav-item lh-1 me-3">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item lh-1 me-3">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
				        <li class="nav-item lh-1 me-3">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item lh-1 me-3">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->


                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $userinfo['lastname'].' '.$userinfo['firstname'];?></span>
							<small class="text-muted">Doctor</small>
                            
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                  
                    <li>
                      <a class="dropdown-item" href="Settings.html">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                   
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="deconnexion.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
      
    


		     <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
				<div class="container-xxl flex-grow-1 container-p-y">
				<div class="col-xxl">
                  
                    <div class="container">
                    <a href="index.html" class="logo d-flex align-items-center">
                    <!--<img src="../assets/img/logog.png" class="float-sm-left" alt="">-->
                    <span></span>
                    </a>
                    </div>
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <!--<img src="/GlaucomaDetector/assets/img/logog.png" class="img-fluid" alt="Responsive image"
                    width="100" height="80"></img>-->
                    </div>
                   
                     </br>
                     

                      
                                
                            
                            </div>
                          </div>
                        </div>
						          
                      </form>
                      <?php
                        if(isset($erreur)){
                          echo '<font color="red">'.$erreur.'</font>';
                        }
                      ?>
                    

                     
                      </div>

                      </br>
                      </br>

                    </div>
                     
                    <main role="main" class="container mt-5">
                        <div class="row">
                          <div class="col-12">
                            <div class="progress progress-bar progress-bar-striped progress-bar-animated mb-2">Loading Model</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-4">
                            <input id="image-selector" class="form-control border-0" type="file">
                          </div>
                          <div class="col-3">
                            <button id="predict-button" class="btn btn-primary ">Detect</button>
                            <a href=""
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-6">
                            <h2 class="ml-3">Image</h2>
                            <img id="selected-image" class="ml-3" width="250" alt=""> 
                          </div>
                          <div class="col-3">
                            <h2 class="ml-1">Diagnosis</h2>
                            <ol id="prediction-list"></ol>
                          </div>
                        </div><br><br><br><br>
                        <a href="Doctorpage.php">
                        <button id="Add a patient" class="btn btn-primary ">Add a patient</button></a>
                      </main>
                    
                      
                      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                      <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.2/dist/tf.min.js"></script>
                      <script src="target_classes.js"></script>
                      <script src="predict.js"></script> 

                    </div>
                  </div>
                </div>
              </div>
				</div>	
			
    <!-- / Content -->

    <div class="content-wrapper">
      <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
  <div class="col-xxl">
          </div>
        </div>
      </div>
  </div>	

<!-- / Content -->
	   <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Evaluate Models</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="evaluate" class="btn btn-primary">Evaluate</button>
      </div>
    </div>
  </div>
</div>




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
