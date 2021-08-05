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
                                                    <input type="text" name="nome" class="form-control">                                                                                          
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
                                            <input type="text" name="senha" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Senha</label>
                                        </div>

                                        <div class="card-block">
                                            <button type="submit" name="CadUsuario" class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i>Cadastrar</button>
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
                                                <th>Delete</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            
                                            $listagem = $db->prepare("SELECT * FROM user_details");
                                            $listagem->execute();
                                            while($lista = $listagem->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                            <td><?php echo $lista['id']; ?></td>
                                            <td><?php echo $lista['nome']; ?></td>
                                            <td><?php echo $lista['email']; ?></td>
                                            <td><?php echo $lista['contacto']; ?></td>
                                            <td><?php echo $lista['senha']; ?></td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></td>
                                            </tr>
                                            <?php }
                                            ?>
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
