<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Manage Category</h5>
                <form action="<?= base_url('admin/update') ?>" method="POST">
                    <div class="row">
                        <input type="hidden" name="category_id" value="<?= $category_data['category_id'] ?>">
                        <div class="col-md-4">
                            <label for="category_name" class="form-label">Enter Category Name</label>
                            <input class="form-control" type="text" id="category_name" name="category_name"
                                placeholder="Enter Category Name" value="<?= $category_data['category_name'] ?>" required />
                        </div>
                        <div class="col-md-4">
                            <label for="rate1" class="form-label">Mon to Fri Rate</label>
                            <input class="form-control" type="text" id="rate1" name="rate1"
                                placeholder="Enter Mon to Fri Rate" value="<?= $category_data['rate1'] ?>" required />
                        </div>
                        <div class="col-md-4">
                            <label for="rate2" class="form-label">Sat to Sun Rate</label>
                            <input class="form-control" type="text" id="rate2" name="rate2"
                                placeholder="Enter Sat to Sun Rate" value="<?= $category_data['rate2'] ?>" required />
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary mt-3 float-end">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
