<div class="container ">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="mt-4 mb-4" style="color: #BAA360;">Booking Form</h2>
        </div>
        <div class="col-md-6 col-lg-6  position-absolute top-50 start-50 translate-middle card-box">
            <form class="row g-3" method="post" action="<?= base_url('auth/book'); ?>">
                <div class="col-md-12">
                    <label for="id" class="form-label text-light">Facility ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled>
                </div>
                <div class="col-md-12">
                    <label for="reservasi" class="form-label text-light">Reservation Date</label>
                    <input type="date" class="form-control" id="reservasi" name="reservasi" value="<?= set_value('reservasi'); ?>">
                    <?= form_error('reservasi', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="stime" class="form-label text-light">Start Time</label>
                    <input type="time" class="form-control" id="stime" name="stime" value="<?= set_value('email'); ?>">
                    <?= form_error('stime', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12">
                    <label for="etime" class="form-label text-light">End Time</label>
                    <input type="time" class="form-control" id="etime" name="etime" value="<?= set_value('email'); ?>">
                    <?= form_error('etime', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-primary col-lg-3 col-sm-4 my-3 float-start"><a href="<?= base_url('home/facilityDetail'); ?>" style="color:white;text-decoration:none;">Back to details</a></button>
                    <button type="submit" class="btn btn-primary col-lg-2 col-sm-4 my-3 float-end" style="background-color: #BAA360;">Book</button>
                </div>
            </form>
        </div>
    </div>
</div>