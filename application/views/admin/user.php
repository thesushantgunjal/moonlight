<?php
// print_r($users);
?>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card mb-6 table-responsive">
            <div class="card-body">
                <h5 class="text-uppercase py-2">Users List</h5>
                <table class="table table-bordered table-hover table-sm text-center display nowrap" id="example" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-bold">Action</th>
                            <th scope="col" class="fw-bold">Sr No</th>
                            <th scope="col" class="fw-bold">Name</th>
                            <th scope="col" class="fw-bold">Email</th>
                            <th scope="col" class="fw-bold">Password</th>
                            <th scope="col" class="fw-bold">Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $key => $list) {
                        ?>
                            <tr>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="<?= base_url('admin/edit_user') ?>/<?= $list['register_id'] ?>">
                                        <i class='bx bx-edit'></i>
                                    </a>
                                    <a onClick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/delete') ?>/<?= $list['register_id'] ?>">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                                <td><?= $key + 1 ?></td>
                                <td><?= $list['name'] ?></td>
                                <td><?= $list['email'] ?></td>
                                <td><?= $list['password'] ?></td>
                                <td><?= $list['phone_no'] ?></td>
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