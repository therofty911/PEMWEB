<div class="container h-100 my-5">
    <div class="row align-items-center h-100">
        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
            <div class="card h-100 border-primary justify-content-center" style="background-color:#0D1A44; border:none; color:#BAA360">
                <div class="col-12 text-center">
                    <h2 class="mt-4 mb-4" style="color: #BAA360;">Edit User</h2>
                </div>
                <div>
                    <?php foreach ($data as $use) {
                        // echo form_open_multipart('edit/editUser');
                    ?>
                        <form class="row g-3 p-3" id="myform" method="post" action="<?= base_url('edit/editUser'); ?>">
                            <div class="col-md-12">
                                <label for="accountid" class="form-label">Account ID</label>
                                <input type="text" class="form-control" id="accountid" name="accountid" value="<?php echo $use->Account_ID; ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $use->First_Name; ?>">
                                <?= form_error('fname', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-12">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $use->Last_Name; ?>">
                                <?= form_error('lname', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $use->Email; ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-12">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control" id="role" name="role" value="<?php echo $use->Role; ?>">
                                <?= form_error('role', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class=" form-group text-right">
                                <button type="button" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-start"><a href="<?= base_url('home/facilityDash'); ?>" style="color:white;text-decoration:none;">Back to list</a></button>
                                <button type="submit" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-end" style="background-color: #BAA360;">Edit</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>