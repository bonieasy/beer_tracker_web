<!DOCTYPE html>
cc
<html lang="en">
<head>
	<title>Cadastro de ingrediente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=/"vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="ingredientes-insert.php" method="post">
				<span class="contact100-form-title">
					Cadastro de Ingrediente
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nome</span>
					<input class="input100" type="text" name="nome" placeholder="Insira o nome do ingrediente">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Descrição</span>
					<input class="input100" type="text" name="descricao" placeholder="Insira a descrição do ingrediente">
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Enviar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>

		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Codigo</th>
								<th class="column2">Ingrediente</th>
								<th class="column3">Descricao</th>
								<th class="column0"></th>
								<th class="column0"></th>
							</tr>
						</thead>
						<tbody>
						<?php
							$PDO = db_connect();
							$ingredientes = $PDO->query('SELECT cod_ingrediente, nome_ingrediente, descricao_ingrediente From ingrediente');
							if (is_array($ingredientes) || is_object($ingredientes))
							{
								foreach($ingredientes as $ingrediente) {
									echo ('	<tr>
												<td class="column1" id="codIngrediente">'. $ingrediente["cod_ingrediente"] .'</td>
												<td class="column2">'. $ingrediente["nome_ingrediente"] .'</td>
												<td class="column3">'. $ingrediente["descricao_ingrediente"] .'</td>
												<td class="column0">
													<button type="button" class="btn" data-toggle="modal" data-target="#modalEdit" data-whatever="'. $ingrediente["nome_ingrediente"]. ' / '. $ingrediente["cod_ingrediente"] .'">
														<img class="img-btn" src="/img/edit.svg" alt="Edit" height="20" width="20">
													</button>
												</td>
												<td class="column0">
													<button type="button" class="btn" data-toggle="modal" data-target="#modalDelete" data-whatever="'. $ingrediente["nome_ingrediente"]. '">
														<img class="img-btn" src="/img/rubbish-bin.svg" alt="Delete" height="20" width="20">
													</button>
												</td>
											</tr>');
								}
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="contact100-form-title-modal" id="modalEditTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>				
				<input type="hidden" id="codIngrediente">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Nome:</label>
					<input type="text" class="form-control" id="nomeIngrediente">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Descricao:</label>
					<textarea class="form-control" id="descricaoIngrediente"></textarea>
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Atualizar</button>
			</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="contact100-form-title-modal" id="modalEditTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="text" class="text-hidden">
			
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" id="btn-delete" data-target="#btn-delete">Deletar</button>
			</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/vendor/animsition/js/animsition.min.js"></script>
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/vendor/select2/select2.min.js"></script>
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/javascript/main.js"></script>
	<script src="/javascript/modal.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
