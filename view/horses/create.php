<?php
?>
<a href="<?= URL ?>Horse/index" class="mr-5 pr-5 mt-4 float-right">Go back</a>
<div class="container align-self-center mt-5 ">
<div class="card p-4 align-self-center">
    <form action="<?= URL ?>Horse/save" method="post">
        <div class="form-group">
            <label for="horseName">Horse Name</label>
            <input type="text" class="form-control" placeholder="Blitz" name="horseName" required>
        </div>
        <div class="form-group">
            <label for="horseAge">Horse age</label>
            <input type="text" class="form-control" placeholder="7 years" name="horseAge" required>
        </div>
        <div class="form-group">
            <label for="horseHeight">Horse height (in cm)</label>
            <input type="text" class="form-control" placeholder="170" name="horseHeight" required>
        </div>
        <div class="form-group">
            <label>Breed</label><br>
        <select name="breed" required>
            <? $breeds = getAllBreeds();
            foreach ($breeds as $breed){?>
                <option name="breed"><?=$breed["name"]; ?></option>
            <? } ?>
        </select>
        </div>
        <input type="hidden" value="<? if($_GET["breed"] == 'Dutch Warmblood'){
            echo 1;
        }elseif ($_GET["breed"] == 'Dutch Heavy Draft') {
            echo 2;
        }else {
            echo 3;
        }  ?>" name="breedId">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>