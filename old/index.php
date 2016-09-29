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
    <title>Roger Valerio - Arquitectura</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="SenorCoders">
    <link rel="icon" href="img/only-logo.png">

    <!-- CSS styles-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/vegas.css">
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <!--- Testing changes 2 -->

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
                    <li data-menuanchor="first" class="active"><a href="#first">Inicio</a></li>
                    <li data-menuanchor="second"><a href="#second">Perfil</a></li>
                    <li data-menuanchor="third"><a href="#third">Arquitectura</a></li>
                    <li data-menuanchor="fourth"><a href="#fourth">Construcción</a></li>                     
                    <li data-menuanchor="fifth"><a href="#fifth">Desarrollo</a></li>
                     <li data-menuanchor="sixth"><a href="proyectos.php">Proyectos</a></li>
                    <li data-menuanchor="seventh"><a href="#seventh">Contacto</a></li>

                </ul>
            </div>
            <div class="menu-name"><img src="img/only-logo.png"></div>
            <div class="menu-sub">ROGER VALERIO</div>
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
                            <div class="home-sub-b"><span>Arquitectura</span></div>
                        </div>
                    </div>
                </div>
            </div><!-- END LEFT 1 -->
            
            <!-- LEFT 3 -->
            <div class="ms-section hide-mobile" id="left3"></div><!-- END LEFT 3 -->
            
            <!-- LEFT 2 -->
            <div class="ms-section hide-mobile" id="left2"></div><!-- END LEFT 2 -->
            
            <!-- LEFT 4 -->
            <div class="ms-section hide-mobile" id="left4"></div><!-- END LEFT 4 -->
            
            <!-- LEFT 5 -->
            <div class="ms-section hide-mobile" id="left5"></div><!-- END LEFT 5 -->
            
            <!-- LEFT 6 -->
            <div class="ms-section hide-mobile" id="left6"></div><!-- END LEFT 6 -->

            <!-- LEFT 7 -->
            <div class="ms-section hide-mobile" id="left7"></div><!-- END LEFT 7 -->
            
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
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(<?php the_field('arquitectura_background', 276); ?>)"></div> 
                        <div class="home-link">
                            <a href="#third"><span>Arquitectura</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(<?php the_field('construccion_background', 276); ?>)"></div>
                        <div class="home-link">
                            <a href="#fourth"><span>Construcción</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(<?php the_field('desarrollo_background', 276); ?>)"></div> 
                        <div class="home-link">
                            <a href="#fifth"><span>Desarrollo</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(<?php the_field('perfil_background', 276); ?>"></div>
                        <div class="home-link">
                            <a href="#second"><span>perfil</span></a>
                        </div>
                    </div>
                      <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(<?php the_field('proyectos_background', 276); ?>)"></div>
                        <div class="home-link">
                            <a href="#sixth"><span>Proyectos</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(<?php the_field('contacto_background', 276); ?>)"></div>
                        <div class="home-link">
                            <a href="#seventh"><span>contacto</span></a>
                        </div>
                    </div>
                </div>
            </div><!-- END RIGHT 1 -->

            <!--  RIGHT 3 -->             
            <div class="ms-section show-mobile" id="right3">
                <div class="overlay-right"></div>
                <div class="section-design section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>
                            <h1>ARQUITECTURA</h1>
                            <p>

                                                           
                                </p>  
                             <p><?php the_field('descripcion_arquitectura', 6); ?></p>
             
                                    
                              <div id="design-carousel">
                                <?php
                                    $images= get_field('design_gallery', 6);
                                    foreach($images as $image){
                                                            ?>
                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="<?= $image['url']; ?>">
                                        <div class="design-overlay"></div>
                                <div class="design-img" style="background-image: url(<?= $image['url']; ?>)"></div>
                                    </a>
                                </div>

                                <?php
                                    }

                            ?>

								                                                                               
                              
                              
                            </div>
                            <nav class="navigation">
                                <ul>
                                    <li class="prev"> <a class="prev-slide ion-arrow-left-c"></a></li> 
                                    <li class="next"><a class="next-slide ion-arrow-right-c"></a></li> 
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
            </div><!-- END RIGHT 3 -->

            


            <!-- RIGHT 2 -->
            <div class="ms-section show-mobile" id="right2">
                <div class="overlay-right"></div>
                <div class="section-about section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>
                            <h1>Perfil</h1>
                            <div class="about-sub">Roger Valerio y Asociados</div>
                           
                            <p><?php the_field('descripicion_perfil', 224); ?></p>

                            <hr>
                            <ul>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup">Roger Valerio</a></li>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup-1">Roger Valerio G</a></li>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup-2">Marcel Valerio</a></li>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup-3">Marcela Valerio</a></li>
                            </ul> 
                            <div id="about-popup" class="about-popup-options mfp-hide">
                                <div class="team-background" style="background-image: url(img/about/roger-sr-head-bg.jpg)"></div>
                                <div class="team-image" style="background-image: url(img/about/roger-sr-head.jpg)"></div>
                                <p class="team-name">Roger Valerio</p>
                                <p class="team-profession">Arquitecto/Gerente General</p>
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="about-popup-1" class="about-popup-options mfp-hide">
                                <div class="team-background" style="background-image: url(img/about/roger-jr-head-bg.jpg)"></div>
                                <div class="team-image" style="background-image: url(img/about/roger-jr-head.jpg)"></div>
                                <p class="team-name">Roger Valerio G.</p>
                                <p class="team-profession">Gerente de Operaciones</p>
                                <p class="team-profession">EMBA INCAE</p>
                                <p class="team-profession">Building Construction Manager - FIU</p>
                                <div class="team-social">
                                    <ul>
                                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                                        <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="about-popup-2" class="about-popup-options mfp-hide">
                                <div class="team-background" style="background-image: url(img/about/marcel-head.jpg)"></div>
                                <div class="team-image" style="background-image: url(img/about/marcel-head.jpg)"></div>
                                <p class="team-name">Marcel Valerio</p>
                                <p class="team-profession">Gerente Administrativo</p>
                                <p class="team-profession">Lic. En Finanzas - U. Carlos III Madrid</p>
                                <div class="team-social">
                                    <ul>
                                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                                        <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="about-popup-3" class="about-popup-options mfp-hide">
                                <div class="team-background" style="background-image: url(img/about/marcela-head.jpg)"></div>
                                <div class="team-image" style="background-image: url(img/about/marcela-head.jpg)"></div>
                                <p class="team-name">Marcela Valerio</p>
                                <p class="team-profession">Directora de Diseño</p>
                                <p class="team-profession">Arquitecta - UPV - ETSASS</p>
                                <div class="team-social">
                                    <ul>
                                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                                        <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END RIGHT 2 -->

            

             

            <!-- RIGHT 4 -->
            <div class="ms-section show-mobile" id="right5">
                <div class="overlay-right"></div>
                <div class="section-services section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                           <div id="icsa"><img src="img/icsa.png" style="float:right"></div> 

                            <div class="border"></div>
                            <h1>DESARROLLO</h1>
                             <p><?php the_field('descripcion_de_desarrollo', 235); ?></p>
                                    
                    </div> 
                </div>
            </div>
            <!-- RIGHT 4 -->
            
            <!-- RIGHT 5 -->
            <div class="ms-section show-mobile" id="right4">
                <div class="overlay-right"></div>
                <div class="section-services section" id="construction">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>

                            <h1>CONSTRUCCION</h1>
                           
                             <p><?php the_field('descripcion_de_construccion', 239); ?></p>

                          
                            
                            
                        </div>     
                    </div> 
                </div>
            </div>
            <!-- RIGHT 5 -->

            <!-- RIGHT 6 -->
            <div class="ms-section show-mobile" id="right6">
                <div class="overlay-right"></div>
                <div class="section-projects section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="section-one">
                                <div class="border"></div>
                                <h1>PROYECTOS</h1>
                              
                                <p><?php the_field('descripcion_de_proyectos', 26); ?></p>
                                <div class="projects-list list-a">
                                    <ul>
                                        <li><a href="proyectos.php"><strong>Ver todos los proyectos</strong></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="section-two p-h1 display-none">
                                <div class="border"></div>

                                <?php

                                      
                                        if( have_rows('projects', 26) ):

                                          
                                            while ( have_rows('projects', 26) ) : the_row();

                                               
                                               echo "<h1>" . the_sub_field('nombre') . "</h1>";

                                               echo "<p>" .  the_sub_field('descripcion') . "</p>";
                                            endwhile;

                                        else :

                                            // no rows found

                                        endif;

                                        ?>


                                <?php

                                    $rows = get_field('projects', 26);

                                    if ($rows) {

                                        echo '<div class="projects-list list-b">';
                                        echo "<ul>";

                                        foreach ($rows as $row) {
                                            
                                            echo '<li> <span> Equipo de diseño</span>: ' . $row['team'] . '</li>';
                                            echo '<li> <span> Compañeros</span>: ' . $row['companeros'] . '</li>';
                                            echo '<li> <span> Cliente</span>: ' . $row['cliente'] . '</li>';
                                             echo '<li> <span> Detalle</span>: ' . $row['detalle'] . '</li>';

 

                                        }

                                        echo "</ul>";
                                        echo "</div>";
                                    }

                                ?>

                                    

                                     <nav class="navigation">
                                              <ul>
                                                    <li class="close-projects"><a class="ion-close-round"></a></li> 
                                             </ul>
                                     </nav>

                                 </div>

                                <nav class="navigation">
                                    <ul>
                                        <li class="close-projects"><a class="ion-close-round"></a></li> 
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- RIGHT 6 -->
            
            <!-- RIGHT 7 -->
            <div class="ms-section show-mobile" id="right7">
                <div class="overlay-right"></div>
                <div class="section-contact section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>
                            <h1>CONTACTO</h1>
                            <div class="row">
                                <form name="sentMessage" id="contactForm" novalidate>
                                    <div class="col-md-6 form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required data-validation-required-message="Please enter your name." />
                                        <span class="help-block text-danger"></span>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required data-validation-required-message="Please enter your email." />
                                        <span class="help-block email"></span>
                                    </div>
                                    <div class="col-xs-12 col-md-12 form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                                        <span class="help-block message"></span>
                                    </div>
                                    <div class="col-xs-12 col-md-12 form-group">
                                        <button class="contact-button" type="submit">SUBMIT</button>
                                        <a class="map-popup-link mfp-fade map" href="#map-popup">Find Us</a>
                                    </div>
                                </form>
                                <div id="success"></div>
                                <div id="map-popup" class="contact-popup-options mfp-hide">
                                   <div id="map_div"></div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div> 
                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/pages/ROGER-VALERIO-ARQUITECTURA/113394305343599" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://ni.linkedin.com/in/roger-valerio-9082a842" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">Roger Valerio Arquitectura - 2016 &copy;</div>
            </div><!-- END RIGHT 7-->

            


             
    
        </div><!-- END MS-RIGHT -->

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
    <script>

        var background_left = "<?php echo the_field('background_image_left', 26); ?>";
        var background_right = "<?php echo the_field('background_image_right', 26); ?>";

        var background_profile_left = "<?php echo the_field('background_profile_left', 224); ?>";

        var background_profile_right = "<?php echo the_field('background_profile_right', 224); ?>";


        var background_arquitectura_left = "<?php echo the_field('background_arquitectura_left', 6); ?>";
        
        var background_arquitectura_right = "<?php echo the_field('background_arquitectura_right', 6); ?>";


           var background_construccion_left = "<?php echo the_field('background_construccion_left', 239); ?>";
        
        var background_construccion_right = "<?php echo the_field('background_construccion_right', 239); ?>";


           var background_development_left = "<?php echo the_field('background_development_left', 235); ?>";
        
        var background_development_right = "<?php echo the_field('background_development_right', 235); ?>";

          var background_contact_left = "<?php echo the_field('background_contact_left', 267); ?>";
        
        var background_contact_right = "<?php echo the_field('background_contact_right', 267); ?>";

    </script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
