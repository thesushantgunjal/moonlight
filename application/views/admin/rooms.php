<div class="row">
    <div class="col-md-12 mb-3">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class='bx bx-plus-circle me-2'></i>Add Room</button>
    </div>
</div>
<!-- Add Room Modal -->

<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Room</h1>
                <button type="button" class="btn-close rounded-circle bg-dark" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/save_category') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="category" class="form-label">Select Category</label>
                            <select class="form-select" id="category" name="category" aria-label="Select category">
                                <option selected>Choose Category</option>
                                <option value="Standard">Standard</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="room_no" class="form-label">Enter Room Number</label>
                            <input class="form-control" type="text" id="room_no" name="room_no"
                                placeholder="Enter Room Number" required />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Room</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="card mb-6 table-responsive">
            <div class="card-body">
                <h5 class="text-uppercase py-2">Rooms List</h5>
                <table class="table table-bordered table-hover table-sm text-center display nowrap" id="example"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-bold">Sr No</th>
                            <th scope="col" class="fw-bold">Category Name</th>
                            <th scope="col" class="fw-bold">Rate</th>
                            <th scope="col" class="fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>dfghjk</td>
                            <td>dfghjk</td>
                            <td>dfghjk</td>
                            <td>dfghjk</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>