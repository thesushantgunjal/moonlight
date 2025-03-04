<?php
// print_r($category_data);
?>
<div class="row">
   <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5>Manage Category</h5>
            <form action="<?=base_url('admin/update')?>" method="POST">
            <div class="row">
                <input type="hidden" name="category_id" value="<?=$category_data['category_id']?>">
                    <div class="col-md-6">
                    <label for="category_name" class="form-label">Enter New Category</label>
                    <input class="form-control" type="text" id="category_name" name="category_name"
                        placeholder="Enter New Category" autofocus value="<?=$category_data['category_name']?>" required />
                    </div>
                    <div class="col-md-6">
                    <label for="rate" class="form-label">Enter Rate</label>
                    <input class="form-control" type="text" id="rate" name="rate"
                        placeholder="Enter Rate" autofocus value="<?=$category_data['rate']?>" required />
                    </div>
                   </div>
                   <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary mt-3 float-end">Update Category</button>
            </form>
        </div>
    </div>
   </div>
</div>