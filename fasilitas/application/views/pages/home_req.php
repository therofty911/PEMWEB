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
                            <th scope="row">1</th>
                            <td>Kijang juana</td>
                            <td>Aula Hotel</td>
                            <td>2021/25/25</td>
                            <td>25:00</td>
                            <td>45:00</td>
                            <td>
                                <?php if($_SESSION['role'] == "management"){?>
                                <a href="<?= base_url("home/accReq"); ?>" class="btn btn-sm btn-success">Approve</a>
                                <a href="<?= base_url("home/decReq"); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                                <?php }?>

                                <?php if($_SESSION['role'] == "admin"){?>
                                <a href="<?= base_url("home/decReq"); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                                <?php }?>

                                <?php if($_SESSION['role'] == "user"){?>
                                Nunggu status hubungan kita
                                <?php }?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>