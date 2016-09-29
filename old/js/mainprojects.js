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
        sectionsColor: ['white','white','white','white','white','white', 'white', 'white'],
        anchors: ['slide1','slide2','slide3','slide4','slide5','slide6', 'slide7', 'slide8'],
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
            $("#right2").insertAfter("#right1");
            $("#right3").insertAfter("#right2");
            $("#right4").insertAfter("#right3");
            $("#right5").insertAfter("#right4");
            $("#right6").insertAfter("#right5");
            $("#right7").insertAfter("#right6");
            $("#right8").insertAfter("#right7");
          



        } else {
            $("#right2").insertBefore("#right1");
            $("#right3").insertBefore("#right2");
            $("#right4").insertBefore("#right3");
            $("#right5").insertBefore("#right4");
            $("#right6").insertBefore("#right5");
            $("#right7").insertBefore("#right6");
            $("#right8").insertBefore("#right7");




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
    var design = $("#design-carousel");
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
    });

     var design = $("#design-carousel-2");
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
    });

      var design = $("#design-carousel-3");
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
    });


      var design = $("#design-carousel-4");
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
    });


      var design = $("#design-carousel-5");
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
    });

      var design = $("#design-carousel-6");
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
    });
    

    var design = $("#design-carousel-7");
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
    });

    var design = $("#design-carousel-8");
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
    });

    var design = $("#design-carousel-9");
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
    });

    var design = $("#design-carousel-10");
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
    });

    var design = $("#design-carousel-11");
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
    });

    var design = $("#design-carousel-12");
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
    });

    var design = $("#design-carousel-13");
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
    });

    var design = $("#design-carousel-14");
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
    });

    var design = $("#design-carousel-15");
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
    });

    var design = $("#design-carousel-16");
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
    });

    var design = $("#design-carousel-17");
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
    });

    var design = $("#design-carousel-18");
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
    });

    var design = $("#design-carousel-19");
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
    });

    var design = $("#design-carousel-20");
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
    });

    var design = $("#design-carousel-21");
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
    });

    var design = $("#design-carousel-22");
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
    });

    var design = $("#design-carousel-23");
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
    });

    var design = $("#design-carousel-24");
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
    });

    var design = $("#design-carousel-25");
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
    });

    var design = $("#design-carousel-26");
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
    });

    var design = $("#design-carousel-27");
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
    });

    var design = $("#design-carousel-28");
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
    });

    var design = $("#design-carousel-29");
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
    });

    var design = $("#design-carousel-30");
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
    });

    var design = $("#design-carousel-31");
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
    

    });


    var design = $("#design-carousel-32");
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
    });

    var design = $("#design-carousel-33");
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
    });

    var design = $("#design-carousel-34");
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
    });

    var design = $("#design-carousel-35");
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
    });
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
