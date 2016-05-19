<?php include("_head.php") ?>
<?php include("_menuMicrositios.php") ?>
<div class="content-usuario">
	<div>
		<p class="titulo">Usuarios</p>
		<input type="search" placeholder="buscar" class="search">
		<a href="" class="plusUser"><span></span>+ Agregar usuario</a>
		<table>
			<thead>
				<tr class="back-white">
					<td>Nombre de usuario</td>
					<td>Email</td>
					<td>Fecha de creación</td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>admin</td>
					<td>admin@socasesores.com</td>
					<td>2016-01-22 18:54:30</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
				<tr>
					<td>Orbed Inmobiliaria</td>
					<td>llarranaga@socasesores.com</td>
					<td>2016-03-09 16:39:47</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
				<tr>
					<td>Elección Inteligente - Broker Hipotecario</td>
					<td>kledesma@socasesores.com</td>
					<td>2016-03-09 16:53:28</td>
					<td class="editInput"><a href="">Editar</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="agregarUsuario">
	<form class="datosUsuario">
	<a href=""><img src="./img/body/close.png" class="close"></a>
		<input type="text" placeholder="Nombre">
		<input type="text" placeholder="Correo">
		<input type="password" placeholder="Password">
		<input type="password" placeholder="Confirmar password">
		<button class="user">Agregar usuario</button>
	</form>
</div>
<div class="editarUsuario">
	<form class="datosUsuario">
	<a href=""><img src="./img/body/close.png" class="close"></a>
		<input type="text" placeholder="Nombre">
		<input type="text" placeholder="Correo">
		<input type="password" placeholder="Password actual">
		<input type="password" placeholder="Nuevo password">
		<input type="password" placeholder="Confirmar password">
		<button class="user">Editar usuario</button>
		<button class="user">Borrar</button>
	</form>
</div>
<?php include("_footer.php") ?>