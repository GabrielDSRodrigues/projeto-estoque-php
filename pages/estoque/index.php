<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Controle de Estoque</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #eee;
        }

        .nav-link:hover {
            background-color: #525252 !important;
        }

        .nav-link .fa {
            transition all 1s;
        }

        .nav-link:hover .fa {
            transform: rotate(360deg);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-primary navbar-dark shadow">
        <a href="#" class="navbar-brand ml-5 px-3">Estoque <i class="fa fa-angellist" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar"></button>
        <div class="collapse nav-bar-collpase justify-content-end" id="collapsiblenavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show borde-end">
                    <div class="d-flex flex-column vh-100 flex-shirk-0 p-3 text-white bg-dark" style="width: 250px">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fa fa-chart" aria-hidden="true"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fa fa-pencil-square" aria-hidden="true"></i> Cadastrar Depósito</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fa fa-dropbox aria-hidden="true"></i> Cadastrar Item</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fa fa-exchange" aria-hidden="true"></i> TRansferência</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fa fa-list-alt" aria-hidden="true"></i> Itens</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fa fa-window-restore" aria-hidden="true"></i> Movimentações</a>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>
            <main class="col ps-md-2 pt-2">
                <div class="row">
                    <span class="p-1 w-100 mx-2 px-3 py-2 bg-light bg-gradient text-muted">Home</span>
                    <div class="col w-100 mx-2 mt-2">
                        Área do conteúdo...
                    </div>
                </div>
            </main>
        </div>
    </div>
    
</body>
</html>