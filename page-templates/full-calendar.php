<?php
   /*
    * Template Name: Full-calendar
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper contact_banner full_calendar_banner">
   <div class="container">
      <?php
         $full_calendar_heading_page = get_field('full_calendar_heading_page');
         if(!empty($full_calendar_heading_page)) {
            ?> 
      <div class="title">
         <?php  if($full_calendar_heading_page) { ?>
         <h1 class="second_head"><?php echo $full_calendar_heading_page;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
      <div class="row full_calendar_top_row">
         <div class="col-lg-7 col-xl-8">
            <?php
               $calendar_image = get_field('calendar_image');
               if(!empty($calendar_image)) {
                  ?> 
            <div class="left_banner_img">
               <?php  if($calendar_image) { ?>
               <img src="<?php echo $calendar_image;?>" alt="img" class="img-fluid">
               <?php } ?>
            </div>
            <?php } ?>
         </div>
         <div class="col-lg-5 col-xl-4">
            <div class="purchase_popup purchase_add_on">
               <div class="popup_inner">
                  <div class="purchase_popup_top">
                     <div class="icon">
                        <img src="<?php echo $file_path; ?>/assets/images/add_ons_img/cart_icon.png" alt="icon" class="img-fluid">
                     </div>
                     <h3>Purchase Add-on</h3>
                  </div>
                  <form id="edd_purchase_4381" class="edd_download_purchase_form edd_purchase_4381" method="post">
                     <div class="edd_price_options edd_single_mode">
                        <ul>
                           <li id="edd_price_option_4381_singlesite"><label for="edd_price_option_4381_1"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4381_1" class="edd_price_option_4381" value="1" data-price="29.00">&nbsp;<span class="edd_price_option_name">Single Site</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$29.00</span></label></li>
                           <li id="edd_price_option_4381_upto5sites"><label for="edd_price_option_4381_2"><input type="radio" checked="checked" name="edd_options[price_id][]" id="edd_price_option_4381_2" class="edd_price_option_4381" value="2" data-price="49.00">&nbsp;<span class="edd_price_option_name">Up to 5 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$49.00</span></label></li>
                           <li id="edd_price_option_4381_upto25sites"><label for="edd_price_option_4381_3"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4381_3" class="edd_price_option_4381" value="3" data-price="99.00">&nbsp;<span class="edd_price_option_name">Up to 25 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$99.00</span></label></li>
                           <li id="edd_price_option_4381_upto50sites"><label for="edd_price_option_4381_4"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4381_4" class="edd_price_option_4381" value="4" data-price="179.00">&nbsp;<span class="edd_price_option_name">Up to 50 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$179.00</span></label></li>
                           <li id="edd_price_option_4381_upto100sites"><label for="edd_price_option_4381_5"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4381_5" class="edd_price_option_4381" value="5" data-price="299.00">&nbsp;<span class="edd_price_option_name">Up to 100 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$299.00</span></label></li>
                        </ul>
                     </div>
                     <div class="edd_purchase_submit_wrapper">
                        <button class="edd-add-to-cart button blue edd-submit edd-has-js" data-nonce="26e09e07f8" data-timestamp="1698315753" data-token="9de2dc664eaf28d35e251fa3930359d30159001f78c45650f09d4f4474c0cee8" data-action="edd_add_to_cart" data-download-id="4381" data-variable-price="yes" data-price-mode="single" data-price="0"><span class="edd-add-to-cart-label">Purchase</span> <span class="edd-loading" aria-label="Loading"></span></button> 
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="bottom_purchase_bundle_wrapper">
   <div class="container">
      <div class="my_container_375 ">
         <div class="row bottom_purchase_bundle_row">
            <div class="col-lg-7 col-xl-8">
               <?php
                  $heading_what_do_you_get = get_field('heading_what_do_you_get');
                  $what_do_u_get_description = get_field('what_do_u_get_description');
                  if(!empty($heading_what_do_you_get)) {
                     ?> 
               <div class="left_banner_img">
                  <div class="left_points_col">
                     <?php  if($heading_what_do_you_get) { ?>
                     <h2><?php echo $heading_what_do_you_get;?></h2>
                     <?php } if($what_do_u_get_description) { ?>
                     <ul><?php echo $what_do_u_get_description;?>
                     </ul>
                  </div>
                  <?php } ?>
               </div>
               <?php } ?>
            </div>
            <div class="col-lg-5 col-xl-4">
               <div class="purchase_popup purchase_bundle">
                  <div class="popup_inner">
                     <div class="purchase_popup_top">
                        <div class="icon">
                           <img src="<?php echo $file_path; ?>/assets/images/add_ons_img/cart_icon.png" alt="icon" class="img-fluid">
                        </div>
                        <h3>Purchase Bundle</h3>
                        <p>Get access to all add-ons by purchasing an All Access Pass here.</p>
                     </div>
                     <form id="edd_purchase_4383-2" class="edd_download_purchase_form edd_purchase_4383" method="post">
                        <div class="edd_price_options edd_single_mode">
                           <ul>
                              <li id="edd_price_option_4383_singlesite-2"><label for="edd_price_option_4383_1-2"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4383_1-2" class="edd_price_option_4383" value="1" data-price="49.00">&nbsp;<span class="edd_price_option_name">Single Site</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$49.00</span></label></li>
                              <li id="edd_price_option_4383_upto5sites-2"><label for="edd_price_option_4383_2-2"><input type="radio" checked="checked" name="edd_options[price_id][]" id="edd_price_option_4383_2-2" class="edd_price_option_4383" value="2" data-price="79.00">&nbsp;<span class="edd_price_option_name">Up to 5 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$79.00</span></label></li>
                              <li id="edd_price_option_4383_upto25sites-2"><label for="edd_price_option_4383_3-2"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4383_3-2" class="edd_price_option_4383" value="3" data-price="149.00">&nbsp;<span class="edd_price_option_name">Up to 25 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$149.00</span></label></li>
                              <li id="edd_price_option_4383_upto50sites-2"><label for="edd_price_option_4383_4-2"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4383_4-2" class="edd_price_option_4383" value="4" data-price="279.00">&nbsp;<span class="edd_price_option_name">Up to 50 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$279.00</span></label></li>
                              <li id="edd_price_option_4383_upto100sites-2"><label for="edd_price_option_4383_5-2"><input type="radio" name="edd_options[price_id][]" id="edd_price_option_4383_5-2" class="edd_price_option_4383" value="5" data-price="479.00">&nbsp;<span class="edd_price_option_name">Up to 100 Sites</span><span class="edd_price_option_sep">&nbsp;–&nbsp;</span><span class="edd_price_option_price">$479.00</span></label></li>
                           </ul>
                        </div>
                        <div class="edd_purchase_submit_wrapper">
                           <button class="edd-add-to-cart button blue edd-submit edd-has-js" data-nonce="6c1252aa94" data-timestamp="1698315753" data-token="9de2dc664eaf28d35e251fa3930359d30159001f78c45650f09d4f4474c0cee8" data-action="edd_add_to_cart" data-download-id="4383" data-variable-price="yes" data-price-mode="single" data-price="0"><span class="edd-add-to-cart-label">Purchase</span> <span class="edd-loading" aria-label="Loading"></span></button> 
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sc_support_wrapper full_calendar_buy_wrapper">
   <div class="container">
      <?php
         $calender_buy_heading = get_field('calender_buy_heading');
         $calender_buy_subheading = get_field('calender-buy_subheading');
         $google_calendarlink = get_field('google-calendarlink');
         $google_calendar = get_field('google_calendar');
         $full_calendar = get_field('full_calendar');
         $full_calendar_url = get_field('full_calendar-url');
         if(!empty($calender_buy_heading) || !empty($support_main_subtitle) || !empty($google_calendar) || !empty($full_calendar) ) {
          ?>
      <div class="sc_support_row">
         <?php if($calender_buy_heading) { ?>
         <h2><?php echo $calender_buy_heading;?></h2>
         <?php } ?>
         <?php if($calender_buy_subheading) { ?>
         <p><?php echo $calender_buy_subheading;?></p>
         <?php } 
            ?>
         <div class="sc_support_btn">
            <?php if($google_calendar) { ?>
            <a href="<?php echo $google_calendarlink;?>" class="secondary_btn"><?php echo $google_calendar;?> <i class="icon-sc-arrowb"></i></a>
            <?php } ?>
            <?php if($full_calendar) { ?>
            <a href="<?php echo $full_calendar_url;?>" class="primary_btn"><?php echo $full_calendar;?>  <i class="icon-sc-arrow"></i></a>
            <?php } 
               ?>
         </div>
      </div>
      <?php } ?>
   </div>
   <div class="spshape">
      <img src="<?php echo $file_path; ?>/assets/images/home_page_img/sc_circle_line_shape.png" alt="shape" class="img-fluid">
   </div>
</section>
<section class="guarantee_wrapper">
   <div class="container">
   <?php
      $money_back_heading = get_field('money_back_heading' ,'option');
      $money_back_desription = get_field('money_back_desription' ,'option');
      if(!empty($money_back_heading) || !empty($money_back_desription) ) {
         ?> 
   <div class="guarantee_disc">
      <?php if($money_back_heading) { ?>
      <h2 class="second_head"><?php echo $money_back_heading;?></h2>
      <?php } if($money_back_desription) { ?>
      <p><?php echo $money_back_desription;?></p>
      <?php } ?>  
   </div>
   <?php } ?>  
   <div class="guarantee_badge">
      <img src="<?php echo $file_path; ?>/assets/images/add_ons_img/guarantee_badge.png" alt="img" class="img-fluid">
   </div>
</section>
<section class="faq_wrapper">
   <div class="container">
      <?php
         $fre_question = get_field('fre-question', 'option');
         if(!empty($fre_question)   ) {
            ?> 
      <div class="title">
         <?php  
            if($fre_question) {
            ?>	
         <h2 class="second_head"><?php echo $fre_question;?></h2>
         <?php } ?>	
      </div>
      <?php } ?>     
      <div class="row faq_row">
         <div class="col-lg-8">
            <div class="left_content">
               <?php 
                  if( have_rows('freq-asked-ques','option') ){ ?>
               <div class="acc-collapse-wrapper">
                  <?php
                     while( have_rows('freq-asked-ques','option') ) : the_row();
                     
                        $freq_asked_ques = get_sub_field('freq-ques' ,'option');
                        $freq_ans = get_sub_field('freq-ans','option');
                        if(!empty($freq_asked_ques) || !empty($freq_ans)  ) {         
                        ?>
                  <div class="acc-main-content">
                     <div class="acc-head">
                        <?php  
                           if($freq_asked_ques) {
                           ?>	
                        <h6><?php echo $freq_asked_ques;?></h6>
                        <?php } ?>	
                     </div>
                     <div class="acc-content">
                        <?php  
                           if($freq_ans) {
                           ?>	
                        <p><?php echo $freq_ans;?></p>
                        <?php } ?>
                     </div>
                  </div>
                  <?php
                     }                     
                     endwhile;
                     }
                     ?>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="right_content">
               <img src="<?php echo $file_path; ?>/assets/images/home_page_img/faq_right_img.png" alt="img">
            </div>
         </div>
      </div>
   </div>
   <div class="faq_shape">
      <div class="shape shape1">
         <img src="<?php echo $file_path; ?>/assets/images/home_page_img/ftr_arrow.png" alt="shape" class="img-fluid">
      </div>
   </div>
</section>
<?php
get_footer();