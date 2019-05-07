<!DOCTYPE html>
<html>
<head>
	<title>Lumem | Veículos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title text-center my-3">Veículos e Proprietários</h1>
			</div>
			<div class="panel-body">

				<div class="alert alert-danger" role="alert">

				</div>

				<div class="alert alert-success" role="alert">

				</div>

				<a class="btn btn-primary" href="#" role="button" style="margin-bottom: 20px">Novo Veículo</a>
				<a class="btn btn-primary" href="#" role="button" style="margin-bottom: 20px; float: right;">Novo Proprietário</a>
				<div>

					<table class="table table-striped table-bordered table-hover " id="table">
						<thead class="thead-dark">
							<tr>
								<th>Id</th>
								<th>Placa</th>
								<th>Descrição</th>
								<th>Cor</th>
								<th>KM</th>
								<th>Ano</th>
								<th>Proprietário</th>
								<th>Excluir</th>

							</tr>
						</thead>
						<tbody>

							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td> |<a class="text-primary" href="#" ></i> Detalhes</a></td>
								<td><a class="text-primary" href="#" onclick="excluir({$value['matricula']})"><i class="fas fa-trash" aria-hidden="true"></i> Excluir</a></td></td>
							</tr>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>



	<div class="container">

		<div class="panel-heading">
			<h1 class="panel-title text-center my-3">Cadastrar Veículos</h1>
		</div>

		<div class="alert alert-danger" role="alert">
			{$value}
		</div>

		<div class="alert alert-success" role="alert">
			{$value}
		</div>

		<form method="post" id="form">

			<div class="form-group row">
				<label for="nome" class="col-sm-2 col-form-label">Id:</label>
				<div class="col-sm-10">

					<input type="number" name="id" id="id" class="form-control" placeholder="Id">
				</div>
			</div>

			<div class="form-group row">

				<label for="nome" class="col-sm-2 col-form-label">Placa:</label>
				<div class="col-sm-10">

					<input type="number" name="placa" id="placa" class="form-control" placeholder="Placa">
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
					<input type="text" name="propietario" id="propietario" placeholder="Proprietário" class="form-control">
				</div>
			</div>




			<div class="form-group row">
				<input name="salvar" id="salvar" class="btn btn-primary col" type="submit" value="Salvar">
				<input name="cancelar" id="cancelar" class="btn btn-danger col ml-1" type="reset" value="Cancelar">
			</div>
		</form>
	</div>



	<div class="container">

		<div class="panel-heading">
			<h1 class="panel-title text-center my-3">Cadastrar Proprietário</h1>
		</div>

		<div class="alert alert-danger" role="alert">
			{$value}
		</div>

		<div class="alert alert-success" role="alert">
			{$value}
		</div>

		<form method="post" id="form">

			<div class="form-group row">
				<label for="nome" class="col-sm-2 col-form-label">Id:</label>
				<div class="col-sm-10">

					<input type="number" name="id" id="id" class="form-control" placeholder="Id">
				</div>
			</div>

			<div class="form-group row">

				<label for="nome" class="col-sm-2 col-form-label">Nome:</label>
				<div class="col-sm-10">

					<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Sobrenome:</label>
				<div class="col-sm-10">
					<input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label for="curso" class="col-sm-2 col-form-label">Telefone:</label>
				<div class="col-sm-10">
					<input type="number" name="telefone" id="telefone" placeholder="Telefone" class="form-control">
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



	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title text-center my-3">Detalhes Proprietários</h1>
			</div>
			<div class="panel-body">

				<div class="alert alert-danger" role="alert">

				</div>

				<div class="alert alert-success" role="alert">

				</div>

					<table class="table table-striped table-bordered table-hover " id="table">
						<thead class="thead-dark">
							<tr>
								<th>Id</th>
								<th>Nome</th>
								<th>Sobrenome</th>
								<th>Telefone</th>
								<th>CNH</th>
								<th>Excluir</th>

							</tr>
						</thead>
						<tbody>

							<tr>
								<td>{$value[""]}</td>
								<td>{$value[""]}</td>
								<td>{$value[""]}</td>
								<td>{$value[""]}</td>
								<td>{$value[""]}</td>
								<td><a class="text-primary" href="#" onclick="excluir({$value['matricula']})"><i class="fas fa-trash" aria-hidden="true"></i> Excluir</a></td></td>
							</tr>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>

</body>
</html>