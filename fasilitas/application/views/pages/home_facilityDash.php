<div class="container my-3">
    <div class="row">
        <div class="title" style="margin: 5px;">
            <h3 style="color: #BAA360;">Facilities Listing</h3>
        </div>
        <div class="d-flex justify-content-end">
            <a href="<?= base_url('add'); ?>" class="btn btn-success btn-sm my-2" style="color:antiquewhite;font-size:20px;margin-right:20px;">Add Facilities</a>
        </div>
        <?php
        if ($this->session->flashdata('success_editFacility')) {
            echo '<div >' . $this->session->flashdata('success_editFacility') . '</div>';
        } else if ($this->session->flashdata('success_deleteFacility')) {
            echo '<div >' . $this->session->flashdata('success_deleteFacility') . '</div>';
        } else if ($this->session->flashdata('success_add')) {
            echo '<div >' . $this->session->flashdata('success_add') . '</div>';
        }
        ?>
        <table class="table table-light">
            <thead>
                <tr class="text-center">
                    <th scope=" col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php
                foreach ($data as $row) {
                    $id = $row['Facility_ID'];
                    $foto = $row['Image'];
                    $nama = $row['Name'];

                    echo "<tr>";
                    echo "<td class='text-center'>" . $i . "</td>";
                    echo "<td class='text-center'><img src='", base_url() . $foto, "' class='img-fluid' alt='cant load the image' width='500'></td>";
                    echo "<td class='text-center'>" . $nama . "</td>";
                    echo "<td class='text-center'><a href='" . base_url("edit/editFacility/$id") . "' class='btn btn-sm btn-success mx-2'>Edit</a><a href='" . base_url("home/deleteFacility/$id") . "' class='btn btn-sm btn-danger my-2'>Delete</a>";
                    echo "</tr>";
                    $i++;
                }

                ?>

            </tbody>
        </table>
    </div>
</div>