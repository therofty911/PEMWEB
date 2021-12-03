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
                            <th scope="col">Operation</th>
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
                                <a href="<?= base_url('home/reqUser'); ?>" class="btn btn-sm btn-success">Approve</a>
                                <a href="<?= base_url('home/reqUser'); ?>" class="btn btn-sm btn-danger my-2">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>