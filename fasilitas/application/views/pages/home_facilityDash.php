<div class="container">
    <div class="row">
        <div class="card position-absolute top-50 start-50 translate-middle col-xs-12 col-sm-12 col-md-12 col-lg-9 rounded" style="background-color: #000B2E;color:white;">
            <div class="title" style="margin: 5px;">
                <h3 style="color: #BAA360;">Facilities Listing</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('home/book'); ?>" class="btn btn-success btn-sm my-2" style="color:antiquewhite;font-size:20px;margin-right:20px;">Add Facilities</a>
            </div>
            <div class="card-body">
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
                        <tr class="text-center">
                            <th scope="row">1</th>
                            <td>
                                <img src="https://cdn.discordapp.com/attachments/891579314401869864/897075630653456404/unknown.png" class="img-fluid" alt="" width="500">
                            </td>
                            <td>Ga tau apa</td>
                            <td>
                                <a href="<?= base_url('home'); ?>" class="btn btn-sm btn-success">Edit</a>
                                <a href="<?= base_url('home/book'); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>