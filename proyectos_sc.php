<?php 
define('WP_USE_THEMES', false);
require('manage/wp-blog-header.php');

?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Roger Valerio - Proyectos</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
     <meta name="author" content="SenorCoders">
    <link rel="icon" href="img/only-logo.png">


    <!-- CSS styles-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/vegas.css">
    <link rel="stylesheet" href="css/project-styles.css">
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body>
    
    <!-- LOADER -->
    <div class="loader-background">
        <div class="loader-center"> 
            <div class="loader-frame">

                <div class="loader-name"><img src="img/logo-clear.png"></div>

            </div>
        </div>
    </div><!-- END LOADER -->
    
    <!-- MAIN-CONTAINER -->
    <div id="main-container">
        
        <!-- MENU-LEFT -->
        <nav class="menu-left">
            <div class="center">
                <ul>
                    <li data-menuanchor="slide1" class="active"><a href="#slide1">Proyectos</a></li>
                    <?php $i = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                       <!-- CHECK TO SEE IF IT HAS ROWS IN IT -->
                       <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                            $name =  get_sub_field('nombre_del_proyecto');

                            echo '<li data-menuanchor="slide' . $i . '" class="active"><a href="#slide' .$i . '">' . $name . '</a></li>'; 


                         $i++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>
           
                    
                </ul>
            </div>
            <div class="menu-name"><img src="img/only-logo.png"></div>
            <div class="menu-sub"><a href="index.php">BACK TO HOMEPAGE</a></div>
        </nav><!-- END MENU-LEFT -->
        
        <!-- UPDOWN-NAVIGATION -->
        <nav class="updown-navigation navigation">
            <ul>
                <li class="up"><a class="ion-arrow-up-c"></a></li> 
                <li class="down"><a class="ion-arrow-down-c"></a></li> 
            </ul>
        </nav><!-- END UPDOWN-NAVIGATION -->
        
        <!-- MS-LEFT -->
        <div class="ms-left">
            
            <!-- LEFT 1 -->
            <div class="ms-section show-mobile" id="left1">
                <div class="section-home section">
                    <div class="center">
                        <div class="col-md-8 section-margin">
                          <div class="menu-name"><img src="img/only-logo.png"></div>
                            <div class="home-name"><span><span>ROGER</span></span></div>
                            <div class="home-sub-a"><span><span>Valerio</span></span></div>
                            <div class="home-sub-b"><span>Lista de Proyectos</span></div>
                        </div>
                    </div>
                </div>
            </div><!-- END LEFT 1 -->
            
            <!-- LEFT 2 -->
                                
                     <?php $count = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                       <!-- CHECK TO SEE IF IT HAS ROWS IN IT -->
                       <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 

                            echo '<div class="ms-section hide-mobile" id="left' . $count . '"></div>'; 


                         $count++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>
           
            
           
            
        </div><!-- END MS-LEFT -->
    
        <!-- MS-RIGHT -->
        <div class="ms-right">
            
            <!-- RIGHT 1 -->
             <div class="ms-section hide-mobile" id="right1">
                <nav class="home-navigation navigation">
                    <ul>
                        <li class="prev"><a class="prev-slide ion-arrow-left-c"></a></li> 
                        <li class="next"><a class="next-slide ion-arrow-right-c"></a></li> 
                    </ul>
                </nav>
                <div id="home-carousel">
                    <?php $j = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                       <!-- CHECK TO SEE IF IT HAS ROWS IN IT -->
                       <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); ?>
                        
                       <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url('<?php the_sub_field('image_background_for_start_page'); ?>')"></div>
                        <div class="home-link">
                            <?php 
                            $name_load = get_sub_field('nombre_del_proyecto');
                            echo '<a href="#slide' . $j . '"><span>' . $name_load .'</span></a>';  ?>
                            
                        </div>
                    </div>

                        <?php
                         $j++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>
           
                    
                </div>
            </div><!-- END RIGHT 1 -->

            <!-- RIGHT 2 -->
            

                               


                                       
              <!-- CHECK OUT REPEATER "gallery-repeater" -->
                  <?php $counter = 2;?>
                       <?php if( have_rows('lista_de_proyectos', 26) ): ?>
                               

                 <!-- CHECK TO SEE IF IT HAS ROWS IN IT -->
                 <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); ?>
                <?php echo '<div class="ms-section show-mobile" id="right'. $counter . '">'; ?>
        
            <div class="overlay-right"></div>
                <div class="section-services section">
                   <div class="center">
                       <div class="col-md-7 section-margin">
                            <div class="border"></div>
                                    <h1><?php the_sub_field('nombre_del_proyecto'); ?></h1>
                                     <!-- DISPLAY THE TEXT-FIELD THEN ASSIGN OUR GALLERY TO VARIABLE $images -->
                                      <div class="projects-list list-b">

                                       <ul class='project-own-list'>
                                      <li> <span class="project-own-bold"> Diseño </span>:  <?php the_sub_field('design'); ?> </li>
                                           <li> <span class="project-own-bold"> Construcción</span>: <?php the_sub_field('construccion'); ?></li>
                                           <li> <span class="project-own-bold"> Localización</span>: <?php the_sub_field('localizacion'); ?> </li>
                                            
                                            <li> <span class="project-own-bold"> Detalle</span>: <?php the_sub_field('detalles'); ?> </li>

                                       </ul>
                                       </div>

                                  

                                    <?php

                                     $images = get_sub_field('galeria_de_proyectos'); 
                                      
                                       echo ' <div id="design-carousel-' . $counter. '">';

                                     if( $images ):?>
                                        <?php foreach( $images as $image ): ?>
                                       <div class="design-item design-height">
                                      <a class="design-popup-link mfp-fade" href="<?= $image['url']; ?>">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(<?= $image['url']; ?>)"></div>
                                    </a>
                                    </div>
                                        <?php endforeach; ?>
                                         </div>
                                         <nav class="navigation">
                                <ul>
                                    <li class="prev"> <a class="prev-slide ion-arrow-left-c"></a></li> 
                                    <li class="next"><a class="next-slide ion-arrow-right-c"></a></li> 
                                </ul>
                            </nav>
                                     <?php endif; 
                                 ?>

                                    </div>
                                </div>
                            </div>
                            </div>
                                <?php $counter++;
                                               
                                   endwhile;
                                   ?>


                    <?php
          
                                else :
                                // no rows found
                                endif; ?>

            
           
            <!-- END RIGHT 2 -->
            
            <!-- END RIGHT 3 -->             
            <!-- END RIGHT 3 -->

            <!-- RIGHT 4 -->
           
        </div>
        <div class="social">
                     <ul>
                        <li><a href="https://www.facebook.com/pages/ROGER-VALERIO-ARQUITECTURA/113394305343599" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://ni.linkedin.com/in/roger-valerio-9082a842" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">Roger Valerio Arquitectura - 2016 &copy;</div>
            </div>
        <!-- END MS-RIGHT -->

    </div><!-- END MAIN-CONTAINER -->

<!--  ==================================================================
                             JAVASCRIPT
==================================================================  -->
    
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/bigtext.js"></script>
    <script type="text/javascript" src="js/jquery.multiscroll.js"></script>
    <script type="text/javascript" src="js/vegas.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3"></script>
    <script type="text/javascript" src="js/pace.js"></script>
     
    <script type="text/javascript" src="js/mainprojects.js"></script>
    

</body>
</html>
