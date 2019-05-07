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

                    <li class='nav-item active'>
                        <a class="nav-link" href="/proprietarios" id="proprietarios" 
                            aria-haspopup="true" aria-expanded="false"></i> Proprietarios</a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link" href="/automoveis" id="automoveis" 
                            aria-haspopup="true" aria-expanded="false"></i> Automoveis</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="form" style="display: block">

		<div class="panel-heading">
			<h1 class="panel-title text-center my-3">Cadastrar Proprietário</h1>
		</div>

		<div class="alert alert-danger" role="alert" style="display: none">
			
		</div>

		<div class="alert alert-success" role="alert" style="display: none">
			
		</div>

		<form method="post" id="form">

			<div class="form-group row">

				<label for="nome" class="col-sm-2 col-form-label">Nome:</label>
				<div class="col-sm-10">

					<input type="text" name="name" id="nome" class="form-control" placeholder="Nome">
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Sobrenome:</label>
				<div class="col-sm-10">
					<input type="text" name="lastname" id="sobrenome" placeholder="Sobrenome" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label for="curso" class="col-sm-2 col-form-label">Telefone:</label>
				<div class="col-sm-10">
					<input type="number" name="phone" id="telefone" placeholder="Telefone" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">CNH:</label>
				<div class="col-sm-10">
					<input type="number" name="cnh" id="cnh" placeholder="CNH" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<input name="salvar" id="salvar" class="btn btn-primary col" type="submit" value="Salvar">
				<input name="cancelar" id="cancelar" class="btn btn-danger col ml-1" type="reset" value="Cancelar">
			</div>
		</form>
    </div>
    
    <div class="container" id="listagem" style="display: block">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title text-center my-3">Gestão de Proprietário</h1>
            </div>
            <div class="panel-body">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="query" name="query" placeholder="Pesquisar">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" type="button"
                            id="button-addon2">Pesquisar</button>
                    </div>
                </div>

                <a href="" id="btnNew">Novo Proprietário</a>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Telefone</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>12345678</td>
                            <td>Química 2</td>
                            <td>valume 3 </td>
                            <td>Pedro</td>
                            <td>
                                <!-- <a class="text-dark" href='#'><i class="fas fa-info" aria-hidden="true"></i> Info</a> | -->
                                <a class="text-dark" href='/livros/12345678/edit'><i class="fas fa-edit"
                                        aria-hidden="true"></i> Editar</a> |
                                <a class="text-dark" href="#" onclick="excluir('12345678')"><i class="fas fa-trash"
                                        aria-hidden="true"></i> Excluir</a></td>
                        </tr>

                        <tr>
                            <td>234324324789</td>
                            <td>Química</td>
                            <td>Volume 2</td>
                            <td>Martha Reis</td>
                            <td>
                                <!-- <a class="text-dark" href='#'><i class="fas fa-info" aria-hidden="true"></i> Info</a> | -->
                                <a class="text-dark" href='/livros/234324324789/edit'><i class="fas fa-edit"
                                        aria-hidden="true"></i> Editar</a> |
                                <a class="text-dark" href="#" onclick="excluir('234324324789')"><i class="fas fa-trash"
                                        aria-hidden="true"></i> Excluir</a></td>
                        </tr>

                        <tr>
                            <td>978-85-96-00358-2</td>
                            <td>Geografia em rede</td>
                            <td>Volume 2</td>
                            <td>Edilson Adão</td>
                            <td>
                                <!-- <a class="text-dark" href='#'><i class="fas fa-info" aria-hidden="true"></i> Info</a> | -->
                                <a class="text-dark" href='/livros/978-85-96-00358-2/edit'><i class="fas fa-edit"
                                        aria-hidden="true"></i> Editar</a> |
                                <a class="text-dark" href="#" onclick="excluir('978-85-96-00358-2')"><i
                                        class="fas fa-trash" aria-hidden="true"></i> Excluir</a></td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <script src="/js/js.js"></script>
    <script>
        $("#query").quicksearch('table tbody tr')
        function excluir(id) {
            var resposta = confirm("Deseja deletar a categoria???");

            if (resposta == true) {
                window.location.href = '/livros/' + id + '/delete';
            }
        }
    </script>