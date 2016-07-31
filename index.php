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
                        <div class="home-img" style="background-image: url(img/bg-images/design-nav.jpg)"></div> 
                        <div class="home-link">
                            <a href="#third"><span>Arquitectura</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/construction.jpg)"></div>
                        <div class="home-link">
                            <a href="#fourth"><span>Construcción</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/bg-images/services-nav.jpg)"></div> 
                        <div class="home-link">
                            <a href="#fifth"><span>Desarrollo</span></a>
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
                            <a href="#sixth"><span>Proyectos</span></a>
                        </div>
                    </div>
                    <div class="home-item home-height">  
                        <div class="home-overlay"></div>
                        <div class="home-img" style="background-image: url(img/bg-images/contact-nav.jpg)"></div>
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
                                En nuestra firma establecemos una estrecha relación con nuestros clientes. Les ofrecemos un servicio personalizado para garantizar que sus ideas sean transformadas en una realidad. 
                                <br><br>
                               
                                Ofrecemos diferentes servicios en el sector de la construcción que abarcan desde la planificación, diseño, construcción, supervisión y administración de proyectos, lo cual nos permite ajustarnos económicamente a las necesidades de nuestros clientes.
                                
                                </p>      
                                    
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
                            <div class="about-sub">Roger Valerio y Asociados</div>
                            <p>Es una compañía de capital propio ubicada en el sector de la construcción y el diseño con más de 25 años de experiencia en proyectos residenciales, comerciales, industriales y turísticos . Estamos formados por un equipo de arquitectos, ingenieros y administradores con amplia experiencia y conocimiento en el sector. <br>

                            Nuestro perfil se extiende más allá de la típica firma de arquitectura. La empresa ha evolucionado a ser una firma de Diseño y Construcción, mediante el cual ambos rubros pueden ejecutarse bajo el mismo contrato coordinando la planificación y ejecución de obra. <br>

                            Como parte de la matriz estratégica nuestra posición es establecernos y posicionarnos firmemente en el mercado y buscar alternativas en el sector del turismo.</p>
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
                            <p>Inmobiliaria y Construcciones de Nicaragua S.A. (ICSA) nace como parte de la estrategia corporativa de expansión de RVA y plan de crecimiento en el sector inmobiliario en Nicaragua. 
                            <br><br>
                            En la actualidad nos encontramos en proceso de conceptualización y desarrollo de varios proyectos en el área de San Juan del Sur, Rivas. La idea es crear conceptos muy específicos destinados a un segmento de clientes (nacionales e internacionales) y pretendemos crear proyectos de gran plusvalía, utilizando diseños y conceptos modernos.</p>
                             
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
                            <h1>construcción</h1>
                            <p>
                                Nuestros pilares fundamentales del éxito y visión de trabajo son tres:

                              
                                    <p><strong>Proyectos en Tiempo y Forma</strong><br>Seguimiento al cronograma y programa de ejecución para asegurar una correcta administración durante la obra para entregar en el tiempo establecido. </p>
                                    <p><strong>Administración de proyecto / Project Management</strong><br>Planificación y administración para llevar un estricto control financiero. </p>
                                    <p><strong>Calidad</strong><br>Seguimos estrictos controles de calidad para garantizar la seguridad, durabilidad y funcionalidad de las obras que ejecutamos.</p>

                                  
                            </p>
                            
                            
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
                                <p>En nuestra empresa establecemos un servicio personalizado, nos acoplamos a las necesidades de nuestros clientes ofreciendo diferentes tipos de contratos, siempre asesorando de acuerdo a los alcances y necesidades del proyecto. Tenemos experiencia en diseñar y construir proyectos de gran plusvalía, producimos toda la documentación necesaria requerida para garantizar la correcta y debida ejecución de cualquier proyecto.</p> 
                                <div class="projects-list list-a">
                                    <ul>
                                        <li><a href="proyectos.php"><strong>Ver todos los proyectos</strong></a></li>
                                      <!--  <li><a class="projects-link-1"><span>Cosas - </span>Proyecto en Español</a></li>
                                        <li><a class="projects-link-2"><span>Otra Cosas & Diseños - </span>Sed ut perspiciat</a></li>
                                        <li><a class="projects-link-3"><span>Oficina & Comercial  - </span>Otra proyecto en espanol</a></li>-->
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

    </script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
