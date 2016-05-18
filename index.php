<?php 
define('WP_USE_THEMES', false);
require('manage/wp-blog-header.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Roger Valerio - Deseno</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

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

</head>
<body>
    
    <!-- LOADER -->
    <div class="loader-background">
        <div class="loader-center"> 
            <div class="loader-frame">
                <div class="loader-name">RV</div>
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
                    <li data-menuanchor="second"><a href="#third">Desenos</a></li>
                    <li data-menuanchor="third"><a href="#second">Perfil</a></li>
                    <li data-menuanchor="fourth"><a href="#fourth">Proyectos</a></li>
                    <li data-menuanchor="sixth"><a href="#sixth">Contacto</a></li>
                </ul>
            </div>
            <div class="menu-name">RV</div>
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
                            <div class="home-name"><span><span>ROGER</span></span></div>
                            <div class="home-sub-a"><span><span>Valerio</span></span></div>
                            <div class="home-sub-b"><span>Deseno</span></div>
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
                        <div class="home-img" style="background-image: url(img/bg-images/design-nav.jpg)"></div> 
                        <div class="home-link">
                            <a href="#third"><span>deseno</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/bg-images/projects-nav.jpg)"></div>
                        <div class="home-link">
                            <a href="#fourth"><span>proyectos</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/bg-images/services-nav.jpg)"></div> 
                        <div class="home-link">
                            <a href="#fifth"><span>servicios</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/bg-images/about-nav.jpg)"></div>
                        <div class="home-link">
                            <a href="#second"><span>perfil</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/bg-images/contact-nav.jpg)"></div>
                        <div class="home-link">
                            <a href="#sixth"><span>contacto</span></a>
                        </div>
                    </div>
                </div>
            </div><!-- END RIGHT 1 -->

            <!-- END RIGHT 3 -->             
            <div class="ms-section show-mobile" id="right3">
                <div class="overlay-right"></div>
                <div class="section-design section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>
                            <h1>DESENO</h1>
                            <p>Roger Valerio abre como parte de su nueva estrategia corporativa el área de desarrollos urbanísticos. En esta nueva etapa, pretendemos crear proyectos de gran plusvalía utilizando diseños y conceptos modernos. De manera precisa el área de diseño y construcción se complementa para la creación de proyectos que se ajusten a las necesidades financieras de nuestros clientes.</p>
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

															<?
																	}

															?>

                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="img/designs/design-1.jpg">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(img/designs/design-1.jpg)"></div>
                                    </a>
                                </div>
                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="img/designs/design-1.jpg">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(img/designs/design-1.jpg)"></div>
                                    </a>
                                </div>
                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="img/designs/design-2.jpg">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(img/designs/design-2.jpg)"></div>
                                    </a>
                                </div>
                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="img/designs/design-3.jpg">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(img/designs/design-3.jpg)"></div>
                                    </a>
                                </div>
                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="img/designs/design-4.jpg">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(img/designs/design-4.jpg)"></div>
                                    </a>
                                </div>
                                <div class="design-item design-height">
                                    <a class="design-popup-link mfp-fade" href="img/designs/design-5.jpg">
                                        <div class="design-overlay"></div>
                                        <div class="design-img" style="background-image: url(img/designs/design-5.jpg)"></div>
                                    </a>
                                </div>
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
                            <div class="about-sub">Somos Disenos Managua</div>
                            <p>Por un poco más de dos décadas Roger Valerio Arquitectura ha estado brindando soluciones Arquitectónicas y de diseño de interiores a prestigiosos clientes en el sector hotelero, comercial, residencial, industrial en Guatemala y Nicaragua.</p>
                            <hr>
                            <ul>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup">Roger Valerio</a></li>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup-1">Roger Valerio Junior</a></li>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup-2">Marcel Valerio</a></li>
                                <li><a class="about-popup-link mfp-fade" data-mfp-src="#about-popup-3">Marcela Valerio</a></li>
                            </ul> 
                            <div id="about-popup" class="about-popup-options mfp-hide">
                                <div class="team-background" style="background-image: url(img/about/roger-sr-head-bg.jpg)"></div>
                                <div class="team-image" style="background-image: url(img/about/roger-sr-head.jpg)"></div>
                                <p class="team-name">Roger Valerio</p>
                                <p class="team-profession">Owner/Founder</p>
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
                                <p class="team-name">Roger Valerio Junior</p>
                                <p class="team-profession">Construcion</p>
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
                                <p class="team-profession">Desarollador</p>
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
                                <p class="team-name">MarcelaValerio</p>
                                <p class="team-profession">Architectura</p>
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
            <div class="ms-section show-mobile" id="right4">
                <div class="overlay-right"></div>
                <div class="section-projects section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="section-one">
                                <div class="border"></div>
                                <h1>PROJECTS</h1>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p> 
                                <div class="projects-list list-a">
                                    <ul>
                                        <li><a class="projects-link-1"><span>Cosas - </span>Proyecto en Espanol</a></li>
                                        <li><a class="projects-link-2"><span>Otra Cosas & Deseno - </span>Sed ut perspiciat</a></li>
                                        <li><a class="projects-link-3"><span>Oficina & Comercial  - </span>Otra proyecto en espanol</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section-two p-h1 display-none">
                                <div class="border"></div>
                                <h1>Cosas</h1>                         
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium laborum excepturi quasi suscipit, perspiciatis eligendi sit nesciunt provident quaerat cupiditate maiores pariatur iure eaque.</p>
                                <div class="projects-list list-b">
                                    <ul>
                                        <li><span>Design team </span>: Marcela Valerio, Roger Valerio</li>
                                        <li><span>Projects partners </span>: Marcel Valerio.</li>
                                        <li><span>Client </span>: Yellew Associates.</li>
                                        <li><span>Details </span>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nisi, iusto amet dignissimos expedita alias libero temporibus earum? Mollitia dolor illum.</li>
                                    </ul>
                                </div>
                                <nav class="navigation">
                                    <ul>
                                        <li class="close-projects"><a class="ion-close-round"></a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <div class="section-three p-h1 display-none">
                                <div class="border"></div>
                                <h1>Honoré d'Urfé School Complex</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium laborum excepturi quasi suscipit, perspiciatis eligendi sit nesciunt provident quaerat cupiditate maiores pariatur iure eaque.</p>
                                <div class="projects-list list-b">
                                    <ul>
                                        <li><span>Design team </span>: Maria Kers , John Willis</li>
                                        <li><span>Projects partners </span>: John Willis + Partners.</li>
                                        <li><span>Client </span>: Yellew Associates.</li>
                                        <li><span>Details </span>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nisi, iusto amet dignissimos expedita alias libero temporibus earum? Mollitia dolor illum.</li>
                                    </ul>
                                </div>
                                <nav class="navigation">
                                    <ul>
                                        <li class="close-projects"><a class="ion-close-round"></a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <div class="section-four p-h1 display-none">
                                <div class="border"></div>
                                <h1>Novancia Business School</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium laborum excepturi quasi suscipit, perspiciatis eligendi sit nesciunt provident quaerat cupiditate maiores pariatur iure eaque.</p>
                                <div class="projects-list list-b">
                                    <ul>
                                        <li><span>Design team </span>: Maria Kers , John Willis</li>
                                        <li><span>Projects partners </span>: John Willis + Partners.</li>
                                        <li><span>Client </span>: Yellew Associates.</li>
                                        <li><span>Details </span>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nisi, iusto amet dignissimos expedita alias libero temporibus earum? Mollitia dolor illum.</li>
                                    </ul>
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
            </div><!-- RIGHT 4 -->
            
            <!-- RIGHT 5 -->
            <div class="ms-section show-mobile" id="right5">
                <div class="overlay-right"></div>
                <div class="section-services section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>
                            <h1>SERVICES</h1>
                            <div id="services-carousel">
                                <div class="services-item"> 
                                    <div class="block">
                                        <h2>Architectural Design</h2>
                                        <div class="border"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="services-item"> 
                                    <div class="block">
                                        <h2>Sustainable Architecture</h2>
                                        <div class="border"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="services-item"> 
                                    <div class="block">
                                        <h2>Space Planning Design</h2>
                                        <div class="border"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                                <div class="services-item"> 
                                    <div class="block">
                                        <h2>Interior Design</h2>
                                        <div class="border"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <nav class="navigation">
                                <ul>
                                    <li class="prev"><a class="prev-slide ion-arrow-left-c"></a></li> 
                                    <li class="next"><a class="next-slide ion-arrow-right-c"></a></li> 
                                </ul>
                            </nav>
                        </div>     
                    </div> 
                </div>
            </div><!-- RIGHT 5 -->
            
            <!-- RIGHT 6 -->
            <div class="ms-section show-mobile" id="right6">
                <div class="overlay-right"></div>
                <div class="section-contact section">
                    <div class="center">
                        <div class="col-md-7 section-margin">
                            <div class="border"></div>
                            <h1>CONTACT</h1>
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
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">Roger Valerio Architects - 2016 &copy;</div>
            </div><!-- END RIGHT 6 -->
    
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
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
