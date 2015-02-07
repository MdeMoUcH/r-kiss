
	<p>Cópia el siguiente código en un script en tu máquina, sustituyendo el nombre del host, y ponlo en el cron:</p>
	<div class="code_container">
		<code>
		<p>#!/bin/bash</p>
		<p>wget {{urlbase}}?save={{save}}&host=<b>&lt;nombre-de-tu-host&gt;</b> -O /var/log/rkiss.log</p>
		</code>
	</div>

