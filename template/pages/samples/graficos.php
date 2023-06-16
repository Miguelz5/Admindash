<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Movie Station</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="logoMS.png" alt="logo" style="width: auto;" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="logoMS.png" alt="logo" /></a>
        </div>
        <ul class="nav">
            <div class="profile-desc">

              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="error-404.html" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small"> Configurações </p>
                  </div>
                </a>

                <div class="dropdown-divider"></div>
                <a href="/template/pages/samples/error-404.html" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small"> Sair </p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-home-variant"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-view-array"></i>
              </span>
              <span class="menu-title"> Filmes </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addfilmes.php"> Adicionar Filmes </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="users.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title"> Usuários</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="graficos.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Gráficos</span>
            </a>
          </li>
         </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Páginas do app</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="register.html"> Criar conta </a></li>
              </ul>
            </div>
          </li>
          
      </nav>
      <!-- partial -->
    
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="logoMS.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Pesquisar">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                   

                      <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                          <i class="mdi mdi-bell"></i>
                          <span class="count bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                          <h6 class="p-3 mb-0">Notificações</h6>
                          <div class="dropdown-divider"></div>
                          
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-alert text-warning"></i>
                              </div>
                            </div> 
                            <div class="preview-item-content">
                              <p class="preview-subject mb-1">Aviso</p> 
                              <p class="text-muted ellipsis mb-0"> Atualizar racking! </p> 
                            </div>
                          </a>
        
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-alert text-warning"></i>
                              </div>
                            </div>
                            <div class="preview-item-content">
                              <p class="preview-subject mb-1">Aviso</p>
                              <p class="text-muted ellipsis mb-0"> Temos um novo usuário! </p>
                            </div>
                          </a>
        
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-alert text-warning"></i>
                              </div>
                            </div>
                            <div class="preview-item-content">
                              <p class="preview-subject mb-1">Aviso</p>
                              <p class="text-muted ellipsis mb-0"> Seja bem-vindo admin! </p>
                            </div>
                          </a>
                        </div>
                      </li>
                      <!------------------------------->
                      <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                          <div class="navbar-profile">
                            <img class="img-xs rounded-circle" src="Admin.jpg" alt="">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name">  <?php echo $_SESSION['nome']; ?>  </p>
                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                          <h6 class="p-3 mb-0"> Perfil </h6>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item" href="error-404.html">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                              </div>
                            </div>
                            <div class="preview-item-content">
                              <p class="preview-subject mb-1">Configurações</p>
                            </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item preview-item" href="logout.php">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                              </div>
                            </div>
                            <div class="preview-item-content">
                              <p class="preview-subject mb-1">Sair</p>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                      <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                  </div>
                </nav>
        <!-- partial -->
        
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pico de usuários</h4>
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Filmes novos</h4>
                    <canvas id="areaChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Usuarios novos em cada ano</h4>
                    <canvas id="doughnutChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>

           
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a> </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>