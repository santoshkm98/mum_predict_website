<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumpredict</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css" />

<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css" />
</head>
<body>
<header>

<div class="headmenu-cover">

   <div class="fixed-columns">

      <div class="logo">

         <a href="/">

            <img src="<?php bloginfo('template_directory') ?>/images/mumpredict-logo.png" alt="" class="ftimg"></a>

      </div>

      <div class="header-menu">

         <div class="header-topcover">

            <div class="menuside-icon">

               <span class="menuopen menu-tab"> <span class="menuopenhamb"> </span> </span>

               <div class="menuholder menu-hide">

                  <span class="menuopen menu-tab"> </span>

                  <ul class="sidemenu">

                     <li><a class="menu-link" href="<?php echo home_url(); ?>"> Home </a></li>
                     

                     <li>

                        <a class="menu-link">Our Team</a>

                        <ul>
                           <li><a class="menu-link" href="<?php echo home_url(); ?>/team"> Team</a></li>
                           <li><a class="menu-link" href="<?php echo home_url(); ?>/external-advisory-group/"> External Advisory Group </a></li>
                       

                        </ul>
                     </li>
                     <li>

<a class="menu-link">Resources</a>

<ul>
   <li><a class="menu-link" href="<?php echo home_url(); ?>/meeting-minutes/"> Meeting Minutes</a></li>
   <li><a class="menu-link" href="<?php echo home_url(); ?>/resources/"> Research Documents</a></li>


</ul>
</li>

<li><a class="menu-link" href="<?php echo home_url(); ?>/blog/"> Blog </a></li>
                    



                   

                  </ul>

               </div>

            </div>

         </div>

      </div>

   </div>

</div>

</header>
<script src="<?php bloginfo('template_directory') ?>/js/jquery-1.9.1.js"></script>

<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/slick.js"></script>
<script type="text/javascript">

$(document).ready(function () {



   $('.menu-tab').click(function () {



      $('.menu-hide').toggleClass('show');



      $('.menu-tab').toggleClass('active');



   });



   $('.menuopen.active').click(function () {



      $('.menu-hide').removeClass('show');



      $('.menu-tab').removeClass('active');



   });







   $('.menuholder > ul > li:has( > ul)').addClass('menu-dropdown-iconh');



   $(".menuholder > ul > li").click(function () {



      if ($(window).width() <= 991) {



         if ($($(this).children("ul")).hasClass("exp-dwnrr")) {



            $($(this).children("ul.exp-dwnrr")).removeClass("exp-dwnrr").slideUp(150);



            $(this).removeClass("of-dwn");



         }



         else {



            $('.sidemenu li ul').not($(this).siblings()).removeClass("exp-dwnrr").slideUp(150);

            $($(this).children("ul")).addClass("exp-dwnrr").slideDown(150);



            $(this).addClass("of-dwn");

            $("ul.sidemenu li").not($(this)).removeClass("of-dwn");



         }



      }



   });

});


</script>
