
<div class="container">
	<p><a href=<?= $this->Url->Build('/')?> >Home </a>/ Records Lists</p>

<table id="records_table" class="table table-bordered">
	<thead>
		<th>ID</th>
		<th>Name</th>
	</thead>
	<tbody>
		<?php foreach ($records as $key => $records): ?>
		<!-- <tr>
			<td><?= $records->id ?></td>
			<td><?= $records->name ?></td>
		</tr> -->

		<?php 

		echo $this->Html->tableCells([
			["$records->id", $records->name],
		]);

		?>

		<?php endforeach ?>
	</tbody>
</table>
</div>

<script>
	$(document).ready(function(){
		$('#records_table').DataTable();
	})
</script>