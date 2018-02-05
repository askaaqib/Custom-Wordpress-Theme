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

    <title><?php 

    bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>



    <?php wp_head(); ?>



</head>







<body <?php body_class(); ?> >







    <nav class="navigation fixed">



        <div class="container">



            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://www.microagility.com/wp-content/uploads/2016/10/MA-logo.png" alt="Logo MicroAgility"></a></div>



            <div class="navbar">



                <ul class="nav">



                    <li><a href="tel:212 784 6217"><i class="fa fa-phone" aria-hidden="true"></i> (212) 784-6217</a></li>



                    <li class="main-menu">



                        <div class="menu-btn">



                            <a href="#" id="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></a>



                        </div>



                        <div class="menu">



                            <span><i class="fa fa-times" aria-hidden="true"></i></span> 



                            <?php $args = array(



                                'theme_location'    =>  'primary'



                            );  



                            ?>   



                            <?php wp_nav_menu( $args);?>



                         </div>



                    </li>



                </ul>



            </div>











        </div>



    </nav>