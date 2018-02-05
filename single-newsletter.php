<?php
/**
 * Template: 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage MicroAgility
 * @since Micro Agility 1.0
 */

//get_header(); 
wp_head();
?>

<!DOCTYPE html>

<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php  bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="nvn60iFrR17GMl1s3Lg5pPU0zjgoKFrdusAeSymV5oo" />
    <meta name="p:domain_verify" content="d666fe17806847348f07942ee688bd27"/>
    <link rel="stylesheet" href="http://microagility.com/news-letters/css/updatedstyles1.css">
    <link rel="stylesheet" href="http://microagility.com/news-letters/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
    <style>
        .single-newsletter .container{
                width: 1170px !important;
            }
            .single-newsletter #container{
                width: 1170px !important;
            }
            .heading h4 {
            margin: 9px 0 !important;
            line-height: 1.2;
            } 
            h2, .h2 {
                font-size: 30px !important;
            }
            .message-body {
                padding-top: 27px !important;
            }
            h2,h3,h4,h5{
                font-family: inherit !important;
            }
            .heading2 a{
                color: #337ab7 !important;
            }
            .heading2 a:hover, a:focus {
                color: #23527c !important;
            }
            .single-newsletter .message{
                height: 680px !important;
            }
            .single-newsletter .interview .heading {
                top: 70px !important;
            }
            .single-newsletter .interview {
                padding: 50px 15px !important;    
                height: 200px !important;
            }
            .single-newsletter .iagility {
                padding: 62px 20px !important;
            }
            .single-newsletter .overlay-contact {
                padding: 70px 0 55px 0 !important;
                height: 266px !important;
            }
            .single-newsletter .right .featured-list {
                height: 287px !important;
                padding: 1px 10px 15px 5px !important;
            }
            .single-newsletter .right .jobs-list {
                height: 330px !important;
            }
            .single-newsletter .articles {
                height: 505px !important;
            }
            .quote{
                background-image: url('<?php the_field("newsletter_quote_image"); ?>') !important;
            }
    </style>
</head>

