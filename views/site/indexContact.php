<table>
	<tr>
		<th>Tên member</th>
		<th>Liên hệ</th>
	</tr>
	<tr>
		<?php
			foreach($listAllContact as $contact)
			{
		?>
			<td><?= echo $contact['name_member']; ;?></td>
			<td><?= echo $contact['contact']; ;?></td>
		<?php
			}
		?>
	</tr>
</table>
