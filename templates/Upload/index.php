
<?= $this->form->create($upload,['type'=>'file']) ?>

<?php

echo $this->Form->control('File_Upload', ['type'=>'file']);
?>

<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>