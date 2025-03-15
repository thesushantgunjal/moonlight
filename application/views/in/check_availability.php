 <!-- Start Page Heading Section -->
 <section class="cs_page_heading cs_size_2 cs_primary_bg cs_bg_filed cs_center"
     data-src="<?= base_url() ?>assets/web/assets/img/page_heading_bg_rooms.jpg">
     <div class="container">
         <h1 class="cs_white_color text-center mb-0 cs_fs_67">Room Search Results</h1>
     </div>
 </section>
 <!-- End Page Heading Section -->

 <!-- Start Room Details -->
 <section>
     <div class="cs_height_100 cs_height_lg_80"></div>
     <div class="container">
         <div class="row cs_gap_y_50">
             <div class="col-lg-4">
                 <form class="sticky-top" action="<?=base_url()?>in/check_availability" method="post">
                     <div class="row g-3">
                         <div class="col-md-12">
                             <div class="cs_form_item cs_date_item position-relative border bg-light p-2">
                                 <input type="date" title="Check In:" name="check_in_date"
                                     class="form-control w-100 border-0 shadow-none position-relative" required>
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="cs_form_item cs_date_item position-relative border bg-light p-2">
                                 <input type="date" title="Check Out:" name="check_out_date"
                                     class="form-control w-100 border-0 shadow-none position-relative">
                             </div>
                         </div>

                         <div class=" col-md-12">
                             <div class="cs_form_item cs_date_item position-relative border bg-light">
                                 <select name="category_id"
                                     class="form-select w-100 border-0 shadow-none position-relative">
                                     <option class="bg-black" selected disabled>Select Room</option>
                                     <?php foreach($category as $key => $row){ ?>
                                     <option value="<?=$row['category_id']?>" class="bg-black">
                                         <?=$row['category_name']?></option>
                                     <?php } ?>
                                 </select>
                             </div>
                         </div>
                         <div class=" col-md-12">
                             <div class="cs_form_item cs_date_item position-relative border bg-light">
                                 <input type="number" name="adults" min="1" max="10"
                                     class="form-control w-100 border-0 shadow-none position-relative"
                                     placeholder="Adults">
                             </div>
                         </div>
                         <div class=" col-md-12">
                             <div class="cs_form_item_btn">
                                 <button class="cs_btn cs_style_1 cs_fs_15 cs_medium cs_radius_5 w-100">
                                     Check Availability
                                 </button>
                             </div>
                         </div>
                     </div>
                 </form>

             </div>
             <div class="col-lg-8">
                 <div class="row cs_gap_y_60">
                     <?php foreach ($rooms as $key => $row) { ?>
                     <div class="col-xl-6 col-lg-12 col-md-6">
                         <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                             <a href="<?= base_url() ?>in/room_detail"
                                 class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                                 <img src="<?= base_url() ?>uploads/<?=$row['rooms_main_image']?>" alt="Room">
                                 <span class="cs_card_btn position-absolute cs_zindex_2">
                                     <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                                         <b>Details View</b>
                                         <span>
                                             <i>
                                                 <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                         fill="currentColor"></path>
                                                 </svg>
                                             </i>
                                             <i>
                                                 <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                         d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                         fill="currentColor"></path>
                                                 </svg>
                                             </i>
                                         </span>
                                     </span>
                                 </span>
                             </a>
                             <div class="cs_card_info position-relative">
                                 <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a
                                         href="<?= base_url() ?>in/room_detail"><?= $row['category_name'] ?></a></h2>
                                 <div class="cs_card_price cs_mb_17">
                                     <span class="cs_primary_color">From</span>
                                     <span class="cs_accent_color cs_fs_38 cs_primary_font">&#8377;
                                         <?= $row['total_price'] ?></span>
                                 </div>
                                 <ul class="cs_card_list cs_mp_0">
                                     <li>110 Sq</li>
                                     <li>3-5 Guests</li>
                                     <li>Free Wi-Fi</li>
                                 </ul>
                                 <div class="cs_form_item_btn mt-3">
                                 <a href="<?=base_url()?>in/complete_reservation/<?=$rooms[0]['rooms_id']?>" class="cs_btn cs_style_1 cs_fs_15 cs_medium cs_radius_5 w-100">
                                     Book Now
                                 </a>
                             </div>
                             </div>
                         </div>
                     </div>
                     <?php } ?>
                 </div>
             </div>
         </div>
     </div>
     <div class="cs_height_150 cs_height_lg_80"></div>
 </section>
 <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('input[type="date"]').forEach(input => input.value = '');
    });
</script>

 <!-- End Room Details -->