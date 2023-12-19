<?php
   /*
    * Template Name: Refund-policy
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper my_account_banner">
   <div class="container">
      <?php
         $refund_policy_page_name = get_field('refund_policy_page_name');
         if(!empty($refund_policy_page_name)) {
            ?> 
      <div class="title">
         <?php  if($refund_policy_page_name) { ?>
         <h1 class="second_head"><?php echo $refund_policy_page_name;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="guarantee_wrapper">
   <div class="container">
      <?php
         $refund_policy_description = get_field('refund-policy-description');
         if(!empty($refund_policy_description)) {
            ?> 
      <div class="guarantee_disc">
         <?php  if($refund_policy_description) { ?>
         <p><?php echo $refund_policy_description;?></p>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
   <div class="guarantee_badge">
      <img src="<?php echo $file_path; ?>/assets/images/add_ons_img/guarantee_badge.png" alt="img" class="img-fluid">
   </div>
</section>
<?php
get_footer();