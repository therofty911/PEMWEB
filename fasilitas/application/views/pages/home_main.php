<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4 mb-4" style="color: #BAA360;">Facilities List</h2>
        </div>
        <?php foreach ($data as $row) : ?>
            <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                    <div class="card-thumbnail">
                        <img src="<?= $row['Image'] ?>" class="img-fluid" alt="">
                    </div>
                    <h3><a href="#" class="mt-2" style="color: #FFD14B;"><?= $row['Name'] ?></a></h3>
                    <p class="text-light"><?= $row['Detail'] ?></p>
                    <a href="<?= base_url('home/facilityDetail'); ?>" class="btn btn-sm btn-danger float-right">Read more >></a>
                </div>
            </div>
        <?php endforeach ?>


    </div>
</div>