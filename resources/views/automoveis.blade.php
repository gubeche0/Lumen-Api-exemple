<!DOCTYPE html>
<html>

<head>
    <title>Gestão Livros IFRS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-expand-xl navbar-dark mb-4" style="background-color: green;">
        <div class="container">
            <a class="navbar-brand" href="/">
                API LUMEN
            </a>

            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <li class='nav-item'>
                        <a class="nav-link" href="/proprietarios" id="proprietarios" aria-haspopup="true"
                            aria-expanded="false"></i> Proprietarios</a>
                    </li>
                    <li class='nav-item active'>
                        <a class="nav-link" href="/automoveis" id="automoveis" aria-haspopup="true"
                            aria-expanded="false"></i> Automoveis</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="form" style="display: none">

        <div class="panel-heading">
            <h1 class="panel-title text-center my-3">Cadastrar Veículos</h1>
        </div>

        <div class="alert alert-danger" role="alert" style="display: none">
            
        </div>

        <div class="alert alert-success" role="alert" style="display: none">
            
        </div>

        <form id="form">

            <input type="hidden" name="id" id="id" value="">
            <div class="form-group row">

                <label for="nome" class="col-sm-2 col-form-label">Placa:</label>
                <div class="col-sm-10">

                    <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-10">
                    <input type="text" name="descricao" id="descricao" placeholder="Descrição" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="curso" class="col-sm-2 col-form-label">Cor:</label>
                <div class="col-sm-10">
                    <input type="text" name="cor" id="cor" placeholder="Cor" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Kilometragem:</label>
                <div class="col-sm-10">
                    <input type="number" name="km" id="km" placeholder="Kilometragem" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Ano:</label>
                <div class="col-sm-10">
                    <input type="number" name="ano" id="ano" placeholder="ano" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Proprietário:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="proprietario_id" id="propietario">
                      </select>
                </div>
            </div>
           



            <div class="form-group row">
                <input name="salvar" id="salvar" class="btn btn-primary col" type="button" value="Salvar">
                <input name="cancelar" id="cancelar" class="btn btn-danger col ml-1" type="button" value="Cancelar">
            </div>
        </form>
    </div>

    <div class="container" id="listagem" style="display: block">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title text-center my-3">Gestão de Veículos</h1>
            </div>
            <div class="panel-body">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="query" name="query" placeholder="Pesquisar">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" type="button"
                            id="button-addon2">Pesquisar</button>
                    </div>
                </div>

                <a href="#" onclick="editar()" id="btnNew">Novo Veículos</a>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Placa</th>
                            <th>Descrição</th>
                            <th>Cor</th>
                            <th>Km</th>
                            <th>Ano</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <script src="/js/automoveis.js"></script>
</body>
</html>