<div class="container h-100 my-5">
    <div class="row align-items-center h-100">
        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
            <div class="card h-100 border-primary justify-content-center" style="background-color:#0D1A44; border:none; color:#BAA360">
                <div class="col-12 text-center">
                    <h2 class="mt-4 mb-4" style="color: #BAA360;">Edit Facilities</h2>
                </div>
                <div>
                    <?php //foreach ($data as $fac) {
                    echo form_open_multipart("edit/editFacility/$id");
                    ?>
                    <form class="row g-3 p-3" id="myform">
                        <div class="col-md-12">
                            <label for="facilityid" class="form-label">Facilites ID</label>
                            <input type="text" class="form-control" id="facilityid" name="facilityid" value="<?php echo $data->Facility_ID; ?>" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data->Name; ?>">
                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="img" class="form-label">Image</label>
                            <input type="file" class="form-control" id="img" name="img" size="20">
                            <?= form_error('img', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <img src="<?php echo base_url() . $data->Image; ?>" width="600" height="400">
                        <div class="col-md-12">
                            <label for="detail" class="form-label">Detail</label>
                            <textarea type="detail" class="form-control" id="detail" name="detail" placeholder=""><?php echo $data->Detail; ?></textarea>
                            <?= form_error('detail', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class=" form-group text-right">
                            <button type="button" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-start"><a href="<?= base_url('home/facilityDash'); ?>" style="color:white;text-decoration:none;">Back to Dash</a></button>
                            <button type="submit" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-end" style="background-color: #BAA360;">Edit</button>
                        </div>
                    </form>
                    <?php //} 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>