<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Manage Category</h5>
                <form action="<?= base_url('admin/update') ?>" method="POST">
                    <div class="row">
                        <input type="hidden" name="category_id" value="<?= $category_data['category_id'] ?>">
                        <div class="col-md-12">
                            <label for="category_name" class="form-label">Enter Category Name</label>
                            <input class="form-control" type="text" id="category_name" name="category_name"
                                placeholder="Enter Category Name" value="<?= $category_data['category_name'] ?>" required />
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary mt-3 float-end">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
