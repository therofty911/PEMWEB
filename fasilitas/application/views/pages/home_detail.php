
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4 mb-4" style="color: #BAA360;">Detail Fasilitas</h2>
        </div>
        <div class="col-md-12 col-lg-12">
            <!-- Bootstrap 5 card box -->
            <div class="card-box text-center">
                <div class="card-thumbnail">
                    <img src="<?php echo  base_url() . $data->Image ?>" class="img-fluid" alt="">
                </div>
                <h3><a href="#" class="mt-2" style="color: #FFD14B;"><?php echo $data->Name ?></a></h3>
                <p class="text-light"><?php echo $data->Detail ?></p>
                <div class="text-center">
                    <a href="<?= base_url('home'); ?>" class="btn btn-sm btn-danger float-right mx-2">Back to list</a>
                    <a href="<?= base_url("home/book/$data->Facility_ID"); ?>" class="btn btn-sm btn-danger float-right mx-2">Book</a>
                </div>
            </div>
        </div>
    </div>
</div>