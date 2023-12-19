<?php
   /*
    * Template Name: About-us
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper my_account_banner">
   <div class="container">
      <?php
         $about_us_page_heading = get_field('about_us_page_heading');
         if(!empty($about_us_page_heading)) {
            ?> 
      <div class="title">
         <?php  if($about_us_page_heading) { ?>
         <h1 class="second_head"><?php echo $about_us_page_heading;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="center_content_wrapper">
   <div class="container">
      <?php
         $about_despriction = get_field('about-despriction');
         if(!empty($about_despriction)) {
            ?> 
      <div class="c_content_container">
         <?php  if($about_despriction) { ?>
         <p class="stroke_text"><?php echo $about_despriction;?></p>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<?php
get_footer();