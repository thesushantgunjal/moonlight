<!-- Room List Table -->
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card mb-6 table-responsive">
            <div class="card-body">
                <h5 class="text-uppercase py-2">Rooms List</h5>
                <table class="table table-bordered table-hover table-sm text-center display nowrap" id="example"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-bold" width="13%">Action</th>
                            <th scope="col" class="fw-bold">Sr No</th>
                            <th scope="col" class="fw-bold">Category Name</th>
                            <th scope="col" class="fw-bold">Room No</th>
                            <th scope="col" class="fw-bold">Facilities</th>
                            <th scope="col" class="fw-bold">Main Image</th>
                            <th scope="col" class="fw-bold">Booking Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rooms as $key => $row) { ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>admin/edit_rooms/<?= $row['rooms_id'] ?>" class="btn btn-primary btn-sm"><i class="bx bxs-edit"></i></a>
                                    <a href="<?= base_url() ?>admin/edit_rooms/<?= $row['rooms_id'] ?>" class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i></a>
                                </td>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['category_name'] ?></td>
                                <td><?= $row['rooms_no'] ?></td>
                                <td><?= $row['rooms_facility'] ?></td>
                                <td><img src="<?= base_url() ?>uploads/<?= $row['rooms_main_image'] ?>" width="100" alt=""></td>
                                <td><?= $row['booking_status'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>