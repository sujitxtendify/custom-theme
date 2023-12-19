<?php
   /*
    * Template Name: Blog
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper blog_banner_wrapper">
   <div class="container">
      <?php
         $blog_page_heading = get_field('blog_page_heading');
         if(!empty($blog_page_heading)) {
            ?> 
      <div class="title">
         <?php  if($blog_page_heading) { ?>
         <h1 class="second_head"><?php echo $blog_page_heading;?></h1>
         <?php } ?>
      </div>
      <?php } ?>
   </div>
</section>
<section class="blog_post_main_wrapper">
   <div class="container">
      <div class="blog_post_wrapper">
         <div class="blog_post_item">
            <div class="row blog_post_row">
            <?php
               if (have_rows('blogs_post')){
                  while (have_rows('blogs_post')) : the_row();
                  $blog_photo = get_sub_field('blog_photo');
                  $blog_photo_link = get_sub_field('blog_photo_link');
                  $blog_heading = get_sub_field('blog_heading');
                  $blog_heading_link = get_sub_field('blog_heading_link');
                  $blog_descritpion = get_sub_field('blog_descritpion');
                  $blog_author = get_sub_field('blog_author');
                  $blog_date = get_sub_field('blog_date');
                  $read_more_text = get_sub_field('read_more_text');
                  $read_more_btn = get_sub_field('read_more_btn');
                  if(!empty($blog_photo) || !empty($blog_heading) || !empty($testimoinal_name) || !empty($testimoinal_author) || !empty($testimoinal_date) ) {
                     ?>  
               <div class="col-md-5">
                  <div class="blog_post_thumbnail">
                     <?php if($blog_photo) { ?>
                     <a href="<?php echo $blog_photo_link;?>">
                     <img src="<?php echo $blog_photo;?>" alt="blog-img">
                     </a>
                     <?php } 
                        ?>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="blog_post_text">
                     <h2>
                        <?php if($blog_heading) { ?>
                        <a href="<?php echo $blog_heading_link;?>"><?php echo $blog_heading;?></a>
                        <?php } 
                           ?>
                     </h2>
                     <div class="blog_post_user_date_content">
                        <span class="user_detail">
                        by
                        <?php if($blog_author) { ?>
                        <a href="https://simplecalendar-io.xtendify.dev/blog/author/rajeswar/" title="Posts by sahil" rel="author"><?php echo $blog_author;?></a>
                        <?php } 
                           ?>
                        </span>
                        <?php if($blog_date) { ?>
                        <span class="date_detail"><?php echo $blog_date;?></span>
                        <?php } 
                           ?>
                     </div>
                     <?php if($blog_descritpion) { ?>
                     <p class="sc_blog_description">
                        <?php echo $blog_descritpion;?>
                     </p>
                     <?php } 
                        ?>
                     <?php if($read_more_text) { ?>                  
                        <a href="<?php echo $read_more_btn;?>" class="primary_btn"><?php echo $read_more_text;?></a>                     
                     <?php } 
                        ?>
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
   </div>
</section>
<?php
get_footer();