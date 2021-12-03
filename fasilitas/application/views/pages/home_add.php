<div class="container ">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="mt-4 mb-4" style="color: #BAA360;">Add Facilites</h2>
        </div>
        <div class="col-md-6 col-lg-6  position-absolute top-50 start-50 translate-middle card-box">
            <?php echo form_open_multipart('add'); ?>

            <form class="row g-3">
                <div class="col-md-12">
                    <label for="name" class="form-label text-light">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="img" class="form-label text-light">Image Facilities</label>
                    <input type="file" class="form-control" id="img" name="img">
                    <?= form_error('img', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="detail" class="form-label text-light">Detail</label>
                    <textarea class="form-control" id="detail" name="detail" rows="3" value="<?= set_value('detail'); ?>"></textarea>
                    <?= form_error('detail', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-primary col-lg-3 col-sm-4 my-3 float-start"><a href="<?= base_url('home/facilityDash'); ?>" style="color:white;text-decoration:none;">Back to details</a></button>
                    <button type="submit" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-end" style="background-color: #BAA360;">Add Facilites</button>
                </div>
            </form>
        </div>
    </div>
</div>