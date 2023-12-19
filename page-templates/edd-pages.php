<?php
   /*
    * Template Name: EDD Pages
    */
    
   get_header(); ?>
<?php $file_path = get_template_directory_uri(); ?> 
<section class="add_on_banner_wrapper my_account_banner">
   <div class="container">
      <div class="title">
         <h1 class="second_head"><?php echo get_the_title(); ?></h1>
      </div>
   </div>
</section>
<section class="sc_edd_wrapper">
   <div class="container">
      <div class="sc_edd_container">
        <main id="primary" class="site-main">

            <?php
            while ( have_posts() ) :
               the_post();

               the_content();

               // If comments are open or we have at least one comment, load up the comment template.
               if ( comments_open() || get_comments_number() ) :
                  comments_template();
               endif;

            endwhile; // End of the loop.
            ?>

         </main><!-- #main -->
      </div>
   </div>
</section>
<?php
get_footer();