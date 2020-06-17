<h1 class="ml-5 mt-3 text-secondary">Customers</h1>

<div class="container mt-4">
	<table border="1" class="table table-striped table-dark">
		<tr>
			<th>Naam</th>
			<th>phone</th>
            <th>Email</th>
            <th>Actions</th>

		</tr>

        <?  $customers = getAllCustomers();
        foreach ($customers as $customer){?>


		<tr>
			<td><?= $customer["name"]; ?></td>

			<td><?= $customer["phone"]; ?></td>
            <td><?= $customer["email"]; ?></td>
            <td><a onclick="return confirm('Are you sure you want to delete this customer?')" href="<?= URL ?>Customer/activateDeleteFunction?id=<?=$customer['id'] ?>">Delete</a> &nbsp; <a href="<?= URL ?>Customer/viewUpdateForm?id=<?=$customer['id'] ?>">Update</a></td>
		</tr>
		<?}?>
	</table>
</div>

<a href="<?= URL ?>Customer/viewCreateForm" class="float-right mr-5 pr-5 text-secondary">Register here</a>