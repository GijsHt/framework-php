<?php ?>
<a href="<?= URL ?>Reservations/index" class="mr-5 pr-5 mt-4 float-right">Go back</a>
<div class="container align-self-center mt-5 ">
    <h3>Update a reservation here</h3>
    <div class="card p-4 align-self-center">
        <form action="<?= URL ?>Reservations/saveUpdateForm?id=<?=$_GET["id"]?>" method="post">
            <div class="form-group">
                <label for="customerName">Who is making the reservation?</label>
                <select name="customerName" class="custom-select" required>
                    <? $names = getAllNames();
                    foreach ($names as $name){?>
                        <option name="customerName"><? echo $name["name"]  ?></option>
                    <?} ?>
                </select><br>
                <small>Your name is not on the list? click <a href="<?= URL ?>Customer/viewCreateForm">here!</a></small>
            </div>
            <div class="form-group">
                <label for="horseName">Which horse would you like to reserve?</label>
                <select name="horseName" class="custom-select" required>
                    <? $horseNames = getAllHorses();
                    foreach ($horseNames as $horseName){?>
                        <option name="horseName"><?=$horseName["name"];?></option>
                    <?}?>
                </select><br>
                <small>Want to add your own horse? Click <a href="<?= URL ?>Horse/viewCreateForm">here!</a></small>
            </div>
            <div class="form-group">
                <label for="time">When would you like to start?</label>
                <input type="time" class="form-control" name="startTime" required>
            </div>
            <div class="form-group">
                <label for="price">For how many hours would you like to reserve this horse? € 55 per hour</label>
                <input type="text" class="form-control" name="duration" required>
            </div>
            <input type="hidden" name="price">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>