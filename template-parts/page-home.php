<?php
/*
  Template Name: Home Page
 */

// Custom Fields
$home_title_1                    = get_field('home_title_1');
$home_title_2                    = get_field('home_title_2');
$home_title_3                    = get_field('home_title_3');
$home_title_4                    = get_field('home_title_4');
$home_title_5					           = get_field('home_title_5');
$home_description_date_4         = get_field('home_description_date_4');
$home_description_month_4        = get_field('home_description_month_4');
$home_description_title_4        = get_field('home_description_title_4');
$home_description_intro_4        = get_field('home_description_intro_4');
$home_description_1              = get_field('home_description_1');
$home_description_1_span         = get_field('home_description_1_span');
$home_description_2              = get_field('home_description_2');
$home_description_2_span         = get_field('home_description_2_span');

get_header(); ?>

<div class="home">
   <div class="home-background">
     <div class="home-slogan">
       <h2>A theme of freedom</h2>
       <p>
         No limits of what you can achieve, Just dream about it & we’ll build it
       </p>
     </div>
   </div>

   <div class="home-second-overlay">
     <div class="home-second-background">
     </div>
   </div>

  <div class="container">
    <div class="home-button">
      <a href="#" class="home-button-link btn">My Work</a>
    </div>
    <!-- <div class="home-intro">
      <div class="home-intro-title">
        <h2><?php echo $home_title_1 ?></h2>
        <h2><?php echo $home_title_2 ?></h2>
      </div>

      <div class="introduction">
        <input type="checkbox" class="read-more-state" id="post-1" />
        <p class="read-more-wrap" id="post-1">
          <?php echo $home_description_1 ?>
          <span class="read-more-target">
            <?php echo $home_description_1_span ?>
          </span>
        </p>
        <label for="post-1" class="read-more-trigger"></label>
      </div>
    </div>

    <div class="about-us">
      <h2><?php echo $home_title_3 ?></h2>
      <input type="checkbox" class="read-more-state" id="post-2" />
      <p class="read-more-wrap" id="post-2">
        <?php echo $home_description_2 ?>
        <span class="read-more-target">
          <?php echo $home_description_2_span ?>
        </span>
      </p>
      <label for="post-2" class="read-more-trigger"></label>
    </div> -->
  </div>

  <div class="home-about">
    <div class="container">
      <div class="home-about-slogan">
        <h2>Choose a concept</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas elementum ultricies. Nulla facilisi. Mauris et urna nec dui porta elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam molestie nisi at facilisis dictum. Pellentesque porttitor, arcu quis ultricies aliquam, est turpis scelerisque nunc, vel lobortis orci augue vel quam. Aenean suscipit fringilla nisl. Aenean euismod, arcu at mattis suscipit, justo velit volutpat justo, ut vehicula justo mauris vel libero.
          Etiam posuere eleifend justo, et dapibus nisi finibus eget. Nam cursus iaculis lacus vitae tincidunt. Duis porttitor lacus vel sem blandit maximus. Cras ut interdum dolor. Quisque tempor euismod malesuada. Vestibulum hendrerit dui egestas tempor tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sed nisl viverra risus bibendum iaculis ut quis ex. Nulla vel porttitor est. Duis eu porta mi. Vivamus pretium faucibus eros a laoreet. Suspendisse placerat tellus at ex consectetur, vitae dapibus turpis varius. Aenean eget augue sit amet justo finibus varius. Pellentesque tincidunt elit dictum enim aliquet suscipit.
        </p>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_1.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_1.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_1.jpg"/>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_2.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_2.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_2.jpg"/>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_1.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_1.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_1.jpg"/>
        </div>
      </div>
    </div>
  </div>

  <div class="home-contact">
    <div class="container">
      <h2>New ideas to new life</h2>
      <p>
        We are different we think of new great ideas and bring them directly to our clients!
      </p>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_7.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_8.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_9.jpg"/>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_10.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_11.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_7.jpg"/>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_8.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_9.jpg"/>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <img class="img-thumbnail img-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/img_10.jpg"/>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