<body <?php body_class(); ?> >

        <div class="banner-image"><div class="overlay"></div></div>
    <div class="container">
        <img style="margin: 15px 0 10px 100px;" src="<?php the_field('newsletter_logo'); ?>">
    </div>
    <div class="container" id="container">
    <div class="col-md-6">
        <div class="message">
            <div class="heading">
            <h4><?php the_field('newsletter_message_heading'); ?></h4>
            </div>
            <div class="message-body">
                <?php the_field('newsletter_message'); ?>
            </div>
        </div>
        
        <div class="interview">
            <div class="heading"><h4><?php the_field('newsletter_interview_section_title'); ?></h4></div>
            <div class="series">
                <h5 class="dark-blue bold"><a href="<?php the_field('newsletter_interview_section_link'); ?>" target="_blank"><?php the_field('newsletter_interview_section_interview_title'); ?></a></h5>
                <p class="dark-blue bold"><?php the_field('newsletter_interview_section_source'); ?></a></p>
            </div>
        </div>
        
        <div class="ads-section hidden-sm">
        <div class="iagility">
            <a href="<?php the_field('newsletter_UTM_iagility_link'); ?>" target="_blank"><img src="<?php get_bloginfo('wpurl'); ?>/news-letters/images/iagility.png"></a>
            <h5><a href="<?php the_field('newsletter_UTM_iagility_link'); ?>" target="_blank">Join Our Consulting Platform</a></h5>for sophisticated clients and consultants.
        </div>
        </div>

        <div class="contact hidden-sm">
            <div class="overlay-contact">
            <div class="col-md-6">
                <div class="contact-left">
                    <h5>PEOPLE | PROCESS | TECHNOLOGY</h5>
                    <div class="contact-list">
                    <ul>
                        <li>
                            <a href="tel:212 784 6217"><i class="fa fa-phone" aria-hidden="true"></i>212-784-6217</a>
                        </li>
                        <li class="dark-blue">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>48 Wall Street, 11th Floor <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New York ,NY 10005
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="contact-right">
                    <div class="contact-list">
                    <ul>
                        <li>
                            <a href="mailto:skhan@microAgility"><i class="fa fa-envelope" aria-hidden="true"></i>Skhan@MicroAgility.com</a>
                        </li>
                        <li>
                            <a href="<?php the_field('newsletter_UTM_microagility_blog_link'); ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>Blog.MicroAgility.com</a>
                        </li>
                        <li>
                            <a href="<?php the_field('newsletter_UTM_microagility_link'); ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>www.MicroAgility.com</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="quote hidden-sm">
        </div>


    </div>
    
    <div class="col-md-6">
        <div class="title">
            <h2 class="dark-blue bold"><?php the_field('newsletter_title'); ?></h2>
            <h3 class="red"><?php the_field('newsletter_tag_line'); ?></h3>
            <div class="date dark-blue">
                <p><?php the_field('newsletter_title'); ?>'s Newsletter<br>
                <b>Date: <?php the_field('newsletter_date'); ?></b></p>
            </div>
        </div>
        <div class="right">
            <div class="heading">
                <h4><?php the_field('newsletter_featured_section_title'); ?> | <?php the_field('newsletter_featured_new_members'); ?> New Members | Total <?php the_field('newsletter_featured_total_members'); ?></h4>
            </div>
                <?php if( have_rows('newsletter_featured_members_repeater') ): ?>
                        
                        <div class="list featured-list"> <?php
                            while ( have_rows('newsletter_featured_members_repeater') ) : the_row();
                                ?>
                                <h5><a href="<?php the_sub_field('newsleter_featured_member_link'); ?>" target="_blank"><?php the_sub_field('newsleter_featured_member_name'); ?>,</a>
                    <span><?php the_sub_field('newsleter_featured_member_position'); ?></span>
                    </h5>
                           <?php endwhile; ?>
                        </div>
                    <?php else :
                        // no rows found
                    endif;
                ?>

                               
            <div class="heading">
                <h4><?php the_field('newsletter_recommended_jobs_section_title'); ?></h4>
            </div>
                <?php if( have_rows('newsletter_recommended_jobs_repeater') ): ?>
                        
                        <div class="list jobs-list"> <?php
                            while ( have_rows('newsletter_recommended_jobs_repeater') ) : the_row();
                                ?>
                                <h5><a href="<?php the_sub_field('newsleter_recommended_job_link'); ?>" target="_blank"><?php the_sub_field('newsleter_recommended_job_name'); ?>,</a>
                    <span><?php the_sub_field('newsleter_recommended_job_location'); ?></span>
                    </h5>
                           <?php endwhile; ?>
                        </div>
                    <?php else :
                        // no rows found
                    endif;
                ?>


            <div class="heading2 bold"><a href="<?php the_field('newsletter_UTM_iagility_career_link') ?>" target="_blank">More Jobs</a> <br> MicroAgility Inc. All Major Cities</div>  
        </div>
        <div class="articles height-custom">
            <div class="heading">
                <h4><?php the_field('newsletter_articles_section_title'); ?></h4>
            </div>

                <?php if( have_rows('newsletter_articles_repeater') ): ?>
                        
                        <div class="news"> <?php
                            while ( have_rows('newsletter_articles_repeater') ) : the_row();
                                ?>
                                <h5><a href="<?php the_sub_field('newsleter_article_link'); ?>" target="_blank"><?php the_sub_field('newsleter_article_title'); ?></a></h5>
                                <p><?php the_sub_field('newsleter_article_source'); ?></p>
                           <?php endwhile; ?>
                        </div>
                    <?php else :
                        // no rows found
                    endif;
                ?>                 
                
        </div>

        <div class="ads-section visible-sm">
        <div class="iagility">
            <a href="https://goo.gl/bPqUDF" target="_blank"><img src="<?php get_bloginfo('wpurl'); ?>/news-letters/images/iagility.png"></a>
            <h5><a href="https://goo.gl/bPqUDF" target="_blank">Join Our Consulting Platform</a></h5>for sophisticated clients and consultants.
        </div>
        </div>

                <div class="contact visible-sm">
            <div class="overlay-contact">
            <div class="col-md-6">
                <div class="contact-left">
                    <h5>PEOPLE | PROCESS | TECHNOLOGY</h5>
                    <div class="contact-list">
                    <ul>
                        <li>
                            <a href="tel:212 784 6217"><i class="fa fa-phone" aria-hidden="true"></i>212-784-6217</a>
                        </li>
                        <li class="dark-blue">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>48 Wall Street, 11th Floor <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New York ,NY 10005
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="contact-right">
                    <div class="contact-list">
                    <ul>
                        <li>
                            <a href="mailto:skhan@microAgility"><i class="fa fa-envelope" aria-hidden="true"></i>Skhan@MicroAgility.com</a>
                        </li>
                        <li>
                            <a href="<?php the_field('newsletter_UTM_microagility_blog_link'); ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>Blog.MicroAgility.com</a>
                        </li>
                        <li>
                            <a href="<?php the_field('newsletter_UTM_microagility_link'); ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i>www.MicroAgility.com</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="quote visible-sm">
        </div>

    </div>

    </div> <!-- Container ends -->
   
<?php //get_footer(); 
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-88215608-1', 'auto');
  ga('send', 'pageview');
</script>
     
    <?php wp_footer(); ?>

</body>
</html>