<?php
   /*
    * Template Name: home-page
    */
   
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="home_banner_wrapper">
   <div class="container" >
      <?php
         $theme_main_title = get_field('home_page_heading');
         $theme_main_subtitle = get_field('sub-heading');
         $theme_sec_btn_url = get_field('start-w-btn');
         $theme_sec_btn_text = get_field('theme_sec_btn_text');
         $theme_demo_btn_url = get_field('start-w-demo');
         $theme_demo_btn_text = get_field('theme_demo_btn_text');
         if(!empty($theme_main_title) || !empty($theme_main_subtitle) || !empty($theme_sec_btn_text) || !empty($theme_demo_btn_text) ) {
            ?> 
      <div class="banner_title">
         <?php if($theme_main_title) { ?>
         <h1><?php echo $theme_main_title;?></h1>
         <?php } ?>
         <?php if($theme_main_subtitle) { ?>
         <p><?php echo $theme_main_subtitle;?></p>
         <?php } 
            if(!empty($theme_sec_btn_text) || !empty($theme_demo_btn_text)) {
            ?>
         <div class="banner_btn">
            <?php 
               if($theme_sec_btn_text) {
               ?>
            <a href="<?php echo $theme_sec_btn_url; ?>" class="primary_btn"><i class="icon-sc-wp-icon"></i> <?php echo $theme_sec_btn_text; ?> <i class="icon-sc-arrow"></i></a>
            <?php } 
               if($theme_demo_btn_text) {
               ?>	
            <a href="<?php echo $theme_demo_btn_url; ?>" class="secondary_btn">  <?php echo $theme_demo_btn_text; ?><i class="icon-sc-redirect"></i></a>
            <?php } ?>	
         </div>
         <?php } ?>
      </div>
      <?php }
         if( have_rows('silder_1') ){ ?>
      <div class="sc_home_slider">
         <div class="swiper sc_swiper_container">
            <div class="swiper-wrapper">
               <?php
                  while( have_rows('silder_1') ) : the_row();
                     $slider_photos = get_sub_field('photos');
                     if($slider_photos) {
                     ?>
               <div class="swiper-slide">
                  <img src="<?php echo $slider_photos; ?>" alt="slide">
               </div>
               <?php
                  }
                  endwhile;
                  }
                  ?>            
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </div>
</section>
<section class="ftr_offer_wrapper">
   <div class="container">
      <?php
         $theme_download_description = get_field('download_description');
         $theme_slider_fearture = get_field('offer_heading');
         if(!empty($theme_download_description) || !empty($theme_slider_fearture)) {
            ?> 
      <div class="title">
         <div class="upper_title">
            <?php if($theme_download_description) { ?>
            <p><?php echo $theme_download_description; ?></p>
            <?php } ?>           
         </div>
         <?php if($theme_slider_fearture) { ?>
         <h2 class="second_head"><?php echo $theme_slider_fearture; ?></h2>
         <?php } ?>
      </div>
      <?php } ?>
      <div class="ftr_item_row row">
         <?php
            if( have_rows('feature_we_offer') ){
               while( have_rows('feature_we_offer') ) : the_row();            
                  $features_sim = get_sub_field('feature_image');
                  $features_main = get_sub_field('feature_heading');
                  $features_des = get_sub_field('feature_description');                                    
                  ?>
         <div class="col-sm-6 col-lg-4 ftr_col">
            <div class="ftr_offer_item">
               <div class="ftr_offer_item_inner">
                  <?php if($features_sim) {                     
                     ?>
                  <div class="thumbnail">
                     <img src="<?php echo $features_sim; ?>" alt="thumbnail">
                  </div>
                  <?php }  ?>
                  <div class="text_content">
                     <?php if($features_main) {                     
                        ?>
                     <h4> <?php echo $features_main; ?></h4>
                     <?php } if($features_des){ ?>
                     <p><?php echo $features_des; ?></p>
                     <?php }  ?>
                  </div>
               </div>
            </div>
         </div>
         <?php
            endwhile;
            }
            ?>  
      </div>
   </div>
   <div class="ftr_shape">
      <div class="shape shape1">
         <img src="<?php echo $file_path; ?>/assets/images/home_page_img/dot_squre.png" alt="shape" class="img-fluid">
      </div>
      <div class="shape shape2">
         <img src="<?php echo $file_path; ?>/assets/images/home_page_img/ftr_arrow.png" alt="shape" class="img-fluid">
      </div>
   </div>
