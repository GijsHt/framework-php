
<div class="container mt-4 text-secondary">
    <h3>Reservations made</h3>
    <? $names = getNames();
    foreach ($names as $name){ ?>
        <h5>See all reservations made by <a  href="<?= URL ?>Reservations/viewCustomerReservations?name=<?=$name["customername"]?>"><?= $name["customername"]?></a></h5>
    <?}?>

</div>
<a href="<?= URL ?>Reservations/viewCreateForm" class="float-right mr-5 pr-5 text-secondary">Make a new reservation here +</a>