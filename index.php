<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="src/View/img/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet">
        <title>Login</title>
    </head>

    <body class="body-color">
        <div class="container-fluid box-login">
            <form id="form_login" name="form_login" action="" enctype="multipart/form-data" method="POST" class="login-form">
                <div class="text-center">
                    <div class="text-center">
                        <img src="src/View/img/favicon.png" class="img-logo" alt="icon">
                    </div>
                    <h5 class="title">
                        Popcorn Movie
                    </h5>
                </div>
                <div class="fields">
                    <div>
                        <div class="block-label">
                            <div id="username-label" class="animated-label">
                                <div class="animated-label-text">
                                    <label for="username" class="label-input">
                                        E-mail<span class="required">*</span>
                                    </label>
                                </div>
                                <div class="animated-label-input">
                                    <span class="input-text">
                                        <input type="text" id="username" name="username" required>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-margin">
                        <div class="block-label">
                            <div id="password-label" class="animated-label">
                                <div class="animated-label-text">
                                    <label for="password" class="label-input">
                                        Senha<span class="required">*</span>
                                    </label>
                                </div>
                                <div class="animated-label-input">
                                    <span class="input-text">
                                        <input type="password" id="password" name="password" required>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-bot x-top-margin">
                        <div class="col-7 col-md-6">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label for="remember" class="form-label label-check">Lembrar de mim</label>
                        </div>
                        <div class="col-5 col-md-6 text-center box-forgot">
                            <a href="#" class="signup-text txt-forgot">Esqueceu a senha?</a>
                        </div>
                    </div>
                </div>
                <div class="text-center x-top-margin">
                    <button type="submit" id="login" class="btn-color mb-3 w-100 fw-bold">Login</button>
                </div>
                <div class="form-text text-center text-dark">
                    Não possui uma conta? <a href="./newuser.html" class="signup-text"> Cadastre-se</a>
                </div>
            </form>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="src/View/js/login.js"></script>
</html>