<?php
   /*
    * Template Name:  Add-on
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper">
   <div class="container">
      <?php
         $add_on_heading_page = get_field('add_on_heading_page');
         if(!empty($add_on_heading_page)) {
            ?> 
      <div class="title">
         <?php  if($add_on_heading_page) { ?>
         <h1 class="second_head"><?php echo $add_on_heading_page;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="sc_pricing_card_wrapper">
   <div class="container-fluid">
   <?php
         $add_on_bundle_heading = get_field('add_on_bundle_heading');
         if(!empty($add_on_bundle_heading)) {
            ?> 
      <div class="title">
      <?php  if($add_on_bundle_heading) { ?>
         <h2 class="second_head"><?php echo $add_on_bundle_heading;?></h2>
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
<section class="learn_more_wrapper">
   <div class="container">
      <div class="lm_container">
      <?php
         $add_on_bundle_description = get_field('add_on_bundle_description');
         if(!empty($add_on_bundle_description)) {
            ?> 
         <div class="lm_top_row">
         <?php  if($add_on_bundle_description) { ?>
            <h4><?php echo $add_on_bundle_description;?></h4>
         <?php } ?>          
         </div>
         <?php } ?>         
         <div class="lm_middle_row sc_pricing_card_wrapper">
         <div class="row sc_pricing_card_row">
         <?php
            if( have_rows('bulk_price_bundle','option') ){ ?>
         <?php 
            while( have_rows('bulk_price_bundle','option') ): the_row(); 
                        $bulk_heading = get_sub_field('bulk_heading','option');
                        $bulk_price = get_sub_field('bulk_price','option');
                        $bulk_discounted_price = get_sub_field('bulk_discounted_price','option');   
                        $bulk_btn_text = get_sub_field('bulk_btn_text','option');   
                        $bulk_btn_link = get_sub_field('bulk_btn_link','option');                            
                        if(!empty($bulk_heading) || !empty($bulk_price) || !empty($bulk_discounted_price) || !empty($bulk_btn_text)) {         
                           ?>                 
         <div class="col-md-6 col-lg-4 my_col">
            <div class="sc_pricing_card">              
                 <div class="sc_pricing_card_inner">
                  <div class="card_head">
                     <?php if($bulk_heading) { ?>
                     <h6><?php echo $bulk_heading;?></h6>
                     <?php } ?>
                     <div class="price">
                        <?php if($bulk_price) { ?>                        
                        <h5><?php echo $bulk_price;?><span><?php _e('$', 'simple-calendar'); ?></span></h5>
                        <?php } ?>                                           
                        <h4><?php echo $bulk_discounted_price;?><span><?php _e('$', 'simple-calendar'); ?></span></h4>                        
                     </div>
                  </div>
                  <?php 
                     if( have_rows('bulk_service_description','option') ){ ?>
                  <ul>
                     
                     <?php 
                        while( have_rows('bulk_service_description','option') ): the_row(); 
                        $bulk_maintence_description = get_sub_field('bulk_maintence_description','option');                                                    
                            ?>           
                     <li> <?php echo $bulk_maintence_description ?></li>
                     <?php endwhile; } ?>
                  </ul>
                  <div class="card_foot">
                     <a href="<?php echo $bulk_btn_link ?>" class="primary_btn"><?php echo $bulk_btn_text ?></a>
                  </div>                                            
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
         <div class="row lm_bottom_row">
            <?php
               if (have_rows('add_on_calendars')){
                  while (have_rows('add_on_calendars')) : the_row();
                  $add_on_image = get_sub_field('add_on_image');
                  $add_on_heading = get_sub_field('add_on_heading');
                  $add_on_desription = get_sub_field('add_on_desription');
                  $add_on_more_btn = get_sub_field('add_on_more_btn');
                  $add_on_more_link = get_sub_field('add_on_more_link');
                  if(!empty($add_on_image) || !empty($add_on_heading) || !empty($add_on_desription) || !empty($add_on_more_btn)  ) {
                     ?> 
            <div class="col-md-6">
               <div class="lm_item">
                  <div class="lm_item_inner">
                     <div class="lm_item_top">
                        <div class="icon">
                           <img src="<?php echo $add_on_image;?>" alt="img">
                        </div>
                        <h3><?php echo $add_on_heading;?></h3>
                        <p><?php echo $add_on_desription;?> </p>
                     </div>
                     <div class="lm_item_btn">
                        <a href="<?php echo $add_on_more_link;?>"><?php echo $add_on_more_btn;?><span><i class="icon-sc-arrowb"></i></span></a>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }
               endwhile;
               }
               ?>
            <div class="lm_shape">
               <div class="shape shape1">
                  <img src="<?php echo $file_path; ?>/assets/images/home_page_img/dot_squre.png" alt="shape">
               </div>
               <div class="shape shape2">
                  <img src="<?php echo $file_path; ?>/assets/images/home_page_img/dot_squre.png" alt="shape">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="guarantee_wrapper">
   <div class="container">
   <?php
      $money_back_heading = get_field('money_back_heading','option');
      $money_back_description = get_field('money_back_description','option');
      if(!empty($money_back_heading) || !empty($money_back_description) ) {
         ?> 
   <div class="guarantee_disc">
      <?php if($money_back_heading) { ?>
      <h2 class="second_head"><?php echo $money_back_heading;?></h2>
      <?php } if($money_back_description) { ?>
      <p><?php echo $money_back_description;?></p>
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