</section>
<section class="vrt_slider_wrapper">
   <div class="container">
      <div class="row  vrt_slider_row">
         <div class="col-lg-5 sc_col">
            <?php
               $testimoinal_heading = get_field('testimoinal-heading');
               $testimoinal_subtitle = get_field('testimoinal-subtitle');
               if(!empty($testimoinal_heading) || !empty($testimoinal_subtitle)) {
                  ?>
            <div class="left_content">
               <?php if($testimoinal_heading) {                     
                  ?>
               <h2 class="second_head"><?php echo $testimoinal_heading; ?></h2>
               <?php } if($testimoinal_subtitle) { ?>
               <p><?php echo $testimoinal_subtitle; ?></p>
               <?php }  ?>
            </div>
            <?php } ?>
         </div>
         <div class="col-lg-7 sc_col">
            <div class="testimonial-section">
               <div class="swiper-container swiper-vertical-slider">
                  <div class="swiper-wrapper">
                     <?php
                        if (have_rows('testimoinal')){
                           while (have_rows('testimoinal')) : the_row();
                           $testimoinal_description = get_sub_field('testimoinal-description');
                           $testimoinal_photo = get_sub_field('testimoinal-auth-photo');
                           $testimoinal_name = get_sub_field('testimoinal-name');
                           $testimoinal_author = get_sub_field('testimoinal-author');
                           $testimoinal_date = get_sub_field('testimoinal-date');
                              ?> 
                     <div class="swiper-slide">
                        <div class="verticle-slider-content">
                           <?php if($testimoinal_description) {                     
                              ?>
                           <p><?php echo $testimoinal_description;?></p>
                           <?php } ?>
                           <div class="verticle-btm-content">
                              <div class="verticle-btm-content-left">
                                 <div class="verticle-btm-img">
                                    <?php if($testimoinal_photo) {                     
                                       ?>
                                    <img src="<?php echo $testimoinal_photo;?>" alt="slide">
                                    <?php } ?>
                                 </div>
                                 <div class="verticle-btm-name">
                                    <?php if($testimoinal_name) {                     
                                       ?>
                                    <h5><?php echo $testimoinal_name;?></h5>
                                    <?php } if($testimoinal_author) { ?>
                                    <h6><?php echo $testimoinal_author;?></h6>
                                    <?php }  ?>
                                 </div>
                              </div>
                              <div class="verticle-btm-date">
                                 <?php  if($testimoinal_date) { ?>
                                 <h6><?php echo $testimoinal_date;?></h6>
                                 <?php }  ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        endwhile;
                        }                        
                        ?>
                  </div>
                  <div class="swiper-pagination"></div>
               </div>
            </div>
         </div>
      </div>
      <?php 
         $free_plugin_text = get_field('free-plugin-text');
         $free_plugin_btn = get_field('free-plugin-btn');
         $try_demo_text = get_field('try-demo-text');
         $try_demo_btn = get_field('try-demo-btn');
              if(!empty($theme_sec_btn_text) || !empty($theme_demo_btn_text)) {
              ?>
      <div class="vrt_slider_btn_row">
         <?php 
            if($free_plugin_text) {
            ?>
         <a href="<?php echo $free_plugin_btn; ?>" class="primary_btn"><i class="icon-sc-wp-icon"></i> <?php echo $free_plugin_text; ?> <i class="icon-sc-arrow"></i></a>         <?php } 
            if($try_demo_text) {
            ?>	
         <a href="<?php echo $try_demo_btn; ?>" class="secondary_btn">  <?php echo $try_demo_text; ?><i class="icon-sc-redirect"></i></a>
         <?php } ?>	
      </div>
      <?php } ?>
   </div>
   <div class="vertical_slider_bg">
      <img src="<?php echo $file_path; ?>/assets/images/home_page_img/vrt_slider_bg.png" alt="bg" class="img-fluid">
   </div>
