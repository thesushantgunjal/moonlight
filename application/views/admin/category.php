<div class="row">
    <div class="col-md-12 mb-3">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class='bx bx-plus-circle me-2'></i>Add Category
        </button>
    </div>
</div>

<!-- Add Category Modal -->
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Category</h1>
                <button type="button" class="btn-close rounded-circle bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/save_category') ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="category_name" class="form-label">Enter Category Name</label>
                            <input class="form-control" type="text" id="category_name" name="category_name"
                                placeholder="Enter Category Name" autofocus required />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card mb-6 table-responsive">
            <div class="card-body">
                <h5 class="py-2">Category List</h5>
                <table class="table table-bordered table-hover table-sm text-center display nowrap" id="example" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-bold">Action</th>
                            <th scope="col" class="fw-bold">Sr No</th>
                            <th scope="col" class="fw-bold">Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($category as $key => $row) {
                        ?>
                            <tr>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="<?= base_url('admin/edit_category') ?>/<?= $row['category_id'] ?>">
                                        <i class='bx bx-edit'></i>
                                    </a>
                                    <a onClick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger" href="<?= base_url() ?>admin/category_delete/<?= $row['category_id'] ?>">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['category_name'] ?></td>
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