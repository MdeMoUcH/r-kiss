	<h3>SCRIPT</h3>
	<p>Copia el siguiente código en un script en la máquina que quieras tener actualizada y ponlo en el cron:</p>
	<div class="code_container">
		<code>
		<p>#!/bin/bash</p>
		<p>wget "{{urlbase}}?save={{save}}&host=<b><span id="host">&lt;nombre-del-host&gt;</span></b><span id="mode"></span>" -O /var/log/rkiss.log</p>
		</code>
	</div>
	<div id="form_host">
		<small>Puedes personalizar el script:</small>
		<input type="text" class="form-control" placeholder="Nombre del host" id="script_host" />
		<input type="text" class="form-control" placeholder="Modo" id="script_mode" />
		<small><a href="{{urlbase}}/?get=modos">Información sobre los modos.</a></small>
	</div>
    <div id="main_menu">
		<p><a href="{{urlbase}}">Volver</a></p>
	</div>

