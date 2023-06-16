<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="whost/phpmyadminidth=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Movie Station </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="images/logoMS.png" alt="logo" style="width: auto;" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="images/logoMS.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
               
                 
                </div>

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
         
          
              
             
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" logo /></a>
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
              <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                          <div class="navbar-profile">
                            <img class="img-xs rounded-circle" src="Admin.jpg" alt="">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name"> </p>
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
                          <a class="dropdown-item preview-item" >
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
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Pesquisar ">
              </form>
            </li>
          </ul>

          <ul class="navbar-nav navbar-nav-right">
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
                <a class="dropdown-item preview-item">
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-tabeladeusuario">
                    <h4 class="card-title">Tabela de Usuários</h4>
                    <a href="adduser.php" class="btn btn-primary ">Adicionar usuário +</a>
                    
                    </p>
                    <div class="add-items d-flex">
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                           <th>Foto</th>
                            <th>Usuários</th>
                            <th>Atividade</th>
                            <th>Status</th>
                            <th>Editar </th>
                            <th>Cargo</th>
                         
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                           <!--id-->  <td>1</td>
                            <td class="py-1">
                          <!--foto --> <img src="images/faces-clipart/pic-1.png" alt="image" />
                                 </td>
                        <!--nome -->  <td>Bruno</td>
                       <!--atividade--> <td class="text-danger"> 10% <i class="mdi mdi-arrow-down"></i></td>
                      <!--status -->  <td><label class="mdi mdi-checkbox-blank-circle badge-danger"> OFF</label></td> 
                  <!--editar ou excluir --><td><a href="edit-user.php" class="mdi mdi-pencil badge-blue"></a> <label ></label> </td> 

                  <th>Admin</th>    
                          </tr>  


                          
                          

                          <tr>
                            <td>2</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-2.png" alt="image" />
                            </td>
                            <td>Larissa</td>
                            <td class="text-danger"> 15% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-success"> ON</label></td> 
                            <td><a class="mdi mdi-pencil badge-blue"></a> <label ></label> </td> 
                            <th>Admin</th>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td>Juliar</td>
                            <td class="text-danger"> 2% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-danger"> OFF</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-4.png" alt="image" />
                            </td>
                            <td>John</td>
                            <td class="text-success"> 30% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-success"> ON</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-8.png" alt="image" />
                            </td>
                            <td>Melissa</td>
                            <td class="text-success"> 25% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-danger"> OFF</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td>Dalva</td>
                            <td class="text-success"> 70% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-success"> ON</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr> 
                          <tr>
                            <td>7</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-2.png" alt="image" />
                            </td>
                            <td>Talita</td>
                            <td class="text-success"> 80% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-success"> ON</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr> 
                          <tr>
                            <td>8</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-8.png" alt="image" />
                            </td>
                            <td>Cleide</td>
                            <td class="text-danger"> 45% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-danger"> OFF</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr> 
                          <tr>
                            <td>9</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-4.png" alt="image" />
                            </td>
                            <td>Carlinhos</td>
                            <td class="text-danger"> 90% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-danger"> OFF</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr> 
                          <tr>
                            <td>10</td>
                            <td class="py-1">
                              <img src="images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td>Perrel</td>
                            <td class="text-success"> 100% <i class="mdi mdi-arrow-up"></i></td>
                            <td><label class="mdi mdi-checkbox-blank-circle badge-success"> ON</label></td> 
                            <td><label class="mdi mdi-pencil badge-blue"></label> <label ></label> </td> 
                            <th>User</th>
                          </tr> 


                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


          
             
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="" target="_blank"></a> </span>
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
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
  </body>
</html>