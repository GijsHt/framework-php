<?php ?>
<a href="<?= URL ?>Customer/index" class="mr-5 pr-5 mt-4 float-right">Go back</a>
<div class="container align-self-center mt-5 ">
    <h3>Register here</h3>
<div class="card p-4 align-self-center">
<form action="<?= URL ?>Customer/save" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" placeholder="Enter Your name" name="name" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" placeholder="Example Street 11" name="address" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Postal code</label>
        <input type="text" class="form-control" placeholder="0000 AB" name="postalCode" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" placeholder="Gorinchem" name="city" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone Number</label>
        <input type="text" class="form-control" placeholder="1234567890" name="phone" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>