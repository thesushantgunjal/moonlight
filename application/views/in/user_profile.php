<section>
    <div class="cs_height_100 cs_height_lg_80"></div>
    <div class="container py-5">
        <div class="row cs_gap_y_50">
            <div class="col-lg-4">
                <form class="" action="<?=base_url()?>in/check_availability" method="post">
                    <div class="row g-3">
                        <div class=" col-md-12">
                            <div class="cs_form_item_btn">
                                <a href="<?=base_url('in/user_dashboard')?>"
                                    class="cs_btn cs_style_1 cs_fs_15 cs_medium cs_radius_5 w-100">
                                    Dashboard
                                </a>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="cs_form_item_btn">
                                <a href="<?=base_url('in/user_profile')?>"
                                    class="cs_btn cs_style_1 cs_fs_15 cs_medium cs_radius_5 w-100">
                                    User Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-8">
                <div class="card card-body shadow border-0">
                    <h5 class="text-uppercase fw-semibold">Manage Profile</h5>
                    <hr />
                    <form action="">
                        <div class="row cs_gap_y_60 mt-3">
                            <div class="col-md-4 overflow-hidden">
                                <img class="w-100 h-100"
                                    src="http://localhost/Git/moonlight/assets/web/assets/img/icons/bed-alt.svg"
                                    alt="Profile Img">
                            </div>
                            <div class="col-md-8">
                                <div class="cs_form_item cs_date_item position-relative border bg-light">
                                    <input type="text" name="name"
                                        class="form-control w-100 border-0 shadow-none position-relative"
                                        placeholder="Your Name">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <div class="cs_form_item cs_date_item position-relative border bg-light">
                                            <input type="email" name="email"
                                                class="form-control w-100 border-0 shadow-none position-relative"
                                                placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="cs_form_item cs_date_item position-relative border bg-light">
                                            <input type="number" name="phone_no"
                                                class="form-control w-100 border-0 shadow-none position-relative"
                                                placeholder="Your Phone No">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="cs_form_item cs_date_item position-relative border bg-light">
                                            <input type="password" name="password"
                                                class="form-control w-100 border-0 shadow-none position-relative"
                                                placeholder="*********">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="cs_form_item cs_date_item position-relative border bg-light">
                                            <input type="file" name="profile_img"
                                                class="form-control w-100 border-0 shadow-none position-relative"
                                                placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h5 class="text-uppercase fw-semibold mt-3">Adhar Card Details</h5>
                        <div class="row cs_gap_y_60 mt-3">
                            <div class="col-md-4 overflow-hidden">
                                <img class="w-100 h-100"
                                    src="http://localhost/Git/moonlight/assets/web/assets/img/icons/bed-alt.svg"
                                    alt="Profile Img">
                            </div>
                            <div class="col-md-8">
                                <div class="cs_form_item cs_date_item position-relative border bg-light">
                                    <input type="number" name="adhar_no"
                                        class="form-control w-100 border-0 shadow-none position-relative"
                                        placeholder="Your Adhar No">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <div class="cs_form_item cs_date_item position-relative border bg-light">
                                            <input title="Add Adhar Card" type="file" name="adhar_img"
                                                class="form-control w-100 border-0 shadow-none position-relative"
                                                placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cs_form_item_btn">
                            <button
                                class="cs_btn cs_style_1 cs_fs_15 cs_medium cs_radius_5 float-end">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>