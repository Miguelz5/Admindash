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
     <!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Edit user</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- profile -->
				<div class="col-12">
					<div class="profile__content">
						<!-- profile user -->
						<div class="profile__user">
							<div class="profile__avatar">
								<img src="/template/assets/images/faces/bruno.jpg" alt="">
							</div>
							<!-- or red -->
							<div class="profile__meta profile__meta--green">
								<h3>John Doe <span>User</span></h3>
								<span>MS ID: 23562</span>
							</div>
						</div>
						<!-- end profile user -->

						<!-- profile tabs nav -->
						<ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Perfil</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Comentários</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Avaliações</a>
							</li>
						</ul>
						<!-- end profile tabs nav -->

						<!-- profile mobile tabs nav -->
						<div class="profile__mobile-tabs" id="profile__mobile-tabs">
							<div class="profile__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Profile">
								<span></span>
							</div>

							<div class="profile__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Perfil</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Comentários</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Avaliações</a></li>
								</ul>
							</div>
						</div>
						<!-- end profile mobile tabs nav -->
						

						<!-- profile btns -->
						<div class="profile__actions">
							
							<a href="#modal-delete3" class="profile__action profile__action--delete open-modal"><i class="mdi mdi-delete"></i></a>
						</div>
						
						<!-- end profile btns -->
					</div>
				</div>
				<!-- end profile -->

				<!-- content tabs -->
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
						<div class="col-12">
							<div class="row">
								<!-- details form -->
								<div class="col-12 col-lg-6">
									<form action="#" class="form form--profile">
										<div class="row row--form">
											<div class="col-12">
												<h4 class="form__title">Profile details</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="username">Username</label>
													<input id="username" type="text" name="username" class="form__input" placeholder="User 123">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="email">Email</label>
													<input id="email" type="text" name="email" class="form__input" placeholder="email@email.com">
												</div>
											</div>

											
										

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="rights">Cargo</label>
													<select class="js-example-basic-single" id="rights">
														<option value="User">Usuário</option>								
														<option value="Admin">Administrador</option>
													</select>
												</div>
											</div>

											<div class="col-12">
												<button class="form__btn" type="button">Salvar</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end details form -->

								<!-- password form -->
								<div class="col-12 col-lg-6">
									<form action="#" class="form form--profile">
										<div class="row row--form">
											<div class="col-12">
												<h4 class="form__title">Trocar senha</h4>
											</div>

											

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="newpass">Nova senha</label>
													<input id="newpass" type="password" name="newpass" class="form__input">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="confirmpass">Confirme a senha</label>
													<input id="confirmpass" type="password" name="confirmpass" class="form__input">
												</div>
											</div>

											<div class="col-12">
												<button class="form__btn" type="button">Mudar</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end password form -->
							</div>
						</div>	
					</div>

					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
						<!-- table -->
						<div class="col-12">
							<div class="main__table-wrap">
								<table class="main__table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Filme</th>
											<th>Autor</th>
											<th>Texto</th>
											<th>Like / Deslike</th>
											<th>Data criada</th>
											<th>Acões	</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="main__table-text">23</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">24</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">25</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">44 / 5</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">26</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">20 / 6</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">27</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">8 / 132</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">28</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">6 / 1</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">29</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">10 / 0</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">30</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">13 / 14</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">31</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">32</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end table -->

						<!-- paginator -->
						<div class="col-12">
							<div class="paginator-wrap">
								<span>10 from 23</span>

								<ul class="paginator">
									<li class="paginator__item paginator__item--prev">
										<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
									</li>
									<li class="paginator__item"><a href="#">1</a></li>
									<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
									<li class="paginator__item"><a href="#">3</a></li>
									<li class="paginator__item"><a href="#">4</a></li>
									<li class="paginator__item paginator__item--next">
										<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end paginator -->
					</div>

					<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
						<!-- table -->
						<div class="col-12">
							<div class="main__table-wrap">
								<table class="main__table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Filme</th>
											<th>Autor</th>
											<th>Texto</th>
											<th>Nota</th>
											<th>Like / Deslike</th>
											<th>Data criada</th>
											<th>Acões</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="main__table-text">23</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 7.9</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">24</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 8.6</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">25</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 6.0</div>
											</td>
											<td>
												<div class="main__table-text">44 / 5</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">26</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 9.1</div>
											</td>
											<td>
												<div class="main__table-text">20 / 6</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">27</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 5.5</div>
											</td>
											<td>
												<div class="main__table-text">8 / 132</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">28</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 7.0</div>
											</td>
											<td>
												<div class="main__table-text">6 / 1</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">29</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 9.0</div>
											</td>
											<td>
												<div class="main__table-text">10 / 0</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">30</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 6.2</div>
											</td>
											<td>
												<div class="main__table-text">13 / 14</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">31</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 7.9</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">32</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="mdi mdi-star"></i> 8.6</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="mdi mdi-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="mdi mdi-delete"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end table -->

						<!-- paginator -->
						<div class="col-12">
							<div class="paginator-wrap">
								<span>10 from 32</span>

								<ul class="paginator">
									<li class="paginator__item paginator__item--prev">
										<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
									</li>
									<li class="paginator__item"><a href="#">1</a></li>
									<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
									<li class="paginator__item"><a href="#">3</a></li>
									<li class="paginator__item"><a href="#">4</a></li>
									<li class="paginator__item paginator__item--next">
										<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end paginator -->
					</div>
				</div>
				<!-- end content tabs -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- modal view -->
	<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
		<div class="comments__autor">
			<img class="comments__avatar" src="img/user.svg" alt="">
			<span class="comments__name">John Doe</span>
			<span class="comments__time">30.08.2018, 17:53</span>
		</div>
		<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
		<div class="comments__actions">
			<div class="comments__rate">
				<span><i class="icon ion-md-thumbs-up"></i>12</span>

				<span>7<i class="icon ion-md-thumbs-down"></i></span>
			</div>
		</div>
	</div>
	<!-- end modal view -->

	<!-- modal delete -->
	<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Comment delete</h6>

		<p class="modal__text">Are you sure to permanently delete this comment?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

	<!-- modal view -->
	<div id="modal-view2" class="zoom-anim-dialog mfp-hide modal modal--view">
		<div class="reviews__autor">
			<img class="reviews__avatar" src="img/user.svg" alt="">
			<span class="reviews__name">Best Marvel movie in my opinion</span>
			<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

			<span class="reviews__rating"><i class="mdi mdi-star"></i>8.4</span>
		</div>
		<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
	</div>
	<!-- end modal view -->

	<!-- modal delete -->
	<div id="modal-delete2" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Review delete</h6>

		<p class="modal__text">Are you sure to permanently delete this review?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

	<!-- modal status -->
	<div id="modal-status3" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Status change</h6>

		<p class="modal__text">Are you sure about immediately change status?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Apply</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal status -->

	<!-- modal delete -->
	<div id="modal-delete3" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">User delete</h6>

		<p class="modal__text">Are you sure to permanently delete this user?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
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
  <script src="../../assets/vendors/select2/select2.min.js"></script>
  <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../../assets/js/file-upload.js"></script>
  <script src="../../assets/js/typeahead.js"></script>
  <script src="../../assets/js/select2.js"></script>
  
  <!-- HOT FLIX-->

 <script src="admin.js"></script>
 
  
</body>
</html>