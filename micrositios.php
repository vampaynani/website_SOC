<?php include("_head.php") ?>
<?php include("_menuMicrositios.php") ?>
<div class="content-usuario">
	<div>
		<p class="titulo">Micrositios</p>
		<input type="search" placeholder="buscar" class="search">
		<a href="" class="plusUser">+ Agregar micrositio</a>
		<table>
			<thead>
				<tr class="back-white">
					<td>Nombre de usuario</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>J VEGA BROKERS</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
				<tr>
					<td>CRECE ASESORIA HIPOTECARIA Yucatan</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
				<tr>
					<td>UP CREDITS</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
				<tr>
					<td>EXCELENCIA EN ASESORIA HIPOTECARIA</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="agregarUsuario">
	<form class="datosUsuario microsite">
	<a href=""><img src="./img/body/close.png" class="close"></a>
		<input type="text" placeholder="Nombre del sitio">
		<input type="text" placeholder="Correo">
		<input type="number" placeholder="Teléfono">
		<textarea placeholder="Descripción"></textarea>
		<input type="text" placeholder="Usuario">
		<input type="text" placeholder="calle">
		<input type="password" placeholder="Password">
		<input type="password" placeholder="Confirmar password">
		<button class="user">Agregar usuario</button>
	</form>
</div>
<?php include("_footer.php") ?>