<?php ?>
<h1 class="ml-5 mt-3 text-secondary">Horses</h1>
<div class="container mt-4">
	<table border="1" class="table table-striped table-dark">
		<tr>
			<th>Horse</th>
			<th>Height(in cm)</th>
            <th>age</th>
		</tr>

        <?  $horses = getAllHorses();
        foreach ($horses as $horse){?>


		<tr>
			<td><?= $horse["name"]; ?></td>

			<td><?= $horse["height"]; ?></td>
            <td><?= $horse["age"]; ?></td>
            <td><a onclick="return confirm('Are you sure you want to delete this customer?')" href="<?= URL ?>Horse/activateDeleteFunction?id=<?=$horse['id'] ?>">Delete</a> &nbsp; <a href="<?= URL ?>Horse/viewUpdateForm?id=<?=$horse['id'] ?>">Update</a></td>
		</tr>
		<?}?>
	</table>
</div>
<a href="<?= URL ?>Horse/viewCreateForm" class="float-right mr-5 pr-5 text-secondary">Make a new horse here +</a>

