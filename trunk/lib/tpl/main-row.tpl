		<tr>
			<td><a href="{{urlbase}}?host={{host}}">{{host}}</td>
			<td>{{ip}}</td>
			<td>{{date}}</td>
			<td>
				<a title="Información" href="javascript:alert('{{user_agent}}');"><img class="action_pic" src="{{urlbase}}img/computer.png" /></a>
				<a target="_blank" title="Geolocalizar" href="http://www.elhacker.net/geolocalizacion.html?host={{ip}}"><img class="action_pic" src="{{urlbase}}img/map.png" /></a>
				<a target="_blank" href="http://{{ip}}/"><img class="action_pic" src="{{urlbase}}img/link.png" /></a>
				<a href="javascript:borrar('{{host}}');"><img class="action_pic" src="{{urlbase}}img/trash.png" /></a>
			</td>
		</tr>
