<?php
   /*
    * Template Name:  Add-on-download
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper">
   <div class="container">
      <?php
         $add_on_download_heading = get_field('add_on_download_heading');
         if(!empty($add_on_download_heading)) {
            ?> 
      <div class="title">
         <?php  if($add_on_download_heading) { ?>
         <h1 class="second_head"><?php echo $add_on_download_heading;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="addon_download_wrapper">
   <div class="container">
      <div class="row addon_download_row">
         <?php
            if (have_rows('add_on_download')){
               while (have_rows('add_on_download')) : the_row();
               $addon_heading = get_sub_field('addon_heading');
               $addon_text = get_sub_field('addon_btn_text');
               $addon_link = get_sub_field('addon_btn_link');
               
               if(!empty($addon_heading) || !empty($addon_text)  ) {
                  ?> 
         <div class="col-md-6">
            <div class="download_item">
               <div class="download_item_inner">
                  <?php if($addon_heading) { ?>
                  <h2><?php echo $addon_heading;?></h2>
                  <?php } 
                     ?>
                  <?php if($addon_text) { ?>
                  <a href="<?php echo $addon_link;?>" class="primary_btn"><?php echo $addon_text;?></a>
                  <?php } 
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
<?php
get_footer();