
	<p>Copia el siguiente código en un script en tu máquina, sustituyendo el nombre del host, y ponlo en el cron:</p>
	<div class="code_container">
		<code>
		<p>#!/bin/bash</p>
		<p>wget {{urlbase}}?save={{save}}&host=<b><span id="host" name="host" />&lt;nombre-del-host&gt;</span></b> -O /var/log/rkiss.log</p>
		</code>
	</div>
	<div id="form_host">
		<small>Puedes personalizar el script:</small>
		<input type="text" class="form-control" placeholder="Nombre del host" id="script_host" name="script_host"/>
	</div>
    <div id="main_menu">
		<p><a href="{{urlbase}}">Volver</a></p>
	</div>

