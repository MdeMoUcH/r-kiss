		<tr>
			<td><a href="{{urlbase}}?host={{host}}">{{host}}</a></td>
			<td>{{ip}}</td>
			<td>{{date}}</td>
			<td>
				<a title="Información" href="javascript:alert('{{user_agent}}');"><span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span></a>
				<a href="javascript:alert('La IP {{ip}} es de una red local.');"><span class="glyphicon glyphicon-road" aria-hidden="true"></span></a>
				<a target="_blank" href="http://{{ip}}/"><span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>
				<a href="javascript:borrar('{{host}}');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			</td>
		</tr>
