<?php
   /**
    * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Simple_Calendar_Theme
    */
   
   ?>
<footer id="colophon" class="site-footer sc_footer_main">
   <div class="container-fluid">
      <div class="sc_footer_container">
         <div class="footer_top">
            <?php
               $footer_latest_text = get_field('footer-latest-text', 'option');
               $footer_update_text  = get_field('footer-update-text', 'option');
               if(!empty($footer_latest_text) || !empty($footer_update_text)  ) {
                  ?> 
            <div class="f_title">
               <?php if($footer_latest_text) { ?>
               <h3><?php echo $footer_latest_text;?></h3>
               <?php } if($footer_update_text) { ?>
               <h2 class="stroke_text"><?php echo $footer_update_text;?></h2>
               <?php } ?>
            </div>
            <?php } ?>
            <div class="footer_form">
				<?php echo do_shortcode('[gravityform id="4" title="true" description="true" ajax="true"]'); ?>
            </div>
         </div>
         <div class="footer_bottom">
            <div class="row f_bottom_row">
               <div class="col-lg-5">
                  <?php
                     $footer_sim_icon = get_field('footer-heading', 'option');
                     $footer_description = get_field('footer-discription', 'option');
                     $footer_soc_fac = get_field('social-facebook', 'option');
                     $footer_soc_twi = get_field('social-twitter', 'option');
                     $footer_soc_ins = get_field('social-instagram', 'option');
                     $footer_soc_lin = get_field('social-linkedin', 'option');
                      if(!empty($footer_sim_icon) || !empty($footer_description) || !empty($footer_soc_fac) || !empty($footer_soc_twi)|| !empty($footer_soc_ins)|| !empty($footer_soc_lin) ) {
                         ?> 
                  <div class="footer_social_media">
                     <a href="#"> <img src="<?php echo get_template_directory_uri();?>/assets/images/sc_ft_logo.png" alt="logo"></a>
                     <?php if($footer_description) { ?>
                     <p class="ftpara"><?php echo $footer_description;?></p>
                     <?php } ?>
                     <div class="social_link">
                        <?php 
                           if($footer_soc_fac) {
                           ?>
                        <a href="<?php echo $footer_soc_fac; ?>">
                           <div class="link_box">
                              <i class="icon-sc-fa"></i>
                           </div>
                        </a>
                        <?php } 
                           if($footer_soc_twi) {
                           ?>
                        <a href="<?php echo $footer_soc_twi; ?>">
                           <div class="link_box">
                              <i class="icon-sc-twitter"></i>
                           </div>
                        </a>
                        <?php } 
                           if($footer_soc_ins) {
                           ?>
                        <a href="<?php echo $footer_soc_ins; ?>">
                           <div class="link_box">
                              <i class="icon-sc-ig"></i>
                           </div>
                        </a>
                        <?php } 
                           if($footer_soc_lin) {
                           ?>
                        <a href="<?php echo $footer_soc_lin; ?>">
                           <div class="link_box">
                              <i class="icon-sc-linkedin"></i>
                           </div>
                        </a>
                        <?php } ?>
                     </div>
                  </div>
                  <?php } ?>
               </div>
               <div class="col-lg-7">
                  <div class="footer_links_wrapper row">
                     <div class="col-sm-6">
                        <?php
                           $footer_about_heading = get_field('footer-about-heading', 'option');
                           if(!empty($footer_about_heading) ) {
                              ?> 
                        <div class="f_links_column">
                           <?php  if($footer_about_heading) { ?>
                           <h4><?php echo $footer_about_heading;?></h4>
                           <?php } ?>
                           <?php
                              wp_nav_menu(
                                 array(
                                    'menu_id'        => 'Footer1',
                                 )
                              );
                              ?>
                        </div>
                        <?php } ?>
                     </div>
                     <div class="col-sm-6">
                        <?php
                           $footer_service_heading = get_field('footer-service-heading
                           ', 'option');
                           if(!empty($footer_service_heading) ) {
                              ?> 
                        <div class="f_links_column">
                           <?php  if($footer_service_heading) { ?>
                           <h4><?php echo $footer_service_heading;?></h4>
                           <?php } ?>
                           <?php
                              wp_nav_menu(
                                 array(
                                    'menu_id'        => 'Footer2',
                                 )
                              );
                              ?>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
         $footer_copyright = get_field('footer_copyright
         ', 'option');
         $footer_copyright_url = get_field('copyright_link
         ', 'option');
         if(!empty($footer_copyright)  || !empty($footer_copyright_url) ){
            ?> 
      <div class="copyright_row">
         <?php  if($footer_copyright) { ?>
         <a href="<?php echo $footer_copyright_url;?>">
            <h6><?php echo $footer_copyright;?>
            </h6>
         </a>
         <?php } ?>        
      </div>
      <?php } ?>
   </div>
   <div class="ftr_shape">
      <div class="shape">
         <img src="<?php echo get_template_directory_uri();?>/assets/images/home_page_img/ftr_shape.png" alt="shape" class="img-fluid">
      </div>
   </div>
   <a href="#" id="go_to_top" class="go_top_btn">
   <i class="icon-sc-t-arrow"></i>
   </a>
</footer>
<!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>