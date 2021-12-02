<div class="container">
    <div class="row">
        <div class="card position-absolute top-50 start-50 translate-middle col-xs-12 col-sm-12 col-md-12 col-lg-9 rounded" style="background-color: #000B2E;color:white;">
            <div class="title" style="margin: 5px;">
                <h3 style="color: #BAA360;">User Listing</h3>
            </div>
            <div class="card-body">
                <table class="table table-light">
                    <thead>
                        <tr class="text-center">
                            <th scope=" col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">1</th>
                            <td>Kijang juana</td>
                            <td>kijang@lakik.co.id</td>
                            <td>user</td>
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