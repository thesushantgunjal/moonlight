<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="py-2">Update Room</h5>
                <form method="post" action="<?= base_url('admin/update_rooms') ?>" enctype="multipart/form-data" novalidate>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="hidden" name="rooms_id" value="<?= $rooms[0]['rooms_id'] ?? '' ?>">
                            <label for="category" class="form-label">Select Category</label>
                            <select class="form-select" id="category" name="category_id" required>
                                <option selected disabled value="">Choose Category</option>
                                <?php foreach ($category as $row) { ?>
                                    <option value="<?= $row['category_id'] ?>" <?= ($rooms[0]['category_id'] ?? '') == $row['category_id'] ? 'selected' : '' ?>>
                                        <?= $row['category_name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="room_no" class="form-label">Room Number</label>
                            <input class="form-control" type="text" id="room_no" name="rooms_no" placeholder="Enter Room Number"
                                value="<?= $rooms[0]['rooms_no'] ?? '' ?>" required />
                            <div class="invalid-feedback">Please enter a valid room number.</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Room Facilities</label>
                            <?php
                            $facilities = isset($rooms[0]['rooms_facility']) ? explode(',', $rooms[0]['rooms_facility']) : [];
                            $available_facilities = ["Premium Bedding", "Smart TV", "High-Speed Wi-Fi", "Jain-Friendly Ambiance", "24/7 Service"];
                            foreach ($available_facilities as $index => $facility) { ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="rooms_facility[]" value="<?= $facility ?>"
                                        id="facility<?= $index ?>" <?= in_array($facility, $facilities) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="facility<?= $index ?>"><?= $facility ?></label>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-6">
                            <label for="rooms_main_image" class="form-label">Main Room Image</label>
                            <input class="form-control image-input" type="file" id="rooms_main_image" name="rooms_main_image" accept="image/*"
                                <?= isset($rooms[0]['rooms_main_image']) && !empty($rooms[0]['rooms_main_image']) ? '' : 'required' ?> />
                            <div class="invalid-feedback">Please upload a valid image.</div>
                            <img id="preview_main"
                                src="<?= isset($rooms[0]['rooms_main_image']) ? base_url('uploads/' . $rooms[0]['rooms_main_image']) : base_url('uploads/default.jpg') ?>"
                                alt="Main Room Image" class="img-thumbnail mt-2" style="width: 100px; height: 100px;">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="col-md-3">
                                <label class="form-label">Additional Room Image <?= $i ?></label>
                                <input class="form-control image-input" type="file" name="rooms_image<?= $i ?>" accept="image/*"
                                    <?= isset($rooms[0]['rooms_image' . $i]) && !empty($rooms[0]['rooms_image' . $i]) ? '' : 'required' ?> />
                                <div class="invalid-feedback">Please upload an image.</div>
                                <img id="preview_<?= $i ?>"
                                    src="<?= isset($rooms[0]['rooms_image' . $i]) ? base_url('uploads/' . $rooms[0]['rooms_image' . $i]) : base_url('uploads/default.jpg') ?>"
                                    alt="Room Image <?= $i ?>" class="img-thumbnail mt-2" style="width: 100px; height: 100px;">
                            </div>
                        <?php } ?>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <label for="mon_to_fri_rate" class="form-label">Enter Mon To Fri Rate</label>
                            <input class="form-control" type="number" id="mon_to_fri_rate" name="mon_to_fri_rate"
                                value="<?= $rooms[0]['mon_to_fri_rate'] ?? '' ?>" required />
                            <div class="invalid-feedback">Please enter a valid rate.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="sat_to_sun_rate" class="form-label">Enter Sat To Sun Rate</label>
                            <input class="form-control" type="number" id="sat_to_sun_rate" name="sat_to_sun_rate"
                                value="<?= $rooms[0]['sat_to_sun_rate'] ?? '' ?>" required />
                            <div class="invalid-feedback">Please enter a valid rate.</div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update Room</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        'use strict';

        var forms = document.querySelectorAll('form');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                let isValid = true;

                // Validate Main Room Image
                let mainImage = document.getElementById('rooms_main_image');
                let mainImagePreview = document.getElementById('preview_main').getAttribute('src');

                if (!mainImage.files.length && (!mainImagePreview || mainImagePreview.includes('default.jpg'))) {
                    isValid = false;
                    mainImage.classList.add('is-invalid');
                } else {
                    mainImage.classList.remove('is-invalid');
                }

                // Validate Additional Room Images
                for (let i = 1; i <= 4; i++) {
                    let additionalImage = document.querySelector(`input[name="rooms_image${i}"]`);
                    let additionalPreview = document.getElementById(`preview_${i}`).getAttribute('src');

                    if (!additionalImage.files.length && (!additionalPreview || additionalPreview.includes('default.jpg'))) {
                        isValid = false;
                        additionalImage.classList.add('is-invalid');
                    } else {
                        additionalImage.classList.remove('is-invalid');
                    }
                }

                if (!form.checkValidity() || !isValid) {
                    event.preventDefault();
                    event.stopPropagation();
                    alert("Please upload all required images.");
                }

                form.classList.add('was-validated');
            }, false);
        });

        // Image Preview and Reset Validation
        document.querySelectorAll('.image-input').forEach((input) => {
            input.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        let previewId = event.target.name.replace('rooms_', 'preview_');
                        document.getElementById(previewId).src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                    event.target.classList.remove('is-invalid');
                } else {
                    event.target.value = "";
                    event.target.classList.add('is-invalid');
                    alert("Please select a valid image file.");
                }
            });
        });

    })();
</script>