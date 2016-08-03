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
                                
                      <?php $x = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                       <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                           
                           $left_image = get_sub_field('background_project_left');
                                                    

                            echo '<div class="ms-section hide-mobile ms-table vegas-container" id="left' . $x . '" data-anchor="slide' . $x . '" style="height: 100%; background-color: rgb(255, 255, 255);">';

                            echo '<div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: all 1000ms;">';

                            echo '  <div class="vegas-slide-inner vegas-animation-kenburns" style="animation-duration: 7000ms; background-image: url('. $left_image .'); background-color: rgb(255, 255, 255); background-position: right center;">';
                            echo "</div>";
                            echo " </div>";
                            echo '<div class="ms-tableCell" style="height: 979px"></div>';
                            echo " </div>";


                         $x++;
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
                     <?php $right_image = get_sub_field('background_project_right'); ?>
                <?php echo '<div class="ms-section show-mobile" id="right'. $counter . ' style="height: 100%; background-color: rgb(255, 255, 255);">'; 
                    echo '<div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: all 1000ms;">';
                    echo '<div class="vegas-slide-inner vegas-animation-kenburns" style="animation-duration: 7000ms; background-image: url('.  $right_image .'); background-color: rgb(255, 255, 255); background-position: left center;">';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="ms-tableCell" style="height: 677px">';

                ?>
                

                
        
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
    <script type="text/javascript" >
    	/*
Theme Name: ARD
Description: Architecture Template
Author: SenorCoders
Version: 1.2
*/

/* ==================================================================
 
 * Table of Contents:
 *
 * 1.0 - Menu features
 * 2.0 - Multiscroll
 * 3.0 - Reverse sections 
 * 4.0 - Detect mobile
 * 5.0 - Resize
 * 6.0 - Close button projects
 * 7.0 - Section 
  background
 * 8.0 - Fade in-out projects sections
 * 9.0 - Bigtext
 * 10.0- Homeheight owl-carousel
 * 11.0- Design owl-carousel
 * 12.0- Scroll down-up
 * 13.0- Team lightbox
 * 14.0- Design lightbox
 * 15.0- Map lightbox
 * 16.0- Google map
 * 17.0- Contact form
 * 18.0- Add #first on load

================================================================== */