</section>
<section class="sc_pricing_card_wrapper">
   <div class="container-fluid">
      <?php
         $pre_add_on = get_field('pre_add_on');
         if(!empty($pre_add_on)   ) {
            ?> 
      <div class="title">
         <?php if($pre_add_on) { ?>
         <h2 class="second_head"><?php echo $pre_add_on;?></h2>
         <?php } ?>
      </div>
      <?php } ?>    
      <div class="row sc_pricing_card_row">
         <?php
            if( have_rows('bundle_products','option') ){ ?>
         <?php 
            while( have_rows('bundle_products','option') ): the_row(); 
                        $bundle_product_heading = get_sub_field('bundle_product_heading','option');
                        $bundle_product_price = get_sub_field('bundle_product_price','option');
                        $bundle_product_discounted_price = get_sub_field('bundle_product_discounted_price','option');   
                        $bundle_btn_text = get_sub_field('bundle_btn_text','option');   
                        $bundle_btn_link = get_sub_field('bundle_btn_link','option');   
                        $popular_theme_check = get_sub_field('popular_theme_check','option');                           
                        if(!empty($bundle_product_heading) || !empty($bundle_product_price) || !empty($bundle_product_discounted_price) || !empty($bundle_btn_text)) {         
                           ?>                 
         <div class="col-md-6 col-lg-4 col-xl-3 my_col">
            <div class="sc_pricing_card">
               
               <?php
                     if ($popular_theme_check == 'yes') {?>
                 <div class="sc_pricing_card_inner active"><?php
                     } else {
                        ?>
                 <div class="sc_pricing_card_inner"><?php
                     }
                     ?> 
                  <div class="card_head">
                     <?php if($bundle_product_heading) { ?>
                     <h6><?php echo $bundle_product_heading;?></h6>
                     <?php } ?>
                     <div class="price">
                        <?php if($bundle_product_price) { ?>                        
                        <h5><?php echo $bundle_product_price;?><span><?php _e('$', 'simple-calendar'); ?></span></h5>
                        <?php } ?>                                           
                        <h4><?php echo $bundle_product_discounted_price;?><span><?php _e('$', 'simple-calendar'); ?></span></h4>                        
                     </div>
                  </div>
                  <?php 
                     if( have_rows('product_service_description','option') ){ ?>
                  <ul>
                     <?php 
                        while( have_rows('product_service_description','option') ): the_row(); 
                        $maintence_description = get_sub_field('maintence_description','option');                                                    
                            ?>           
                     <li> <?php echo $maintence_description ?></li>
                     <?php endwhile; } ?>
                  </ul>
                  <div class="card_foot">
                     <a href="<?php echo $bundle_btn_link ?>" class="primary_btn"><?php echo $bundle_btn_text ?></a>
                  </div>
                  <?php
                     if ($popular_theme_check == 'yes') {?>
                  <span class="badge"><?php _e('popular', 'simple-calendar');?><?php echo $popular_theme_check ?> </span> <?php
                     } else {
                        ?>
                  <span class="badge"></span><?php
                     }
                     ?>                              
               </div>
            </div>
         </div>
         <?php
            }
            endwhile;
            } 
            ?>  
      </div>
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
<section class="sc_support_wrapper">
   <div class="container">
      <?php
         $support_main_title = get_field('support-main-heading');
         $support_main_subtitle = get_field('support-main-subtitle');
         $support_count_btn_url = get_field('support-btn-link');
         $support_count_btn_text = get_field('support-btn-text');
         $support_doc_btn_url = get_field('count-btn-url');
         $support_doc_btn_text = get_field('count-btn-text');
         if(!empty($support_main_title) || !empty($support_main_subtitle) || !empty($support_count_btn_text) || !empty($support_doc_btn_text) ) {
          ?>
      <div class="sc_support_row">
         <?php if($support_main_title) { ?>
         <h2><?php echo $support_main_title;?></h2>
         <?php } ?>
         <?php if($support_main_subtitle) { ?>
         <p><?php echo $support_main_subtitle;?></p>
         <?php } 
            ?>
         <div class="sc_support_btn">
            <?php if($support_count_btn_text) { ?>
            <a href="<?php echo $support_count_btn_url;?>" class="secondary_btn"><?php echo $support_count_btn_text;?> <i class="icon-sc-arrowb"></i></a>
            <?php } ?>
            <?php if($support_doc_btn_text) { ?>
            <a href="<?php echo $support_doc_btn_url;?>" class="primary_btn"><?php echo $support_doc_btn_text;?>  <i class="icon-sc-arrow"></i></a>
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
<?php
get_footer();