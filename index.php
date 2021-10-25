<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login. Controle de Estoque</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src='assets/js/jquery-3.5.1.slim.min.js'></script>
        <script src='assets/js/bootstrap.bundle.min.js'></script>
    </head>

    <body>

        <nav clas='navbar navbar-expand-md bg-primary navbar-dark shadow'>
            <a href="#" class='navbar-brand'>Estoque</a>
            <button class='navbar-toggler' type='Button' data-toggle='collapse' data-target='#collapsibleNavbar'>

                <span class='navbar-toggler-icon'></span>

            </button>
            <div class='collapse navbar-collapsibleNavbar'>
                <ul class='navbar-nav'>
                    <li class="nav-tem">
                        <a href="#" class='nav-link'>Sobre</a>
                    </li>
                    <li class="nav-tem">
                        <a href='#' class='nav-link'>Cadastro</a>
                    </li>
                    <li class="nav-tem">
                        <a href="#" class='nav-link'>Politicas</a>
                    </li>
                </ul>
            </div>
        </nav>

        <br><br>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <div class='card'>
                        <article class='card-bady'>
                            <a href="#" class='float-right btn btn-outline-primary'>Registrar</a>
                            <h4 class='card-title mb-4 mt-1'>Entrar</h4>
                            <form>
                                <div class="form-group">
                                    <label for="">Seu Email</label>
                                    <input type="email" name="email" class='form-control' placeholder='Email'>
                                    <button type='submit'>Entrar</button>
                                </div>
                            </form>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>