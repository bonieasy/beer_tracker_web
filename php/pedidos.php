<!DOCTYPE html>
<?php require_once('init.php');?>
<html lang="en">
<head>
	<title>Pedidos</title>
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
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Codigo</th>
								<th class="column2">Cliente</th>
								<th class="column2">Data do pedido</th>
								<th class="column2">Data Entrega</th>
								<th class="column0"></th>
							</tr>
						</thead>
						<tbody>
						<?php
							$PDO = db_connect();
							$pedidos = $PDO->query('SELECT p.cod_pedido, p.data_pedido, p.data_entrega, c.razao_social FROM pedido p
                                                         INNER JOIN cliente c ON c.cod_cliente = p.cod_cliente');
							if (is_array($pedidos) || is_object($pedidos))
							{
								foreach($pedidos as $pedido) {
									echo ('	<tr>
												<td class="column1">'. $pedido["cod_pedido"] .'</td>
												<td class="column2">'. $pedido["razao_social"] .'</td>
												<td class="column2">'. $pedido["data_pedido"] .'</td>
												<td class="column3">'. $pedido["data_entrega"] .'</td>
												<td class="column0">
													<button type="button" class="btn" data-toggle="modal" data-target="#modalDelete" data-whatever="'.$pedido["cod_pedido"].'">
														<img class="img-btn" src="/img/rubbish-bin.svg" alt="Delete" height="20" width="20">
													</button>
												</td>
											</tr>');
								}
							}
						?>
						</tbody>
					</table>
					<div class="btn float-right" style="margin-top: 50px"> 
						<div class="container-contact100-form-btn">
							<div class="wrap-contact100-form-btn">
								<div class="contact100-form-bgbtn"></div>
								<a href="pedidos-cadastro.php"> 
									<button class="contact100-form-btn">
										<span>
											Novo pedido
											<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
										</span>
									</button>
								</a>
							</div>
						</div>
					</div>
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
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/javascript/main.js"></script>
	<script src="/javascript/modal-pedido.js"></script>

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
