<?php
   /*
    * Template Name: Contact-us
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper contact_banner">
   <div class="container">
      <?php
         $contact_us_heading = get_field('contact_us_heading');
         if(!empty($contact_us_heading)) {
            ?> 
      <div class="title">
         <?php  if($contact_us_heading) { ?>
         <h1 class="second_head"><?php echo $contact_us_heading;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
      <div class="row contact_banner_row">
      <?php
               if (have_rows('contect_us_hero_section')){
                  while (have_rows('contect_us_hero_section')) : the_row();
                  $hero_section_image = get_sub_field('hero_section_image');
                  $hero_heading = get_sub_field('hero_heading');
                  $hero_description = get_sub_field('hero_description');
                  $hero_btn_text = get_sub_field('hero_btn_text');
                  $hero_btn_link = get_sub_field('hero_btn_link');
                  if(!empty($hero_section_image) || !empty($hero_heading) || !empty($hero_description) || !empty($hero_btn_text) ) {
                     ?>  
         <div class="col-lg-4 my_col">
            <div class="contact_item">
               <div class="contact_item_inner">
                  <div class="icon">
                  <?php if($hero_section_image) { ?>
                     <img src="<?php echo $hero_section_image; ?>" alt="icon">
                     <?php } 
                        ?>                  
                  </div>
                  <div class="content">
                  <?php if($hero_heading) { ?>
                     <h3><?php echo $hero_heading; ?></h3>
                     <?php } 
                       if($hero_description) { ?>
                    <p><?php echo $hero_description; ?>
                     </p>
                     <?php } 
                        ?>         
                  </div>
                  <div class="link">
                  <?php if($hero_btn_text) { ?>
                
                     <a href="<?php echo $hero_btn_link; ?>"><?php echo $hero_btn_text; ?><span><i class="icon-sc-arrowb"></i></span></a>
                     <?php } 
                        ?>
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
</section>
<section class="contact_form_wrapper">
   <div class="container">
      <div class="contact_form_container">
         <div class="row contact_form_row my_container_375">
            <div class="col-lg-4">
            <?php
         $form_heading = get_field('form_heading');
         if(!empty($form_heading)) {
            ?> 
               <div class="left_content">
                   <?php  if($form_heading) { ?>
         <h2 class="second_head"><?php echo $form_heading;?></h2>
         <?php } ?>
                  <div class="contact_form_img">
                     <img src="<?php echo $file_path; ?>/assets/images/add_ons_img/contact_banner_img.png" alt="img">
                  </div>
               </div>
               <?php } ?>
            </div>
            <div class="col-lg-8">
               <div class="contact_form">
               <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="contact_form_shape">
      <img src="<?php echo $file_path; ?>/assets/images/add_ons_img/contact_shape.png" alt="shape" class="img-fluid">
   </div>
</section>
<?php
get_footer();