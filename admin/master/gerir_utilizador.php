<?php 
include_once("include/header.php");
include_once("../../db.php");
?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Gestão de Usuarios</h5>
                                            <p class="m-b-0">Apenas pessoais autorizado podem acessar!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Gerir Utilizador</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="container">
                           <center>

                               <div class="col-md-10 pt-5">
                                   <div class="card">
                                       <div class="card-header">
                                           <h5>Cadastro de Utilizador</h5>
                                        </div>
                                        <div class="card-block">
                                            <form class="form-material" method="POST" action="crud/criar.php">
                                                
                                                <div class="form-group form-info">
                                                    <input type="text" name="name" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Nome do utilizador</label>
                                                </div>
                                                <div class="form-group form-info">
                                                    <input type="text" name="contacto" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Contacto</label>
                                                </div>
                                                <div class="form-group form-info">
                                                    <input type="text" name="email" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Endereço de E-mail</label>
                                        </div>
                                        <div class="form-group form-info">
                                            <input type="text" name="password" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Senha</label>
                                        </div>

                                        <div class="card-block">
                                            <button type="submit" name="enviarcadastro" class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i>Cadastrar</button>
                                         </div>    
                                    </form>
                                </div>
                            </div>
                        </div>

                          <!-- Visualizar cadastro -->
                          <div class="card">
                            <div class="card-header">
                                <h5>Listagem de Usuario</h5>
                               
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-trash close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome usuario</th>
                                                <th>Contacto</th>
                                                <th>E-mail</th>
                                                <th>Senha</th>
                                                <th>editar</th>
                                                <th>eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Antonio Francisco</td>
                                                <td>936 826 946</td>
                                                <td>antonio.j1.francisco@gmail.com</td>
                                                <td>jose1234@</td>
                                                <td><i><i class="icofont icofont-eye-alt"></i></i></td>
                                                <td><i><i class="icofont icofont-eye-alt"></i></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>João Pedro</td>
                                                <td>953 367 263</td>
                                                <td>joaopedro@gmail.com</td>
                                                <td>35672jd</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Fernando Guilherme</td>
                                                <td>958 382 873</td>
                                                <td>fernando@gmail.com</td>
                                                <td>lkjs83673</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Basic table card end -->
                    </center>


                    </div>


                    
                   
                    

                    
                    








    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
