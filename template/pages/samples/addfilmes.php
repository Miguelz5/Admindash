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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              </nav>
            </div>
            <div class="row">

              <!-------->
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Adicionar Filmes</h4>
                  
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Id_Filme</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Id_Filme">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Id_Genero</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Id_Genero">
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                          <label>Selecione o genero</label>
                          <select class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                            <option>Ação</option>
                            <option value="WY">Aventura</option>
                            <option value="WY">Animação</option>
                            <option value="AM">Comédia</option>
                            <option value="CA">Documentario</option>
                            <option value="RU">Fantasia</option>
                            <option value="RU">Ficção científica</option>
                            <option value="RU">Musical</option>
                            <option value="RU">Suspense</option>
                            <option value="RU">Terror</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Categoria</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Categoria">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Nome Filme</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nome Filme">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Sinopse</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Diretor</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Diretor">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Data</label>
                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Categoria">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Trailer</label>
                        <input type="url" class="form-control" id="exampleInputPassword4" placeholder="Insira o URL">
                      </div>
                      <div class="form-group">
                        <label>Capa1</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Enviar imagem">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Capa2</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Enviar imagem">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    
                      <button type="submit" class="btn btn-primary mr-2">Enviar</button>
                      <button class="btn btn-dark">Cancelar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                
              </div>
              
              
              
              
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/file-upload.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>