
	<table class="table table-hover table-bordered">
		<tr>
			<th>HOST</th>
			<th>IP</th>
			<th>Modo</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
		{{s_rows}}
	</table>
	<div id="form_host">
		<div class="input-group">
		  <input type="text" class="form-control" placeholder="Nombre del host" id="host" name="host" />
		  <span class="input-group-btn">
			<button class="btn btn-default" type="button" onclick="javascript:addHost();" >Añadir host</button>
		  </span>
		</div>
    </div>
    <div id="main_menu">
		<p><a href="{{urlbase}}?get=sh">Obtener Script</a> | <a href="{{urlbase}}login.php?logout=true">Salir de {{s_titulo}}</a></p>
	</div>
