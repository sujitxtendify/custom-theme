<?php
   /*
    * Template Name: Blog single
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper blog_banner_wrapper">
   <div class="container">
      <?php
         $single_blog_page_heading = get_field('single_blog_page_heading');
         if(!empty($single_blog_page_heading)) {
            ?> 
      <div class="title">
         <?php  if($single_blog_page_heading) { ?>
         <h1 class="second_head"><?php echo $single_blog_page_heading;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="blog_post_main_wrapper">
   <div class="container">
      <?php
         $single_blog_photo = get_field('single_blog_photo');
         $single_blog_photo_link = get_field('single_blog_photo_link');
         $single_blog_author = get_field('single_blog_author');
         $single_blog_date = get_field('single_blog_date');
         $single_blog_header = get_field('single_blog_header');
         $single_blog_header_link = get_field('single_blog_header_link');
         $single_blog_description = get_field('single_blog_description');
         if(!empty($single_blog_photo) || !empty($single_blog_author) || !empty($single_blog_date) || !empty($single_blog_header) || !empty($single_blog_description) ) {
            ?> 
      <div class="blog_single_container">
         <div class="blog_single_post">
            <div class="blog_post_thumbnail">
               <?php  if($single_blog_photo) { ?>
               <a href="<?php echo $single_blog_photo_link;?>">
               <img src="<?php echo $single_blog_photo;?>" alt="blog-img">
               </a>
               <?php } ?>
            </div>
            <div class="blog_post_title">
               <div class="blog_post_user_date_content">
                  <span class="user_detail">
                  by
                  <?php if($single_blog_header) { ?>
                  <a href="https://simplecalendar-io.xtendify.dev/blog/author/rajeswar/" title="Posts by sahil" rel="author"><?php echo $single_blog_author;?></a>
                  <?php } 
                     ?>
                  </span>
                  <?php if($single_blog_header) { ?>
                  <span class="date_detail">  <?php echo $single_blog_date;?></span>
                  <?php } 
                     ?>
               </div>
               <?php if($single_blog_header) { ?>
               <h2>
                  <a href="<?php echo $single_blog_header_link;?>"><?php echo $single_blog_header;?></a>
               </h2>
               <?php } 
                  ?>
            </div>
         </div>
         <div class="blog_post_description_wrapper">
            <?php echo $single_blog_description;?>
         </div>
      </div>
      <?php } ?>
   </div>
</section>
<?php
get_footer();