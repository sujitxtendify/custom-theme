<?php
   /*
    * Template Name: Terms-of-service
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper my_account_banner">
   <div class="container">
      <?php
         $service_page_title = get_field('service_page_title');
         if(!empty($service_page_title)) {
            ?> 
      <div class="title">
         <?php  if($service_page_title) { ?>
         <h1 class="second_head"><?php echo $service_page_title;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="center_content_wrapper">
   <div class="container">
      <?php
         $service_page_content = get_field('service-page-content');
         if(!empty($service_page_content)) {
            ?> 
      <div class="c_content_container">
         <?php  if($service_page_content) { ?>
         <?php echo $service_page_content;?>
         <?php } ?>       
      </div>
      <?php } ?>
   </div>
</section>
<?php
get_footer();