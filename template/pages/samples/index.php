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
                            <p class="mb-0 d-none d-sm-block navbar-profile-name">  <?php echo $_SESSION['nome']; ?> </p>
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
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">

                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"> Filmes </h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-successfilmes ">
                          <span class="mdi mdi-movie"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"> Usuários </h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-successusuarios">
                          <span class="mdi mdi-account-multiple-outline"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Comentários</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-successcomentarios">
                          <span class="mdi mdi-comment-multiple-outline"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Tarefas</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-successtarefas ">
                          <span class="mdi mdi-clipboard-text"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Comentários em geral dos usuários </h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Perfil</th>
                          <th> Usuários </th>
                          <th> Progresso de ativa nos comentários dos filmes </th>
                          <th> Porcentagens </th>
                          <th> Data do iníco dos usuários em nosso app  </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/bruno.jpg" alt="image" />
                          </td>
                          <td> Bruno </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 30% </td>
                          <td> janeiro 02, 2023 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/melissa.jpg" alt="image" />
                          </td>
                          <td> Melissa </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 70% </td>
                          <td> Março 15, 2023 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/john.jpg" alt="image" />
                          </td>
                          <td> John </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 80% </td>
                          <td> Janeiro 20, 2023 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/peter.jpg" alt="image" />
                          </td>
                          <td> Peter </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 45% </td>
                          <td> Março 30, 2023 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/julia.jpg" alt="image" />
                          </td>
                          <td> Julia </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 37% </td>
                          <td> Fevereiro 07, 2023 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/gabriel.jpg" alt="image" />
                          </td>
                          <td> Gabriel </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 60% </td>
                          <td> Fevereiro 22, 2023 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="images/faces/Larissa.jpg" alt="image" />
                          </td>
                          <td> Larissa </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> 22% </td>
                          <td> Abril 10, 2023 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Filmes mais assistidos pelo os usuários.</h4>
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                      <div class="item">
                        <img src="images/Filmes/PanteraNegra.jpg" alt="">
                        <div class="d-flex py-4">
                          <div class="preview-list w-100">
                            <div class="preview-item p-0">
                              <div class="preview-thumbnail">
                                <img src="images/faces/bruno.jpg" class="rounded-circle" alt="">
                              </div>
                              <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                    <h6 class="preview-subject">Bruno</h6>
                                    <p class="text-muted text-small">2 dia atrás</p>
                                  </div>
                                  <p class="text-muted">Filme ruim</p>
                                  <div class="progress progress-md portfolio-progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      
                        

                      </div>
                      <div class="item">
                        <img src="images/Filmes/transformers.jpg" alt="">
                        <div class="d-flex py-4">
                          <div class="preview-list w-100">
                            <div class="preview-item p-0">
                              <div class="preview-thumbnail">
                                <img src="images/faces/john.jpg" class="rounded-circle" alt="">
                              </div>
                              <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                    <h6 class="preview-subject">Mario</h6>
                                    <p class="text-muted text-small">30 minutos atrás</p>
                                  </div>
                                  <p class="text-muted">Filme nota 10, sem defeitos!</p>
                                  <div class="progress progress-md portfolio-progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/Filmes/batma.jpg" alt="">
                        
                        
                        <div class="d-flex py-4">
                          <div class="preview-list w-100">
                            <div class="preview-item p-0">
                              <div class="preview-thumbnail">
                                <img src="images/faces/peter.jpg" class="rounded-circle" alt="">
                              </div>
                              <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                    <h6 class="preview-subject">Peter</h6>
                                    <p class="text-muted text-small">24 horas atrás</p>
                                  </div>
                                  <p class="text-muted">Filme ok, não muito bom e nem muito ruim</p>
                                  <div class="progress progress-md portfolio-progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              
                        
                      </div>
                    </div>
                    
                    <p class="text-muted"> Barra de progesso das avaliações desse usuário em alguns filmes. </p>
                   
                  </div>
                </div>
              </div>

            
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Avaliações dos usuários em nosso app</h4>
                  </div>
                  <div class="preview-list">
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="images/faces/bruno.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Bruno</h6>
                            <p class="text-muted text-small">1 dia atrás</p>
                          </div>
                          <p class="text-muted">Super recomendo esse app! Muito bom.</p>

                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                        </div>

                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="images/faces/melissa.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Melissa</h6>
                            <p class="text-muted text-small">2 dias atrás</p>
                          </div>
                          <p class="text-muted">Muito bom!</p>

                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="images/faces/julia.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Julia</h6>
                            <p class="text-muted text-small">5 dias atrás</p>
                          </div>
                          <p class="text-muted"> Dava para deixar o app mehlor</p>

                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="images/faces/Larissa.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Larissa</h6>
                            <p class="text-muted text-small">8 dias atrás</p>
                          </div>
                          <p class="text-muted">Virei fã de vocêssss! Melhor site!</p>

                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                          <i class="mdi mdi-star"> </i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


         

              <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista de Tarefas</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="Inserir tarefa...">
                      <button class="add btn btn-primary todo-list-add-btn">Adicionar</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Um novo usuário foi adicionado </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>

                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Salvar as novas alterações feitas </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>

                        <li class="completed">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Corrigir erro na página de comentários </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>

                        <li class="completed">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Atualizar o racking de filmes  </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>

                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Comentar uma postagem de algum usuário </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li> 
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <!-- content-wrapper ends -->
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
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>