$(document).ready(function() {
    "use strict";

    //MENU FEATURES
    function homeheightmenu() {
        $(".home-link").css({
            "margin-top": -1 * $(".home-link").height() / 2 + "px"
        });
        $(".home-height").css({
            height: $(window).outerHeight(true)
        });
    }
    homeheightmenu();

    //MULTISCROLL
    $('#main-container').multiscroll({
        sectionsColor: ['white',

        	<?php $s = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                        <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                           

					    echo "'white',"; 


                         $s++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>

        ],
        anchors: [ 'slide1',

        		<?php $p = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                        <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                           

					    echo "'slide". $p ."',"; 


                         $p++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>


       ],
        easing:'easeInOutCubic',
        menu:'.menu-left',
        scrollingSpeed: 1000,
        afterLoad: function(anchorLink, index) {
            $(".loader-frame").fadeOut();
            if (index == 1){
                if ($(window).width() <= 1024) { 
                $(".loader-background").animate({width:'0%'},600,'swing').fadeOut();
                $('.updown-navigation').fadeOut(450);
                $('.menu-left').fadeOut(450);
                }
                else{ 
                $(".loader-background").animate({width:'40%'},600,'swing').fadeOut();
                $('.updown-navigation').fadeOut(450);
                $('.menu-left').fadeOut(450);
                }
            } else{
                $('.updown-navigation').fadeIn(450);
                $('.menu-left').fadeIn(450);
            }
            sectionimage(anchorLink, index);
            naviclose(anchorLink, index);        
        }
    });

    //REVERSE SECTIONS (MOBILE)
    function reverseSection() {
        if ($(window).width() <= 1024) {

        	<?php $q = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                        <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                           

					    echo '  $("#right'. $q .'").insertAfter("#right'. ($q-1) .'");'; 


                         $q++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>
            
          



        } else {

        	<?php $z = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                        <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                           

					    echo '  $("#right'. $z .'").insertBefore("#right'. ($z-1) .'");'; 


                         $z++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>
                 }
    }
    reverseSection();

    //DETECT MOBILE
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if(isMobile.iOS()) {
        if ($(window).width() <= 1024) { 
          $('html, body').css({
            'overflow' : 'auto',
            'height' : 'auto'
          });
        }
    } 
    if(isMobile.any()){}else{ 
        $(window).resize(function(){
            reverseSection();  
            $(".active .vegas-slide-inner").css("animation","0");
        });
    }
    if ((window.screen.width > 1024)  || (window.screen.height > 1024)){   
        $(window).on("orientationchange",function(){
            location.reload(); 
        });   
    }
    
    //RESIZE
    $(window).resize(function(){
        homeheightmenu();
    });

    //CLOSE BUTTON PROJECTS
    function naviclose(anchorLink, index) {
        if ($(window).width() > 1024) {
            if (index == 4){
                $('.section-projects .navigation').fadeIn('slow');
            } else{
                $('.section-projects .navigation').fadeOut('slow');
            }
        } 
    }
    
    //SECTION IMAGE BACKGROUND
    function sectionimage(anchorLink, index){
        //ABOUT


    }

    //FADE IN-OUT PROJECTS SECTIONS
    $('.projects-link-1').on("click", function(e) {
        if (nodoubleclick) return;
        nodoubleclick = true;
        e.preventDefault();
        $('.section-one').fadeOut( 650, function(){
            $('.section-two').addClass('active-section');
            $('.section-two').hide().fadeIn(850);
            if ($(window).width() > 1024) {
            $('#left4').vegas('options', 'transition', 'slideLeft2').vegas('jump',1);//PROJECT 1
            $('#right4').vegas('options', 'transition', 'slideRight2').vegas('jump',1);//PROJECT 1
            }
        });
    });
    $('.projects-link-2').on("click", function(e) {
        if (nodoubleclick) return;
        nodoubleclick = true;
        e.preventDefault();
        $('.section-one').fadeOut( 650, function(){
            $('.section-three').addClass('active-section');
            $('.section-three').hide().fadeIn(850);
            if ($(window).width() > 1024) {
            $('#left4').vegas('options', 'transition', 'slideLeft2').vegas('jump',2);//PROJECT 2
            $('#right4').vegas('options', 'transition', 'slideRight2').vegas('jump',2);//PROJECT 2
            }
        });
    });
    $('.projects-link-3').on("click", function(e) {
        if (nodoubleclick) return;
        nodoubleclick = true;
        e.preventDefault();
        $('.section-one').fadeOut( 650, function(){
            $('.section-four').addClass('active-section');
            $('.section-four').hide().fadeIn(850);
            if ($(window).width() > 1024) {
            $('#left4').vegas('options', 'transition', 'slideLeft2').vegas('jump',3);//PROJECT 3
            $('#right4').vegas('options', 'transition', 'slideRight2').vegas('jump',3);//PROJECT 3
            }
        });
    });
    $('.close-projects').on("click", function(e) {
        nodoubleclick = false;
        e.preventDefault();
        $('.active-section').fadeOut( 650, function(){
            $(this).removeClass('active-section');
            $('.section-one').hide().fadeIn(850);
            if ($(window).width() > 1024) {
            $('#left4').vegas('options', 'transition', 'slideLeft2').vegas('jump',0);//MAIN BACKGROUND
            $('#right4').vegas('options', 'transition', 'slideRight2').vegas('jump',0);//MAIN BACKGROUND
            }
        });
    });var nodoubleclick = false;

    //BIGTEXT
    $('.home-name').bigtext({
        maxfontsize: 115
    });
    $('.home-sub-a').bigtext({
        maxfontsize: 85
    });
    
    //HOMEHEIGHT OWL-CAROUSEL
    var homeheight = $("#home-carousel");
    homeheight.owlCarousel({
        navigation: false,
        slideSpeed: 500,
        items: 3,
        pagination: false,
        autoHeight: true,
        itemsDesktop : [1200,2]
    });
    $(".home-navigation ul .next").on("click", function() {
        homeheight.trigger("owl.next");
    });
    $(".home-navigation ul .prev").on("click", function() {
        homeheight.trigger("owl.prev");
    });
    
    //DESIGN OWL-CAROUSEL
    

    	<?php $d = 2;?>
                    <?php if( have_rows('lista_de_proyectos', 26) ): ?>

                        <?php while ( have_rows('lista_de_proyectos', 26) ) : the_row(); 
                           

					    echo 'var design = $("#design-carousel-'. $d .'");
					    design.owlCarousel({
					        navigation: false,
					        slideSpeed: 500,
					        items: 3,
					        pagination: false,
					        itemsDesktop : [1200,3]
					    });
					    $(".navigation ul .next").on("click", function() {
					        design.trigger("owl.next");
					    });
					    $(".navigation ul .prev").on("click", function() {
					        design.trigger("owl.prev");
					    });'; 


                         $d++;
                       endwhile;
                    else :
                    // no rows found
                    endif; ?>
           
     
    //SERVICES OWL-CAROUSEL
    var services = $("#services-carousel");
    services.owlCarousel({
        navigation: false,
        slideSpeed: 500,
        items: 3,
        pagination: false,
        itemsDesktop : [1400,2]
    });
    $(".navigation ul .next").on("click", function() {
        services.trigger("owl.next");
    });
    $(".navigation ul .prev").on("click", function() {
        services.trigger("owl.prev");
    });
   
    //SCROLL DOWN-UP
    $(".updown-navigation ul .up").on("click", function() {
        $('#main-container').multiscroll.moveSectionUp();
    });
    $(".updown-navigation ul .down").on("click", function() {
        $('#main-container').multiscroll.moveSectionDown();
    });

    //TEAM LIGHTBOX
    $('.about-popup-link').magnificPopup({
        type: 'inline',
        mainClass: 'mfp-fade',
        removalDelay: 400
    });
   
    //DESIGN IMAGES LIGHTBOX
   $('.design-popup-link').magnificPopup({
       type:'image',
       closeBtnInside: false,
       mainClass: 'mfp-fade',
       removalDelay: 400,  gallery: {
     enabled: true 
   }
   });
    //GOOGLE MAP LIGHTBOX
    $('.map-popup-link').magnificPopup({
        type: 'inline',
        mainClass: 'mfp-fade',
        removalDelay: 400,
        callbacks: {
        open: function () {
            initializeGoogleMap();
        },
        close: function () {
        }
        }
    });

    //GOOGLE MAP
    function initializeGoogleMap() {
        var styles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"landscape.man_made","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"lightness":"100"}]},{"featureType":"landscape.natural","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"off"},{"lightness":"23"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#EBD9A0"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#EBD9A0"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#cccccc"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]}];
        var styledMap = new google.maps.StyledMapType(styles,
        {name:"Styled Map"});
        var myLatlng = new google.maps.LatLng(48.8588589,2.3475569);
        var myOptions = {
        center: myLatlng,
        zoom: 14,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        disableDefaultUI: true
        };
        var map = new google.maps.Map(document.getElementById("map_div"), myOptions);
        var marker = new google.maps.Marker({
        position: myLatlng
        });
        google.maps.event.addListener(marker,"click", function () {
        infowindow.open(map, marker);
        });
        marker.setMap(map);
        map.mapTypes.set("2", styledMap);
        map.setMapTypeId("2");
    }
    initializeGoogleMap();

    //CONTACT FORM
    $("input,textarea").jqBootstrapValidation({
        
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
        event.preventDefault(); 
        var name = $("input#name").val();  
        var email = $("input#email").val(); 
        var message = $("textarea#message").val();
        var firstName = name; 
        if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
        }        
        $.ajax({
                url: "./js/mailer.php",
                type: "POST",
                data: {name: name, email: email, message: message},
                cache: false,
                success: function() {  
                // Success message
                $('#success').html("<div class='alert alert-success'>");
                $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append( "</button>");
                $('#success > .alert-success').append("Your message has been sent. ");
                $('#success > .alert-success').append('</div>');
                //clear all fields
                $('#contactForm').trigger("reset");
                },
                error: function() {      
                // Fail message
                $('#success').html("<div class='alert alert-danger'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append( "</button>");
                $('#success > .alert-danger').append("Sorry "+firstName+" it seems that my mail server is not responding");
                $('#success > .alert-danger').append('</div>');
                //clear all fields
                $('#contactForm').trigger("reset");
                },
                })
                },
                filter: function() {
                return $(this).is(":visible");
                },
                });
        $("a[data-toggle=\"tab\"]").on("click", function(e) {
                e.preventDefault();
                $(this).tab("show");
        });
        $('#name').on("focus", function() {
        $('#success').html('');
    
    });

});

$(window).load(function() {
    "use strict";
   
   //ADD #FIRST ON LOAD
   window.location.hash = '';
   window.location.hash = "slide1";
  
});

    </script>
    

</body>
</html>
