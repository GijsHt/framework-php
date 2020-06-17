<a href="<?= URL ?>Reservations/index" class="mr-5 pr-5 mt-4 float-right">Go back</a>
<h1 class="ml-5 mt-3 text-secondary">Reservations</h1>
<div class="container mt-4">
    <table border="1" class="table table-striped table-dark">
        <tr>
            <th>Customer</th>
            <th>Horse</th>
            <th>Start Time</th>
            <th>Price</th>
        </tr>
        <?php $reservations = getAllReservations($_GET["name"]);
        foreach ($reservations as $reservation){?>
            <tr>
                <td><?= $reservation["customername"]; ?></td>
                <td><?= $reservation["horsename"]; ?></td>
                <td><?= $reservation["starttime"]; ?></td>
                <td><?= $reservation["price"]; ?></td>
                <td><a onclick="return confirm('Are you sure you want to delete this reservation?')" href="<?= URL ?>Reservations/activateDeleteFunction?id=<?=$reservation['id'] ?>">Delete</a> &nbsp; <a href="<?= URL ?>Reservations/viewUpdateForm?id=<?=$reservation['id'] ?>">Update</a></td>

            </tr>
        <?}?>
    </table>
</div>
