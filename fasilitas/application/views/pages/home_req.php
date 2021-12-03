<div class="container">
    <div class="row">
        <div class="card position-absolute top-50 start-50 translate-middle col-xs-12 col-sm-12 col-md-12 col-lg-9 rounded" style="background-color: #000B2E;color:white;">
            <div class="title" style="margin: 5px;">
                <h3 style="color: #BAA360;">Request Listing</h3>
            </div>
            <div class="card-body">
                <table class="table table-light">
                    <thead>
                        <tr class="text-center">
                            <th scope=" col">#</th>
                            <th scope="col">Requester</th>
                            <th scope="col">Requested Facility</th>
                            <th scope="col">Date</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <?php if($_SESSION['role'] == "management" || $_SESSION['role'] == "admin"){?>
                            <th scope="col">Operation</th>
                            <?php }?>
                            <?php if($_SESSION['role'] == "user"){?>
                            <th scope="col">Status</th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <?php foreach($data as $req) {?>
                            <th scope="row">1</th>
                            <td><?php echo $req->First_Name ?></td>
                            <td><?php echo $req->Name ?></td>
                            <td><?php echo $req->Date ?></td>
                            <td><?php echo $req->Start_Time ?></td>
                            <td><?php echo $req->End_Time ?></td>
                            <td>
                                <?php if($_SESSION['role'] == "management"){?>
                                <a href="<?= base_url("home/accReq"); ?>" class="btn btn-sm btn-success">Approve</a>
                                <a href="<?= base_url("home/decReq"); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                                <?php }?>

                                <?php if($_SESSION['role'] == "admin"){?>
                                <a href="<?= base_url("home/decReq"); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                                <?php }?>

                                <?php if($_SESSION['role'] == "user"){?>
                                    <?php echo $req->Status ?>
                                <?php }?>
                            </td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>