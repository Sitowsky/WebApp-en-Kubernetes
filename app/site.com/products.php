<?php
session_start();

unset($_SESSION['consulta']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
	<link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
	</script>
	<script src="js/material.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones5.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
	<script src="librerias/select2/js/select2.js"></script>
	<script src="librerias/datatable/jquery.dataTables.min.js"></script>
	<script src="librerias/datatable/dataTables.bootstrap.min.js"></script>

</head>

<body>
<?php
	require_once "php/conexion.php";
	$conexion=conexion();
	?>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> BIENVENIDO
			</div>
			
<figure class="full-width navLateral-body-tittle-menu">
				<figcaption>
					<span>
						Olson Industries Inc.<br>
						<small>Admin</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								HOME
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-case"></i>
							</div>
							<div class="navLateral-body-cr">
								ADMINISTRACIÓN
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="providers.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-truck"></i>
									</div>
									<div class="navLateral-body-cr">
										PROVEEDORES
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="categories.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-label"></i>
									</div>
									<div class="navLateral-body-cr">
										CATEGORÍAS
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-face"></i>
							</div>
							<div class="navLateral-body-cr">
								USUARIOS
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="admin.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account"></i>
									</div>
									<div class="navLateral-body-cr">
										ADMINISTRADORES
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts"></i>
									</div>
									<div class="navLateral-body-cr">
										CLIENTES
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="products.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr">
								PRODUCTOS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="sales.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								COTIZACIONES
							</div>
						</a>
					</li>

				</ul>
			</nav>
		</div>
	</section>

	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Clave producto</label>
					<input class="form-control input-sm" type="text" id="KeyProductu" readonly="readonly">
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Nombre producto</label>
					<input class="form-control input-sm" type="text" id="NameProductu">
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Descripción producto</label>
					<input class="form-control input-sm" type="text" id="DesProductu">
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Precio</label>
					<input class="form-control input-sm" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProductu">
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Id proveedor</label>
					<input class="form-control input-sm" type="text" id="IdProveedoru">
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Id categoria</label>
					<input class="form-control input-sm" type="text" id="IdCategoria">
				</div>
				<div class="modal-body">
					<label for="KeyProduct">Imagen</label>
					<input class="form-control input-sm" type="text" id="Picture">
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

				</div>
			</div>
		</div>
	</div>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>
				<div class="mdl-tooltip" for="btn-menu">Ocultar / Mostrar MENU</div>
				<nav class="navBar-options-list">
				<ul class="list-unstyle">
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">Salir</div>
						</li>												
					</ul>
				</nav>
			</div>
		</div>
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-washing-machine"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					En el apartado siguiente puede agregar, modificar y eliminar productos.
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewProduct" class="mdl-tabs__tab is-active">NUEVO</a>
				<a href="#tabListProducts" class="mdl-tabs__tab" id="hey">LISTA</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Producto
							</div>
							<div class="full-width panel-content">
								<form>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
											<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACIÓN BÁSICA</legend><br>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="KeyProduct">
												<label class="mdl-textfield__label" for="KeyProduct">Clave producto</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="NameProducto">
												<label class="mdl-textfield__label" for="NameProducto">Nombre Producto</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="DesProduct">
												<label class="mdl-textfield__label" for="DesProduct">Descripción Producto</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct">
												<label class="mdl-textfield__label" for="PriceProduct">Precio</label>
												<span class="mdl-textfield__error">Invalid price</span>
											</div>
										</div>

										<?php
										require_once "php/conexion.php";
										$conexion = conexion();

										$sql = "SELECT id_categoria,nombre_categoria from categoria ";
										$result = mysqli_query($conexion, $sql);

										?>

										<div class="mdl-cell mdl-cell--12-col">
											<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; CATEGORÍA</legend><br>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" id="Categoria">
													<option value="0">Seleciona uno</option>
													<?php
													while ($ver = mysqli_fetch_row($result)) :
													?>
														<option value="<?php echo $ver[0] ?>">
															<?php echo $ver[1] ?>
														</option>

													<?php endwhile; ?>
												</select>
											</div>
										</div>

										<?php
										$sql = "SELECT id_proveedor,nombre_proveedor from proveedor ";
										$result = mysqli_query($conexion, $sql);

										?>
										<div class="mdl-cell mdl-cell--12-col">
											<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; PROVEEDOR</legend><br>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" id="Proveedor">
													<option value="0">Seleciona uno</option>
													<?php
													while ($ver = mysqli_fetch_row($result)) :
													?>
														<option value="<?php echo $ver[0] ?>">
															<?php echo $ver[1] ?>
														</option>

													<?php endwhile; ?>
												</select>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--12-col">
											<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Imagen</legend><br>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<input type="file" id="FileUpload">
											</div>
										</div>
									</div>
									<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
										Agregar
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mdl-tabs__panel" id="tabListProducts">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">

						<div id="tabla"></div>


					</div>
				</div>
			</div>

		</div>
	</section>
</body>

</html>



<script type="text/javascript">
	$(document).ready(function() {
		$('#tabla').load('componentes/tablap.php');
		//$('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#guardarnuevo').click(function() {
		    clave = $('#KeyProduct').val();
			nombre = $('#NameProducto').val();
			des = $('#DesProduct').val();
			pre = $('#PriceProduct').val();
			idp = $('#Proveedor').val();
			idc = $('#Categoria').val();
			im = $('#FileUpload').val();
			img = im.replace(/^.*\\/, "");


			agregardatos(clave,nombre,des,pre,img,idp,idc);
			$('#KeyProduct').val("");
			$('#NameProducto').val("");
			$('#DesProduct').val("");
			$('#PriceProduct').val("");
			$('#Proveedor').val("");
			$('#Categoria').val("");
			i$('#FileUpload').val("");
		});


		$('#actualizadatos').click(function() {			
			actualizaDatos();
		});

		$('#hey').click(function() {
			$('#tabla').load('componentes/tablap.php');
		});

	});
</script>
