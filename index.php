<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login. Controle de Estoque</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <body>

        <nav class='navbar navbar-expand-md bg-primary navbar-dark shadow'>
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
                        <article class='card-body'>
                            <a href="#" class='float-right btn btn-outline-primary'>Registrar</a>
                            <h4 class='card-title mb-4 mt-1'>Entrar</h4>
                            <form>
                                <div class="form-group">
                                    <label for="">Seu Email</label>
                                    <input type="email" name="email" class='form-control' placeholder='Email'>
                                </div>
                                <div class="form-group">
                                    <a href="#" class='float-right'>Esqueceu?</a>
                                    <label for="">Sua senha</label>
                                    <input type="password" class='form-control' name="" placeholder='******'>
                                </div>
                                <div class='form-group'>
                                    <div class='checkbox'>
                                        <label for="">
                                            <input type="checkbox"> Salvar senha
                                        </label>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <button type='submit' class='btn btn-primary btn-block'>Login</button>
                                </div>
                            </form>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>