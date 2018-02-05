<?php 
/*
	Template Name: Directors Template
*/

get_header(); 

?>

    <div class="inner-banner" style="background-image : url('<?php the_field('directors_banner_image');?>')">
        <div class="container">
            <div class="col-5">
              <h2><?php the_field('directors_banner_text');?></h2>
              <?php the_field('directors_left_description');?>
 
          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('directors_banner_heading');?></h1>
          </div>

        </div>
    </div>  

    <div class="inner-page-tabs single-tab">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            
            <div class="inner-top-above-tabs">
            <blockquote><?php the_field('directors_content_quote1');?>​</blockquote>        
            <blockquote><?php the_field('directors_content_quote2');?></blockquote>
            <blockquote><?php the_field('directors_content_quote3');?></blockquote>
            <blockquote><?php the_field('directors_content_quote4');?>​</blockquote>
          </div>

            
            <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
            <label for="tab1">Join a Team of Agilians</label>

            <!-- Tab 1 Content -->
            <div class="tab__content">
               <form action="">
                 <div class="group-field">
                   <label for="">Your Name (required)</label>
                   <input type="text">
                 </div>
                 <div class="group-field">
                   <label for="">Your Email (required)</label>
                   <input type="text">
                 </div>
                 <div class="group-field">
                   <label for="">Phone Number</label>
                   <input type="text">
                 </div>
                 <div class="group-field">
                   <label for="">Your LinkedIn Profile</label>
                   <input type="text">
                 </div>
                 <div class="group-field">
                   <label for="">Please provide three reasons that make you a strong candidate for this position</label>
                   <textarea name="" id="" cols="30" rows="10"></textarea>
                 </div>
                 <div class="group-field attach">
                  <span>Cover Letter : </span><label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-paperclip" aria-hidden="true"></i> Attache file</label>
                    <input id="file-upload" type="file"/>
                </div>

                <div class="group-field">
                  <input type="submit" value="SEND">
                </div>

               </form>               
            </div>
            </div>
        </div>
    </div>


    <div class="blog-posts-bottom">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <div class="blog-posts-slider">
                
				<?php
                if( have_rows('directors_add_sliders') ): 
                    while ( have_rows('directors_add_sliders') ) : the_row();
                    $image = get_sub_field('directors_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('directors_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('directors_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('directors_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('directors_add_slider_redirect_link'); ?>"><?php the_sub_field('directors_add_slider_redirect_text'); ?></a>
                    </div>
                    </div>
                    <?php 
                    endwhile;
                else :
                    // no rows found
                endif; ?>
				
            </div>
        </div>
    </div>

    <div class="above-footer-link">
        <div class="container">
            <h2><?php the_field('directors_left_text');?></h2>
            <a href="<?php the_field('directors_right_button_text_link');?>"><?php the_field('directors_right_button_text');?></a>
        </div>
    </div>
    

    <?php get_footer(); ?>