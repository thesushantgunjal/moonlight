<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase py-2">Add New Room</h5>
                <form method="post" action="<?= base_url('admin/save_rooms') ?>" enctype="multipart/form-data" novalidate>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="category" class="form-label">Select Category</label>
                            <select class="form-select" id="category" name="category_id" required>
                                <option selected disabled value="">Choose Category</option>
                                <?php foreach($category as $key => $row){ ?>
                                <option value="1"><?=$row['category_name']?></option>
                            <?php } ?>
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="room_no" class="form-label">Room Number</label>
                            <input class="form-control" type="text" id="room_no" name="rooms_no" placeholder="Enter Room Number" required />
                            <div class="invalid-feedback">Please enter a valid room number.</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Room Facilities</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rooms_facility" value="Premium Bedding" id="facility1" required>
                                <label class="form-check-label" for="facility1">Premium Bedding</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rooms_facility" value="Smart TV" id="facility2" required>
                                <label class="form-check-label" for="facility2">Smart TV</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rooms_facility" value="High-Speed Wi-Fi" id="facility3" required>
                                <label class="form-check-label" for="facility3">High-Speed Wi-Fi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rooms_facility" value="Jain-Friendly Ambiance" id="facility4" required>
                                <label class="form-check-label" for="facility4">Jain-Friendly Ambiance</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rooms_facility" value="24/7 Service" id="facility5" required>
                                <label class="form-check-label" for="facility5">24/7 Service</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rooms_main_image" class="form-label">Main Room Image</label>
                            <input class="form-control" type="file" id="rooms_main_image" name="rooms_main_image" required />
                            <div class="invalid-feedback">Please upload a main room image.</div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <label class="form-label">Additional Room Image 1</label>
                            <input class="form-control" type="file" name="rooms_image1" required />
                            <div class="invalid-feedback">Please upload an image.</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Additional Room Image 2</label>
                            <input class="form-control" type="file" name="rooms_image2" required />
                            <div class="invalid-feedback">Please upload an image.</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Additional Room Image 3</label>
                            <input class="form-control" type="file" name="rooms_image3" required />
                            <div class="invalid-feedback">Please upload an image.</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Additional Room Image 4</label>
                            <input class="form-control" type="file" name="rooms_image4" required />
                            <div class="invalid-feedback">Please upload an image.</div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Save Room</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        'use strict';
        var forms = document.querySelectorAll('form');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>