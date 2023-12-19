<?php
   /*
    * Template Name: Privacy-policy
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper my_account_banner">
   <div class="container">
      <?php
         $privacy_heading_page = get_field('privacy_heading_page');
         if(!empty($privacy_heading_page)) {
            ?> 
      <div class="title">
         <?php if($privacy_heading_page) { ?>
         <h1 class="second_head"><?php echo $privacy_heading_page;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
   </div>
</section>
<section class="center_content_wrapper">
   <div class="container">
      <?php
         $privacy_policy = get_field('privacy_policy');
         if(!empty($privacy_policy)) {
            ?> 
      <div class="c_content_container">
         <?php  if($privacy_policy) { ?>
         <p><?php echo $privacy_policy;?></p>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<?php
get_footer();