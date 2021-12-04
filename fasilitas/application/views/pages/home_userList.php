<?php
if ($_SESSION['role'] != "admin") {
    if ($_SESSION['role'] == "user") redirect('home');
    if ($_SESSION['role'] == "management") redirect('home/facilityDash');
} ?>

<div class="container my-3">
    <div class="row">
        <div class="title" style="margin: 5px;">
            <h3 style="color: #BAA360;">User Listing</h3>
        </div>

        <table class="table table-light">
            <thead>
                <tr class="text-center">
                    <th scope=" col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user) { ?>
                    <tr class="text-center">
                        <th scope="row"><?php echo $user->Account_ID ?></th>
                        <td><?php echo $user->First_Name . ' ' . $user->Last_Name ?></td>
                        <td><?php echo $user->Email ?></td>
                        <td><?php echo $user->Role ?></td>
                        <td>
                            <a href="<?= base_url("edit/editUser/$user->Account_ID"); ?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="<?= base_url("Home/deleteUser/$user->Account_ID"); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>