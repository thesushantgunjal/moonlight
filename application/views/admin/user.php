<?php
// print_r($users);
?>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card mb-6 table-responsive">
            <div class="card-body">
                <h5 class="text-uppercase py-2">Users List</h5>
                <table class="table table-bordered table-hover table-sm display nowrap" id="example" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th class="fw-bold" width="15%">Action</th>
                            <th class="fw-bold">Sr No</th>
                            <th class="fw-bold">Name</th>
                            <th class="fw-bold">Email</th>
                            <th class="fw-bold">Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $key => $row) {
                        ?>
                            <tr>
                                <td class="text-center">
                                    <a onClick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/delete') ?>/<?= $row['user_id'] ?>">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td>+91 <?= $row['phone'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>