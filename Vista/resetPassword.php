<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restablecer contraseña</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href=>
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/sistemaIS.css">
</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href=""><img class="logo-icon me-2"
                                src="../assets/images/logo-urse.png" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-5">Restablecer contraseña</h2>
                    <div class="auth-form-container text-start">
                        <form action="../Controlador/loginController.php" method="POST">
                            <div class="email mb-3">
                                <center>
                                        <p >Ingresa tu correo electrónico para restablecer tu contraseña</p>
                                </center> 
                                <input id="correo" name="correo" type="email" class="form-control signin-email" placeholder="Ingresa tu correo electrónico" required="required">
                            </div>
                            <!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Restablecer</button>
                            </div>
                        </form>
                        <div class="auth-option text-center pt-5"><a class="text-link" href="../Vista/login.php" >Iniciar Sesión</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>