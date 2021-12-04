<div class="container my-3">
    <div class="row">
        <div class="title" style="margin: 5px;">
            <h3 style="color: #BAA360;">Request Listing</h3>
        </div>
        <?php
        if ($this->session->flashdata('success_acc')) {
            echo '<div >' . $this->session->flashdata('success_acc') . '</div>';
        } else if ($this->session->flashdata('success_dec')) {
            echo '<div >' . $this->session->flashdata('success_dec') . '</div>';
        } else if ($this->session->flashdata('success_delReq')) {
            echo '<div >' . $this->session->flashdata('success_delReq') . '</div>';
        } else if ($this->session->flashdata('success_book')) {
            echo '<div >' . $this->session->flashdata('success_book') . '</div>';
        }
        ?>
        <table class="table table-light">
            <thead>
                <tr class="text-center">
                    <th scope=" col">#</th>
                    <th scope="col">Requester</th>
                    <th scope="col">Requested Facility</th>
                    <th scope="col">Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <?php if ($_SESSION['role'] == "management" || $_SESSION['role'] == "admin") { ?>
                        <th scope="col">Operation</th>
                    <?php } ?>
                    <?php if ($_SESSION['role'] == "user") { ?>
                        <th scope="col">Status</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $req) : ?>
                    <tr class="text-center">
                        <th scope="row"> <?php echo $i ?> </th>
                        <td><?php echo $req->First_Name ?></td>
                        <td><?php echo $req->Name ?></td>
                        <td><?php echo $req->Date ?></td>
                        <td><?php echo $req->Start_Time ?></td>
                        <td><?php echo $req->End_Time ?></td>
                        <td>
                            <?php if ($_SESSION['role'] == "management") { ?>
                                <a href="<?= base_url("home/accReq/$req->Request_ID"); ?>" class="btn btn-sm btn-success">Approve</a>
                                <a href="<?= base_url("home/decReq/$req->Request_ID"); ?>" class="btn btn-sm btn-danger my-2">Decline</a>
                            <?php } ?>

                            <?php if ($_SESSION['role'] == "admin") { ?>
                                <a href="<?= base_url("home/deleteReq/$req->Request_ID"); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                            <?php } ?>

                            <?php if ($_SESSION['role'] == "user") { ?>
                                <?php echo $req->Status ?>
                            <?php } ?>
                        </td>
                    </tr>
                <?php $i++;
                endforeach ?>
            </tbody>
        </table>
    </div>
</div>