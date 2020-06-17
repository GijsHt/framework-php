<h1 class="pl-5 ml-5 text-secondary">Home</h1>
<div class="container text-secondary">

    <h1 class="ml-5 mt-3 text-dark">Customers</h1>
    <div class="container mt-4">
        <table border="1" class="table table-striped table-dark">
            <tr>
                <th>Naam</th>
                <th>phone</th>
                <th>Email</th>

            </tr>

            <?  $customers = getThreeCustomers();
            foreach ($customers as $customer){?>


                <tr>
                    <td><?= $customer["name"]; ?></td>
                    <td><?= $customer["phone"]; ?></td>
                    <td><?= $customer["email"]; ?></td>
                </tr>
            <?}?>
        </table>
        <a href="<?= URL ?>Customer/index" class="float-right   text-secondary">See all customers here</a>
    </div>


    <h1 class="ml-5 mt-5 text-dark">Horses</h1>
    <div class="container mt-4">
        <table border="1" class="table table-striped table-dark">
            <tr>
                <th>Horse</th>
                <th>Height(in cm)</th>
                <th>age</th>
            </tr>

            <?  $horses = getThreeHorses();
            foreach ($horses as $horse){?>


                <tr>
                    <td><?= $horse["name"]; ?></td>
                    <td><?= $horse["height"]; ?></td>
                    <td><?= $horse["age"]; ?></td>
                </tr>
            <?}?>
        </table>
        <a href="<?= URL ?>Horse/index" class="float-right  text-secondary">See all horses here</a>
    </div>



<h1 class="ml-5 mt-5 text-dark">Reservations</h1>
<div class="container mt-4">
    <table border="1" class="table table-striped table-dark">
        <tr>
            <th>Client</th>
            <th>Reserved Horse</th>
            <th>Time</th>
        </tr>

        <?  $reservations = getThreeReservations();
        foreach ($reservations as $reservation){?>


            <tr>
                <td><?= $reservation["customername"]; ?></td>
                <td><?= $reservation["horsename"]; ?></td>
                <td><?= $reservation["starttime"]; ?></td>
            </tr>
        <?}?>
    </table>
    <a href="<?= URL ?>Reservations/index" class="float-right text-secondary">See all Reservations here</a>
</div>
</div>
